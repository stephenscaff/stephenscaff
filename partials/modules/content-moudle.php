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
$screenshots = 'screenshots';
?>
<section class="screenshots screenshots--<?php echo $device; ?>  <?php if ($screenshots_pad) : echo $screenshots_pad; endif; ?>">
  <div class="grid-xl">
    <div class="screenshots__grid grid--center">
  <?php 
  while( have_rows($screenshots) ): the_row(); 
  $screenshot = get_sub_field('screenshot'); 
  $caption = get_sub_field('caption'); 
  ?>
    <div class="screenshots__item">
      <figure class="screenshot">
        <div class="screenshot__<?php echo $device; ?>">
          <?php if ($device == 'browser') : ?><span class="browser-dot"></span><?php endif; ?>
          <div class="screenshot__scroll">
          <img src="<?php echo $screenshot['url']; ?>">
        </div>
        </div>
        <?php if ($caption) : ?><figcaption class="screenshot__caption"><?php echo $caption; ?></figcaption><?php endif; ?>
      </figure>
    </div>
  <?php endwhile; ?>
  </div></div>
</section>

