<?php
/**
 * Screenshot Module
 *
 * @author       Stephen Scaff
 * @version      1.0
 */ 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$heading = get_sub_field('heading');
$device = get_sub_field('device');
$screenshots_pad = get_sub_field('screenshots_padding');
$screenshots_bg_color = get_sub_field('screenshots_bg_color');
$screenshots_width = get_sub_field('screenshots_grid_width');
$screenshots = 'screenshots';


$screenshot_has_bg_color = get_sub_field('screenshot_has_bg_color');
$screenshot_bg_color = get_sub_field('screenshot_bg_color');
?>

<section class="screenshots screenshots--<?php echo $device; ?> <?php if ($screenshots_pad) : echo $screenshots_pad; endif;   if ( $screenshots_bg_color) : echo ' ' . $screenshots_bg_color; endif ?>">
   <div class="<?php echo $screenshots_width; ?>">
    <div class="screenshots__grid grid--center">
    <?php 
    while( have_rows($screenshots) ): the_row(); 
    $screenshot = get_sub_field('screenshot'); 
    $caption = $screenshot['caption']; 
    $width = get_sub_field('width'); 
    ?>
      <div class="screenshots__item  <?php if ($width) : echo $width ; endif;?>" data-scroll="fade-in">
        <figure class="screenshot">
          <?php if ($screenshot_has_bg_color) : ?>
            <span class="has-bg" style="background-color: <?php echo $screenshot_bg_color; ?>">
          <?php endif; ?>
          <div class="screenshot__<?php echo $device; ?>">
            <?php if ($device == 'browser') : ?>
              <span class="browser-dot"></span>
            <?php endif; ?>
            <div class="screenshot__scroll">
              <img src="<?php echo $screenshot['url']; ?>"/>
            </div>
          </div>
          <?php if ($caption) : ?>
            <figcaption class="screenshot__caption"><?php echo $caption; ?></figcaption>
          <?php endif; ?>
          <?php if ($screenshot_bg_color) : ?>
            </span>
          <?php endif; ?>
        </figure>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>
