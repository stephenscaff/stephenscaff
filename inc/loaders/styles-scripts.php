<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/**
 * Styles and SCripts Loader
 */
class ScriptStyleLoader{
  
  const JQUERY = 'jquery';

  const JUMPOFF_JS = 'jumpoff_js';

  const JUMPOFF_STYLES = 'jumpoff_styles';

  const JUMPOFF_FONTS = 'jumpoff_fonts';

  /**
   * Constructor
   */
  function __construct(){
    add_action( 'wp_enqueue_scripts', array( $this, 'styles' ));
    add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ));
    add_filter( 'script_loader_tag', array( __CLASS__, 'async_scripts' ), 10, 2 );
    add_filter( 'style_loader_src', array( $this, 'remove_version') );
		add_filter( 'script_loader_src', array( $this, 'remove_version') );
  }

  /**
   * Styles Loader
   */
  function styles(){
    if ( !is_admin() ) {
      wp_register_style( self::JUMPOFF_STYLES, get_template_directory_uri() . '/assets/css/app.min.css', false );
      wp_register_style( self::JUMPOFF_FONTS, get_template_directory_uri() . '/assets/css/fonts.min.css', false );
      wp_enqueue_style( self::JUMPOFF_STYLES );
      wp_enqueue_style( self::JUMPOFF_FONTS );
    }  
  }

  /**
   * SCripts Loader
   */
  function scripts(){
    if ( !is_admin() ) {
      wp_deregister_script( self::JQUERY );
      wp_register_script( self::JQUERY, get_template_directory_uri() . '/assets/js/jquery.min.js', '', false, true );
      wp_register_script( self::JUMPOFF_JS, get_template_directory_uri() . '/assets/js/app.min.js', array( self::JQUERY ), false, true );
      wp_register_script( 'post_js', get_template_directory_uri() . '/assets/js/posts.min.js', array( 'jquery' ), false, true );
      
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( self::JUMPOFF_JS);
      //Post Pages
      if (is_single() ){
        wp_enqueue_script( 'post_js' );
      }
    }
  }	

  function remove_version($src){
		if ( strpos( $src, 'ver=' ) ) {
			$src = remove_query_arg( 'ver', $src );
		}
		return $src;
  }

  /**
   * Asynch Select JS
   */
	function async_scripts( $tag, $handle ) {
		if ($handle === self::JUMPOFF_JS) {
			return str_replace( 'src', ' async="async" src', $tag );
		} 
		elseif ($handle === self::JQUERY){
			return $tag;
		}
		else{
			return $tag;
		}
  }
}

new ScriptStyleLoader;