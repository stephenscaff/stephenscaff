<?php
/**
 * Partial Home Mast
 *
 * @author    Stephen Scaff
 * @package   partials/
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$hm_title = get_field('hm_title');
$hm_text = get_field('hm_text');
$hm_element = get_field('hm_element');

?>
<!-- Slider Loop -->
<section class="home-mast">
  <div class="grid-lg">
    <div class="home-mast__grid">
      <section class="home-mast__col">
      <?php if ($hm_element) : echo $hm_element; endif; ?>
      </section>

        <section class="home-mast__col">
          <header class="home-mast__header" data-scroll="fade-in">
            <?php if ($hm_title): ?><h1 class="home-mast__title"><?php echo $hm_title; ?></h1><?php endif; ?>
            <?php if ($hm_text): ?><p class="home-mast__text"><span class="oh"><span class="js-words"><?php echo $hm_text; ?></span></span></p><?php endif; ?>
          </header>
        </section>
      </div>
    </div>
</section>
