<?php
/**
 * Template Name: About
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

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

$about_title = get_field('about_title');
$about_content = get_field('about_content');
$recognition = 'about_recognition';

?>

<!-- MAIN --> 
<main role="main">

<!-- MAST --> 
<section class="about-mast">
  <div class="grid grid--left">
    <header class="about-mast__header" data-load="stagger-in-fast">
      <h1 class="about-mast__title oh">
        <span class="js-words"><?php echo $about_title; ?></span>
      </h1>
    </header>
    <div class="about-mast__content">
      <p><?php echo $about_content; ?></p>
    </div>

    <div class="about-mast__grid">
      <div class="about-mast__item about-mast__contacts"  data-scroll-seq="span" data-scroll-offset="40%">
        <h5 class="about-mast__heading">contacts</h5>
        <span class="about-mast__contact"><span>email</span> &mdash; <?php echo $email; ?></span>
        <span class="about-mast__contact"><span>phone</span> &mdash; <?php echo $phone; ?></span>
      </div>

      <div class="about-mast__item about-mast__socials" data-scroll-seq="span" data-scroll-offset="40%">
        <h5 class="about-mast__heading">handles</h5>
        <span class="about-mast__contact"><span>dribbble</span> &mdash; <a href="<?php echo $dribbble; ?>" target="_blank"><?php echo $dribbble_handle; ?></a></span>
        <span class="about-mast__contact"><span>github</span> &mdash; <a href="<?php echo $github; ?>" target="_blank"><?php echo $github_handle; ?></a></span>
        <span class="about-mast__contact"><span>codepen</span> &mdash; <a href="<?php echo $codepen; ?>" target="_blank"><?php echo $codepen_handle; ?></a></span>
        <span class="about-mast__contact"><span>instagram</span> &mdash; <a href="<?php echo $instagram; ?>" target="_blank"><?php echo $instagram_handle; ?></a></span>
        <span class="about-mast__contact"><span>twitter</span> &mdash; <a href="<?php echo $twitter; ?>" target="_blank"><?php echo $twitter_handle; ?></a></span>
        <span class="about-mast__contact"><span>linkedin</span> &mdash; <a href="<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin_handle; ?></a></span>
      </div>
    </div>
      <div class="about-mast__recognition recognition">
        <h2 class="recognition__title">Recognition</h2>

        <ul class="recognition__list js-scroll" data-scroll-seq="li" data-scroll-offset="100%">
          <?php while( have_rows($recognition) ): the_row(); 
          $awarder = get_sub_field('awarder');
          $award = get_sub_field('award');
          $site = get_sub_field('site');
          $link = get_sub_field('link');

          ?>
          <li>
            <a class="recognition__link" href="<?php echo $link; ?>" target="_blank">
              <span class="recognition__cred oh"><span class="js-letters"><?php echo $awarder; ?> &mdash; <?php echo $award; ?></span></span>
              <span class="recognition__site oh"><span class="js-letters"><?php echo $site; ?></span></span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>

</main>

<!-- FOOTER --> 
<?php get_footer(); ?>