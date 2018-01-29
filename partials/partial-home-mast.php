<?php
/**
 * Partial Home Mast
 *
 * @author    Stephen Scaff
 * @package   partials/
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<!-- Home Mast -->
<section class="home-mast">
  <figure class="home-mast__bg" style="background-image: url(<?php echo jumpoff_img(); ?>/home/home-mast-skull.gif)"></figure>
  <div class="grid-xl">
    <section class="home-mast__content">
      <header class="home-mast__header" data-load="stagger-in-slow" data-ani-delay="100">
        <h1 class="home-mast__title oh">
          <span class="js-words">The name is Stephen Scaff. I'm a front-end developer and designer currently producing fine internet goods at the branding and interactive firm, Urban Influence.</span>
        </h1>
      </header>
        <!-- <hr class="home-mast__sep"/>
        <?php if ($hm_text): ?><div data-scroll="stagger-in-fast"><p class="home-mast__text oh"><span class="js-words">Steel-city native, Pacific Northwest transplant, I like clean minimal design, enhanced by that interactive hotness</span></p></div><?php endif; ?> -->
      </section>
  </div>
</section>
