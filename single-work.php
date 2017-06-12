<?php
/**
 * Single View for the Work Post Type
 *
 * @author    Stephen Scaff
 * @package   post type
 * @version   1.0.0
 * @see       archive-work.php
 * @see       inc/post-types/post-type-work.php
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 


$site_link = get_field('stats_site_link');

?>

<?php if ($wm_brand_color) : ?>
<!-- Work Brand Colors -->
<style type="text/css">
  .mast__bg{
    background-color: <?php echo $wm_brand_color; ?>
  }
</style>
<?php endif; ?>

<!-- MAIN-->
<main role="main">

<?php while (have_posts()) : the_post(); ?>

<article>

  <!-- Work Mast -->
  <?php get_template_part( 'partials/partial', 'work-mast' ); ?>

  <!-- Work Modules -->
  <?php get_template_part( 'partials/partial', 'modules' ); ?>

  <!-- Work Stats -->
  <?php get_template_part( 'partials/partial', 'work-stats' ); ?>

</article>

<?php endwhile; ?>

<!-- Next -->
<?php get_template_part( 'partials/partial', 'next' );?>

</main>

<!-- Footer-->    
<?php get_footer(); ?>