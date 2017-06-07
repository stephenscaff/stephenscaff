<?php
/**
 * Template for iconv(in_charset, out_charset, str)                                                                                                                       n
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>


<main role="main">

<section class="articles-mast">
  <div class="articles-mast__bgs">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="articles-mast__bg js-article-bg"  style="background-image: url('<?php echo jumpoff_ft_img('fullsize'); ?>')"></article>
  <?php endwhile; endif; ?>
  </div>

  <header class="articles-mast__header">
    <h1 class="articles-mast__title">Articles</h1>
    <hr class="sep-center sep--alpha"/>
  </header>
</section>


<section class="articles-posts">
  <section class="articles-posts__items js-posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part( 'partials/content/content', 'post-item' ); ?>
    <?php endwhile; else: ?>
      <?php get_template_part( 'partials/content/content', 'none' ); ?>
    <?php endif; ?>
  </section>
  <?php get_template_part( 'partials/partial', 'load-more' ); ?>
</section>



</main>

<?php get_footer(); ?>