<?php
/**
 * Partial Home Mast
 *
 * @author    Stephen Scaff
 * @package   partials/
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$hm_title = get_field('hm_title');
$hm_text = get_field('hm_text');
$hm_element = get_field('hm_element');
$hm_vid = get_field('hm_video');
$hm_bg_img_sm = get_field('hm_bg_img_sm');
$hm_bg_img = get_field('hm_bg_img');
?>

<style type="text/css">
  .home-mast__bg{
    background-image: url(<?php echo $hm_bg_img_sm['url']; ?>);
  }
  <?php if ($hm_bg_img) : ?>
  @media (min-width: 32em) {
    background-image: url(<?php echo $hm_bg_img['url']; ?>)
  }
  <?php endif; ?>
</style>
<!-- Home Mast -->
<section class="home-mast">
<figure class="home-mast__bg"></figure>
<?php if ($hm_vid && !wp_is_mobile()) : ?>
  <figure class="home-mast__vid-wrap bg-vid">
    <span class="vid-cover"></span>
    <video class="home-mast__vid bg-vid__video" autoplay="" loop="" muted="" poster="" playsinline="">
      <source type="video/mp4" src="<?php echo $hm_vid['url']; ?>">
    </video>
  </figure>
<?php endif; ?>
  
  <div class="grid-lg">
  <section class="home-mast__content">
    <header class="home-mast__header">
      <?php if ($hm_title): ?>
      <h1 class="home-mast__title" data-load="stagger-in-slow">
        <span class="oh"><span class="js-letters">The</span></span> <br/>
        <span class="oh"><span class="js-letters">Name Is</span></span><br/>
        <span class="oh"><span class="js-letters">Stephen</span></span><br/>
        <span class="oh"><span class="js-letters">Scaff</span></span>
      </h1><?php endif; ?>
      <hr class="home-mast__sep"/>
      <?php if ($hm_text): ?><div data-scroll="stagger-in-fast"><p class="home-mast__text oh"><span class="js-words"><?php echo $hm_text; ?></span></p></div><?php endif; ?>
      </header>
    </section>
  </div>
</section>