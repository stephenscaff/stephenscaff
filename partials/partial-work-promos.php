  <?php
/**
 * Partial: Work Promors
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$twitter = get_field('twitter', 'option');
$facebook = get_field('facebook', 'option');
$linkedin = get_field('linkedin', 'option');
$instagram = get_field('instagram', 'option');
$dribbble = get_field('dribbble', 'option');
?>

<section id="work" class="work-promo js-promo">
  <?php if (!wp_is_mobile()) : ?>
  <!-- Bgs -->
  <div class="work-promo__bgs">
    <?php
    $args = array(
      'post_type'        => 'work',
      'posts_per_page'   => -1,
    );

    $promo_bgs = get_posts ($args);

    foreach ( $promo_bgs as $post ) : setup_postdata( $post );
      $promo_img = get_field('promo_image');
      $ft_video = get_field('featured_video');

      if ($ft_video && !wp_is_mobile()) : ?>
      <figure class="work-promo__bg work-promo__vid-wrap js-promo-bg">
        <video autoplay="" loop="" muted="" class="work-promo__vid" poster="<?php echo jumpoff_ft_img('full'); ?>">
          <source type="video/mp4" src="<?php echo $ft_video['url']; ?>">
        </video>
      </figure>
    <?php elseif ($promo_img && !wp_is_mobile()) : ?>
    <figure class="work-promo__bg js-promo-bg" style="background-image: url(<?php echo $promo_img['url']; ?>)"></figure>
    <?php
    endif;
    endforeach;
    ?>
  </div>
    <?php endif; ?>

  <div class="grid-xl">
    <div class="work-promo__grid">
      <header class="work-promo__header">
        <h3 class="work-promo__title">Select Work</h3>
      </header>

      <div class="work-promo__content">
        <!-- Case Studies -->
        <h3 class="work-promo__heading">Case Studies</h3>
        <div class="work-promo__items js-scroll" data-scroll-seq="article" data-scroll-offset="90%">
        <?php
        $args = array(
          'post_type'        => 'work',
          'posts_per_page'   => -1,
        );
        //$count = 0;
        $promo_contents = get_posts ($args);

        foreach ( $promo_contents as $post ) : setup_postdata( $post );
          //$count++;
          $promo_img = get_field('promo_image');
          $ft_video = get_field('featured_video');
        ?>
          <article class="work-promo__item">
            <a class="work-promo__link js-promo-link" href="<?php the_permalink(); ?>">
              <span class="work-promo__name oh"><span class="js-letters"><?php the_title(); ?></span></span>
            </a>
          </article>
        <?php
        endforeach;
        ?>
        </div>

        <!-- Socials -->
        <h3 class="work-promo__heading" data-scroll="">Socials</h3>

        <div class="work-promo__items work-promo__items--social js-scroll" data-scroll-seq="article" data-scroll-offset="90%">
          <article class="work-promo__item js-article-link">
            <a class="work-promo__link" href="<?php echo $github; ?>"><span class="work-promo__name oh"><span class="js-letters">Github</span></span></a>
          </article>
          <article class="work-promo__item">
            <a class="work-promo__link" href="<?php echo $dribbble ;?>"><span class="work-promo__name oh"><span class="js-letters">Dribbble</span></span></a>
          </article>
          <article class="work-promo__item">
            <a class="work-promo__link" href="<?php echo $codepen ;?>"><span class="work-promo__name oh"><span class="js-letters">CodePen</span></span></a>
          </article>

          <article class="work-promo__item">
            <a class="work-promo__link" href="<?php echo $instagram ;?>"><span class="work-promo__name oh"><span class="js-letters">Instagram</span></span></a>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
