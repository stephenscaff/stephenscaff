<?php
/**
 * View for single blog posts.
 *
 * @author   Stephen Scaff and Thomas Vaeth
 * @package   post
 * @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 
?>

<!-- Main -->
<main role="main">

<?php while (have_posts()) : the_post(); ?>
<article>

<!-- Post Header -->
<?php get_template_part( 'partials/partial', 'post-header' ); ?>

<!--Post Content -->
<section class="post-content content pad">
  <div class="grid-sm">
    <?php the_content(); ?>
  </div>
</section>

<!-- Post Footer -->
<?php get_template_part( 'partials/partial', 'post-footer' ); ?>

</article>
<?php endwhile; ?>

<!-- Next -->
<?php get_template_part( 'partials/partial', 'next' ); ?>

</main>

<!-- Footer-->    
<?php get_footer(); ?>
