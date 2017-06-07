<?php
/**
 * Partial: Stats
 * Final stats section on single work pages.
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$stats_site_link = get_field('stats_site_link');
$stats_site_link_text = get_field('stats_site_link_text');
$stats_agency = get_field('stats_agency');
$stats_year = get_field('stats_year');
$stats_high_fives = 'stats_high_fives';

?>

<section class="stats pad">
  <div class="grid-sm">
    <header class="stats__header">
      <h2 class="stats__title">Stats</h2>
      <?php if ($stats_text) : ?><p class="stats__text"><?php echo $stats_text; ?></p><?php endif; ?>
    </header>
    
    <div class="stats__grid">
      <div class="stats__item">
        <h5 class="stats__heading">visit</h5>
        <a class="stats__link btn" href="<?php echo $stats_site_link; ?>"><?php echo $stats_site_link_text; ?></a>
      </div>

      <div class="stats__item">
        <h5 class="stats__heading">agency</h5>
        <p class=""><?php echo $stats_agency; ?></p>
      </div>

      <div class="stats__item">
        <h5 class="stats__heading">role</h5>
        <?php echo jumpoff_post_terms('work_cat', 'slash', 2); ?>
      </div>

      <div class="stats__item">
        <?php if (have_rows($stats_high_fives) ) : ?>
          <h5 class="stats__heading">high fives</h5>
          <?php while( have_rows($stats_high_fives) ): the_row(); 
          $name = get_sub_field('name');
          $link = get_sub_field('link'); ?>
            <a class="btn" href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?></a> <br/>
          <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
