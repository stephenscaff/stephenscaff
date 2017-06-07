<?php
/**
* Content: Next
* Tempalte for displaying Next Post
*
* @author    Stephen Scaff
* @package   partials/content
* @version   1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


$post_subtitle = get_field('post_subtitle', $next_post);

if (is_singular('work'))  : ?>

<article class="next next--work">
  <a class="next__link" href="<?php echo the_permalink($next_post); ?>" data-bg-color="#fff">
    <div class="grid">
      <header class="next__header">
        <span class="next__pretitle">Read Next</span>
        <h1 class="next__title">
          <span class="oh-title"><span class="oh js-letters"><?php echo get_the_title($next_post); ?></span></span>
          <?php if ($post_subtitle) : ?><span class="oh-desc"><span class="oh js-letters"><?php echo $post_subtitle; ?></span></span><?php endif; ?>
        </h1>

        <span class="btn-invert">Read Story</span>
      </header>
    </div>
  </a>
</article>

<?php else : ?>

<article class="next next--post has-bg">
  <a class="next__link" href="<?php echo the_permalink($next_post); ?>">
    <figure class="next__bg " style="background-image:url(<?php echo jumpoff_ft_img('full', $next_post) ?>)"></figure>
    <div class="grid">
      <header class="next__header" data-scroll="">
        <span class="next__pretitle">Read Next</span>
        <h1 class="next__title">
          <span class="oh"><span><?php echo get_the_title($next_post); ?></span></span>
        </h1>

        <span class="btn-white">Read Story</span>
      </header>
    </div>
  </a>
</article>


<?php endif; ?>