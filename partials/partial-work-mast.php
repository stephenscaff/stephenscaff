<?php
/**
 * Partial: Stats
 * Final stats section on single work pages.
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$wm_title = get_field('wm_title');
$wm_text = get_field('wm_text');
$wm_image = get_field('wm_image');
$wm_brand_color = get_field('wm_brand_color');
$wm_bg_color = get_field('wm_bg_color');
$wm_video = get_field('wm_video');

?>

<?php if ($wm_brand_color) : ?>
<!-- Work Brand Colors -->
<style type="text/css">
  .mast__bg{
    background-color: <?php echo $wm_brand_color; ?>
  }
</style>
<?php endif; ?>
<!-- Work Mast -->
<section class="mast <?php if ($wm_bg_color) : echo $wm_bg_color; endif; ?>">
  <div class="mast__bg"></div>
  <?php if ($wm_image) : ?>
    <figure class="mast__figure" style="background-image: url(<?php echo $wm_image['url']; ?>"></figure>
  <?php endif; if ($wm_video && !wp_is_mobile()) : ?>
    <!-- bg-vid -->
    <div class="mast__vid bg-vid">
      <span class="bg-vid__cover"></span>
      <video class="bg-vid__video" autoplay="" loop="" muted="" poster="">
        <source type="video/mp4" src="<?php echo $wm_video['url']; ?>">
      </video>
    </div>
  <?php endif; ?>

  <div class="grid-sm">
    <div class="mast__content">
      <h1 class="mast__title"><?php echo $wm_title; ?> -</h1>
      <p class="mast__text"><?php echo $wm_text; ?></p>
    </div>
  </div>
</section>