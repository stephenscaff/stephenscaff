<?php
/**
 * Post Footer
 *
 * The Partial for Post Footers, used on blogposts and the mondalite post type.
 *
 * @author    Stephen Scaff
 * @package   Partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<footer class="post-footer pad">
  <div class="grid-sm">
    <div class="post-footer__content">
      <!-- Post Shares -->
      <aside class="post-shares">
        <a class="post-shares__link btn" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>+<?php the_permalink(); ?>">Twitter</a>
        <a class="post-shares__link btn" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>/&amp;title=<?php the_title(); ?>">Facebook</a>
      </aside>
    </div>
  </div>
</footer>