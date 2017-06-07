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
  <a class="post__link js-article-link" href="<?php the_permalink(); ?>">
    <div class="post__content">
      <span class="post__date"><?php the_time('m/d/y'); ?></span>
      <h3 class="post__title"><?php the_title(); ?></h3>
      <p class="post__text"><?php echo jumpoff_excerpt(200); ?></p>
      <span class="btn-view btn--alpha">Read</span>
    </div>
  </a>
</article>