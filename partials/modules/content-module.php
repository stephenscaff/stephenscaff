<?php
/**
 *  Content Module
 *
 *  The module for creating basic content regions.
 *
 * @author       Stephen Scaff
 * @package      Partials/Modules
 * @see          kit/scss/components/_content.scss
 * @version      1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$content = get_sub_field('content'); 
$pad = get_sub_field('content_padding');
$bg_color = get_sub_field('content_bg_color');

?>

<!-- Content Module -->
<section class="content <?php if ($pad) : echo $pad; endif;  if ( $bg_color) : echo ' ' . $bg_color; endif ?>">
  <div class="grid-sm">
    <?php echo $content; ?>
  </div>
</section>
