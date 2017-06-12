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
      <img class="post__img js-lazy" data-src="<?php echo jumpoff_ft_img('large'); ?>">
      <span class="preloader"></span>
    </figure>
    <header class="post__header" data-scroll="stagger-in">
      <h3 class="post__title"><span class="oh"><span class="js-words"><?php the_title(); ?></span></span></h3>
      <p class="post__text"><?php echo jumpoff_excerpt('150'); ?></p>
      <span class="post__btn btn-white">Read Post</span>
    </header>
  </a>
</article>