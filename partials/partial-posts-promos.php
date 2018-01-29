<?php
/**
 * Partial:Posts
 *
 * Outputs default posts loop
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post ;

$args = array(
  'post_type' => 'post',
  'posts_per_page'   => 4,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'tax_query'       => array($tax_query),
);

$posts = get_posts( $args );

if ($posts) : ?>

<section class="posts-promo has-greyscale">
  <div class="grid-xl">
    <div class="posts-promo__grid">
      <header class="posts-promo__header">
        <h2 class="posts-promo__title">Articles</h2>
      </header>

      <div class="posts-promo__content post-feed">
        <div class="post-feed__grid">
        <?php
          foreach ( $posts as $post ) : setup_postdata( $post );
            get_template_part( 'partials/content/content', 'post' );
          endforeach;
          wp_reset_postdata();
        ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif;?>
