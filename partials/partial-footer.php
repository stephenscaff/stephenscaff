<?php
/**
 * Partial: paFooter
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$github = get_field('github', 'option');
$github_handle = get_field('github_handle', 'option');
$codepen = get_field('codepen', 'option');
$codepen_handle = get_field('codepen_handle', 'option');
$dribbble = get_field('dribbble', 'option');
$dribbble_handle = get_field('dribbble_handle', 'option');
$instagram = get_field('instagram', 'option');
$instagram_handle = get_field('instagram_handle', 'option');
$twitter = get_field('twitter', 'option');
$twitter_handle = get_field('twitter_handle', 'option');
$linkedin = get_field('linkedin', 'option');
$linkedin_handle = get_field('linkedin_handle', 'option');

?>

<footer class="site-footer">
  <div class="grid">
    <div class="site-footer__content">
      <a class="site-footer__logo" href="/"><i class="icon-shield"></i></a>
      <h4 class="site-footer__title">Stephen Scaff</h4>
      <nav class="site-footer__contacts">
        <a href="<?php echo $github; ?>">Github</a>
        <a href="<?php echo $dribbble; ?>">Dribbble</a>
        <a href="<?php echo $codepen; ?>">CodePen</a>
        <a href="<?php echo $instagram; ?>">Instagram</a>
        <a href="<?php echo $twitter; ?>">Twitter</a>
        <a href="mailto:<?php echo $email; ?>">Email</a>

      </nav>
    </div>
  </div>
</footer>

<!-- Le javascript --> 
<?php wp_footer(); ?>

</body>
</html>