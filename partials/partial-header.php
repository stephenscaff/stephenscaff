<?php
/**
 * Partial: partials/partial-header
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partials/partial-header
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<body id="top" <?php body_class(); ?>>
<!-- Header-->
<header class="site-header">
  <div class="site-header__grid">
    <?php if (is_singular('work')) : ?>
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>/#work" class="site-header__logo">
        <i class="icon-left-chev"></i>
      </a>
    <?php else : ?>
    <!-- Logo -->
    <a href="<?php echo home_url(); ?>" class="site-header__logo">
      <i class="icon-shield"></i>
    </a>
  <?php endif; ?>
    <nav class="site-header__nav">
    
      <a class="" href="<?php echo jumpoff_page_url('home'); ?>/#work">Work</a>
      <a class="<?php echo jumpoff_active_class('about'); ?>" href="<?php echo jumpoff_page_url('about'); ?>">About</a>
      <a class="<?php echo jumpoff_active_class('articles'); ?>" href="<?php echo jumpoff_page_url('articles'); ?>">Articles</a>
    </nav> 
  </div>
</header>
