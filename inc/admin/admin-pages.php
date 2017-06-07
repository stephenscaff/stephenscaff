<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
 * Register Options page for Login fields
 */
if( function_exists('acf_add_options_page') ) {
  
  /**
   * Company Contacts Page
   */
  $page_contacts = acf_add_options_page(array(
    'page_title'  => 'Contact Info',
    'menu_title'  => 'Contacts',
    'menu_slug'   => 'contacts',
    'icon_url'    =>  'dashicons-location',
    'capability'  => 'edit_posts',
    'position'    =>  '5',
    'redirect'  => false
  ));
 
}