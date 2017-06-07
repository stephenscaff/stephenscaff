<?php
/**
 * Template for general posts archives.
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<!-- Main -->
<main role="main">

<!-- Mast -->
<section class="mast mast--center">
  <div class="grid-lg">
    <header class="mast__header">
      <h1 class="mast__title">Droppin That Work</h1>
      <p class="mast__text">We don't know nothing else but dope, baby. Designing it, deving it, dropping it.</p>
    </header>
  </div>
</section>

<!-- Feeds -->
<section class="work-feed pad">
  <div class="grid-lg">
    <div class="work-feed__grid">
      <?php
      if ( have_posts() ): while ( have_posts() ) : the_post();
        include(locate_template('partials/content/content-work.php'));
      endwhile; else: 
        get_template_part( 'partials/content/content', 'none' );
      endif;
      ?>
    </div>
  </div>
</section>

<!-- Pagination -->
<?php // get_template_part( 'partials/posts', 'pagination' ); ?>

</main>

<!-- Footer  --> 
<?php get_footer(); ?>
