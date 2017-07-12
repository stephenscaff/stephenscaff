<?php
/**
 * Template for 404                                                                                                           n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

?>

<!-- MAIN --> 
<main role="main">

<section class="fourohfour">
  <div class="grid">
    <figure id="js-random-gif" class="fourohfour__figure"></figure>

    <div class="fourohfour__content js-scroll">
      <h1 class="fourohfour__title" data-load="stagger-in-slow">
        <span class="oh"><span class="js-letters">FOUR OH FOUR</span></span>
    </h1>
      <h3 class="fourohfour__subtitle">You've been Four Oh Four'd Bruv.</h3>
      <a class="btn btn-white" href="<?php echo jumpoff_page_url('home') ?>">Kick Rocks</a>
    </div>
  </div>
</section>

</main>

<!-- Footer  --> 
<?php get_footer(); ?>

<script type="text/javascript">

/** 
 * Suppose I should add this to the js build,
 * but, this is fine for now considering it's limited
 * use case.
 */

// Save images in array
var images = ['404-1.gif', '404-2.gif', '404-3.gif', '404-4.gif'];

// Append random gif
$('<img class="fourohfour__img" src="<?php echo jumpoff_img(); ?>/404/' + images[Math.floor(Math.random() * images.length)] + '"/>').appendTo('#js-random-gif');

// Reload function
$('.js-reload').click(function() {
    location.reload();
    $('body').addClass('is-exiting');
});
</script>