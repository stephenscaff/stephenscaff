<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Post Type: Home Slides
 *
 *  Slug :      NA
 *  Supports : 'title',
 *
 *  @version    1.0
 *  @author     stephen scaff
 *  @see        scss/components/_cp-slider.scss
 *  @see        js/components/_cp-slider.js
 *  @see        archive-Events.php
 */

add_action('init', 'create_home_slides_post_type');

function create_home_slides_post_type() {
  
  register_post_type( 'home_slides', 

  array(
    'labels'              => array(
    'name'                => __( 'Home Slides' ),
    'singular_name'       => __( 'Home Slides' ),
    'add_new'             => __( 'Add Home Slides' ),
    'add_new_item'        => __( 'Add Home Slides' ),
    'edit'                => __( 'Edit Home Slides' ),
    'edit_item'           => __( 'Edit Home Slides' ),
    'new_item'            => __( 'New Home Slides' ),
    'view'                => __( 'View This Home Slides' ),
    'view_item'           => __( 'View This Home Slides ' ),
    'search_items'        => __( 'Search Home Slides' ),
    'not_found'           => __( 'Sorry Buddy. That Event cannot be found' ),
    'not_found_in_trash'  => __( 'That Event is not in the Trash' ),
  ),

  'description'           => __( 'Home page slides.' ),
  'public'                => false,
  'show_ui'               => true,
  'menu_dashicon'         => 'dashicons-slides',
  'menu_icon'             => 'dashicons-slides',
  'query_var'             => true,  
  'supports'              => array( 'title' ),
  'capability_type'       => 'post',
  'can_export'            => true,
  'has_archive'           => false,
  'hierarchical'          => false,
  ));
}