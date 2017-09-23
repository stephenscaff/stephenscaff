<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/**
*  jumpoff_ft_img
*  Featured Image helper with fallbacks
*  1. Get Ft Image
*  2. Get Post attachement
*  3. Get First image in post content
*  4. Get no-img.jpg fallback
*  
* @example: jumpoff_ftimg_fallbacks('full')
* @param $size (array|string) : images size - ie; full, medium, small)
* @param $id (string) : image id
* @param $echo (boolean) : cho (default) or return image
**/ 

function jumpoff_ft_img($size, $post_id = '') {
  global $post, $posts;

  // Allow loading posts by ID instead of relying on global $post/the loop
  if ($post_id) { 
    $post = get_post($post_id); 
  }
  // Read featured image data for image url.
  $image_id = get_post_thumbnail_id();

  // Get Image src of image attached to post.
  $attached_to_post = wp_get_attachment_image_src( get_post_thumbnail_id(), $size, false);
  
  // Set our attached image as the returned related image.
  $related_img =  $attached_to_post[0];                         

  return $related_img;
}


/**
 *   jumpoff_img_id_url
 *   Wrap images in figure, captions in a figcap.
 *   Takes place in editor via image_send_to_editor
 *
 *   @param $imgField (array|string) : images size - ie; full, medium, small)
 *   @param $imgSize (integer) : image id
 *   @return $img (integer) : image id
 */ 
function jumpoff_img_id_url($imgField, $imgSize) {
  $getImg = get_field($imgField);
  $getImgSize = $imgSize; // (get full size)
  $image_array = wp_get_attachment_image_src($getImg, $getImgsize);
  $image_url = $image_array[0];
  
  return $image_url;
}
