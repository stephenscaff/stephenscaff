<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Post Type: Work
 *
 *  Slug :      work
 *  Supports : 'title','thumbnail', 'excerpt', 'editor'
 *
 *  @version    1.0
 *  @author     stephen scaff
 *  @see        single.php
 *  @see        archive.php
 */

# Init Work
add_action('init', 'create_work_post_type');

function create_work_post_type() {
  register_post_type( 'work', 

  array(
    'labels'              => array(
    'name'                => __( 'Work' ),
    'singular_name'       => __( 'Work' ),
    'add_new'             => __( 'Add New Project' ),
    'add_new_item'        => __( 'Add Another Project.' ),
    'edit'                => __( 'Edit This Project' ),
    'edit_item'           => __( 'Edit This Project' ),
    'new_item'            => __( 'New Project' ),
    'view'                => __( 'View This Project' ),
    'view_item'           => __( 'View All Projects' ),
    'search_items'        => __( 'Search Your Work.' ),
    'not_found'           => __( 'Sorry Buddy. That Work cannot be found.' ),
    'not_found_in_trash'  => __( 'That Project aints in the trash' ),
  ),

  'description'           => __( 'Chaun\'s Sorry Ass Work Jawns.' ),
  'public'                => true,
  'show_ui'               => true,
  'menu_position'         => 6,
  'menu_dashicon'         => 'dashicons-book',
  'menu_icon'             => 'dashicons-book',
  'query_var'             => true,  
  'supports'              => array( 'title','thumbnail' ),
  'capability_type'       => 'post',
  'can_export'            => true,
  'has_archive'           => true,
  'rewrite'               => array('slug' => 'work', 'with_front' => false),
  ));
}


/**
 *  Taonomy: Work Categories
 *
 *  Creates 'Work Categories' custom taxonomy
 *
 *  Slug : work-categories
 *  hierarchical : true
 *
 *  @version    1.0
 */

# Init Work Cats
add_action( 'init', 'create_work_cats');

function create_work_cats() {
  
  register_taxonomy(
  'work_cat', 

  // Apply our taxonomy to the following post types
  array( 'work'), 
  array(  
    'labels'             => array(
    'name'               => _x('Work Categories', 'taxonomy general name'),
    'singular_name'      => _x('Work Category', 'taxonomy singular name'),
    'search_items'       => __('Search Work Categories Punk '),
    'all_items'          => __('All Work Categories'),
    'edit_item'          => __('Edit Work Categories Loser'),
    'update_item'        => __('Update Work Category Tard'),
    'add_new_item'       => __('Add New Work Category'),
    'new_item_name'      => __('New Work Categories'),
    'menu_name'          => __('Work Categories'),
  ),
  'hierarchical'         => true,  
  'show_ui'              => true,
  'show_admin_column'    => true,
  'show_in_quick_edit'   => true,
  'rewrite'              => array(
    'slug'               => 'work-category',
    'with_front'         => false, 
    ),
  ));
}
