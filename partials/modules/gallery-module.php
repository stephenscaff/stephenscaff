<?php
/**
 * Gallery Module
 *
 * The module for adding gallery like images.
 *
 * @author       Stephen Scaff
 * @package      SandP
 * @see          kit/scss/components/_auto-grid.scss
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Vars
$gallery = 'gallery';
$width = get_sub_field('gal_grid_width');
$pad = get_sub_field('gal_padding');
$bg_color = get_sub_field('gal_bg_color');
$img_has_bg_color = get_sub_field('gal_img_has_bg_color');
$img_bg_color = get_sub_field('gal_img_bg_color');
$img_box_shadow = get_sub_field('gal_img_has_boxshadow');

?>

<section class="gal <?php if ($pad) : echo $pad; endif;  if ( $bg_color) : echo ' ' . $bg_color; endif ?>">
  <div class="<?php echo $width; ?>">
    <div class="gal__grid">
      <?php  
      while( have_rows($gallery) ): the_row(); 
        $img = get_sub_field('image');
        $size = get_sub_field('size'); ?>
        <figure class="gal__item <?php echo $size;  if ($img_box_shadow) : echo ' has-shadow'; endif;?>">
          <?php if ($img_has_bg_color) : ?>
          <span class="has-bg" style="background-color: <?php echo $img_bg_color; ?>">
          <?php endif; ?>
          <img class="gal__img"  src="<?php echo $img['url']; ?>">
          <?php if ($img_has_bg_color) : ?>
          </span>
          <?php endif; ?>
        </figure>
      <?php endwhile; ?>
    </div>
  </div>
</section>