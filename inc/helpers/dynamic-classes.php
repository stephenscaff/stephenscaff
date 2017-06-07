<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/** 
 *  jumpoff_ids()
 *  Retrieves IDs to use in calling fields.
 *  @return: $id (the id of the post)
 *  @example: $postidd = jumpoff_ids();
 */
function jumpoff_ids() {
  global $post;
  $page_for_posts = get_option( 'page_for_posts' );
  $id;
  if( !is_object( $post ) ) 
     return;
  if (is_post_type_archive()){
    $post_type = get_queried_object();
    $cpt = $post_type->rewrite['slug'];
    $id = "cpt_$cpt";
  } elseif (is_home()){
    $id = 'options'; 
  } elseif (is_front_page()) {
    $id = get_option('page_on_front');
  } else{
    $id = $post->ID;
  }
  return $id;
}

/** 
 *  jumpoff_body_class
 *  Cleans up body classes, then adds custom, based on page or cpt names
 *  @return: $classes (string)
 */
function jumpoff_body_class($classes) {
  global $post, $page;

  // Call jumpoff_ids to select required id
  $id = jumpoff_ids();

  // Get field for Page Theme
  $page_theme = get_field('color_theme', $id);

  if (is_single() || is_page() && !is_front_page()) {
    $classes[] = 'page-'.basename(get_permalink());
  }
  if (is_home() || is_singular('post') || is_post_type_archive( 'post' )) {
    $classes[] = 'page-blog';
  }
  if (is_singular('work')) {
    $classes[] = 'page-work-single';
  }

  if (is_post_type_archive( 'work' )){
   $classes[] = 'page-work';
  }


  if ($page_theme) {
    $classes[] = $page_theme;
  }

  // Remove Classes
  $home_id_class = 'page-id-' . get_option('page_on_front');
  $page_id_class = 'page-id-' . get_the_ID();
  $post_id_class = 'postid-' . get_the_ID();
  $page_template_name_class = 'page-template-page-' . basename(get_permalink());
  $page_template_name_php = 'page-template-page-' . basename(get_permalink()) . '-php';
 
  // Remove Classes Array
  $remove_classes = array(
    'page-template-default', 
    'page-template', 
    'single-format-standard',
    $home_id_class,
    $page_id_class,
    $post_id_class,
    $page_template_name_class,
    $page_template_name_php
  );

  // Add specific classes
  //$classes[] = 'page-is-loading';
  $classes = array_diff($classes, $remove_classes);
  return $classes;
}

add_filter('body_class', 'jumpoff_body_class');



