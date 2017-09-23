<?php
/**
* Content: Post 
*
* @author    Stephen Scaff
* @package   partials/content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<article class="post">
  <a class="post__link" href="<?php the_permalink(); ?>">
    <figure class="post__figure has-preloader">
      <span class="post__img-wrap">
        <img class="post__img js-lazy" data-src="<?php echo jumpoff_ft_img('large'); ?>">
      </span>
      <span class="preloader"></span>
    </figure>
    <header class="post__header" data-scroll="stagger-in">
      <h3 class="post__title oh"><span class="js-letters js-no-mobile"><?php the_title(); ?></span></h3>
      <p class="post__text"><?php echo jumpoff_excerpt('150'); ?></p>
      <span class="post__btn btn-white">Read Post</span>
    </header>
  </a>
</article>