<?php
/**
* Image Cols Module
*
* The module for adding dymanically sizes images..
*
* @author       Stephen Scaff
* @package      SandP
* @see          kit/scss/components/_auto-grid.scss
* @version      1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Vars
$pad = get_sub_field('image_cols_padding');
$bg_color = get_sub_field('image_cols_bg_color');
$img_cols = 'image_cols';

?>
<section class="img-cols <?php if ($pad) : echo $pad; endif;  if ( $bg_color) : echo ' ' . $bg_color; endif ?>">
  <div class="grid-med">
    <div class="img-cols__grid">
    <?php 
    while( have_rows($img_cols) ): the_row(); 
    $img = get_sub_field('image');
    $img_caption = $img['caption']; ?>
      <figure class="img-cols__figure">
        <img class="img-cols__img " src="<?php echo $img['url']; ?>">
        <?php if ($img_caption) : ?><figcaption><?php echo $img_caption; ?></figcaption><?php endif; ?>
      </figure>
    <?php endwhile; ?>
    </div>
  </div>
</section>