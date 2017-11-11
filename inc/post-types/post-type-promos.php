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

add_action('init', 'create_promos_post_type');

function create_promos_post_type() {
  
  register_post_type( 'promos', 

  array(
    'labels'              => array(
    'name'                => __( 'Promo' ),
    'singular_name'       => __( 'Promo' ),
    'add_new'             => __( 'Add Promo' ),
    'add_new_item'        => __( 'Add Promo' ),
    'edit'                => __( 'Edit Promo' ),
    'edit_item'           => __( 'Edit Promo' ),
    'new_item'            => __( 'New Promo' ),
    'view'                => __( 'View This Promo' ),
    'view_item'           => __( 'View This Promo ' ),
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