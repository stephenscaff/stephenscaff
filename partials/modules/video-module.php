<?php
/**
 *  Module : Video
 *
 *  Module for displaying a Video element
 *
 *  @author    Stephen Scaff
 *  @package   modules
 *  @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$vid_embed = get_sub_field('video_embed');
$vid_title = get_sub_field('video_title');
$vid_content = get_sub_field('video_text');

preg_match('/src="(.+?)"/', $vid_embed, $matches);
$src = $matches[1];
$params = array(
  'hd'        => 1,
  'rel'       => 0,
  'autohide'    => 1
);
$new_src = add_query_arg($params, $src);
$vid_embed = str_replace($src, $new_src, $vid_embed);
$attributes = 'frameborder="0"';
$vid_embed = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $vid_embed);
?>

<section class="vid">
  <div class="grid">  
  <?php if ($vid_title) : ?>
    <header class="vid__header">
      <h2 class="vid__title"><?php echo $vid_title; ?></h2>
    </header>
  <?php endif; ?>

  <div class="vid__video">
    <div class="flex-vid"><?php echo $vid_embed; ?></div>
  </div>
  <?php if ($vid_text) : ?>
    <footer class="vid__footer">
      <p class="vid__text"><?php echo $vid_text; ?></p>
    </footer>
  <?php endif; ?>
  </div>
</section>
    
