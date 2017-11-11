<?php
/**
 * Post Header
 *
 * The partial for post footers.
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$post_ft_img = jumpoff_ft_img('full');
$ft_img_position = get_field('ft_img_position');
$post_ft_img_size = get_field('featured_image_size');
$post_subtitle = get_field('post_subtitle');

?>

<header class="post-mast <?php if ($ft_img_position === 'post-mast-bg') : echo 'has-bg'; endif; ?>">
  <?php if ($ft_img_position === 'post-mast-bg') : ?>
    <figure class="post-mast__bg" style="background-image: url(<?php echo jumpoff_ft_img('full'); ?>)"></figure>
  <?php endif; ?>
  <div class="grid-sm">
    <div class="post-mast__header">
      <span class="post-mast__metas">
        <a class="post-mast__cat" href="<?php echo jumpoff_post_cat('url'); ?>"><?php echo jumpoff_post_cat('name'); ?></a>
        <span class="metas-sep"></span>
        <time class="post-mast__date"> <?php the_time('M j, Y'); ?></time>
      </span>
      
      <h1 class="post-mast__title"><?php the_title(); ?></h1>
      <?php if ($post_subtitle) : ?>
        <p class="post-mast__subtitle"><?php echo $post_subtitle; ?></p>
      <?php endif; ?> 
    </div>
  </div>
</header>

<?php if ($ft_img_position == 'post-mast-img') : ?>
  <section class="post-img">
    <div class="grid-full-lg">
      <figure class="post-img__figure">
        <img class="post-img__img" src="<?php echo $post_ft_img; ?>">
      </figure>
    </div>
  </section>
<?php endif; ?>
