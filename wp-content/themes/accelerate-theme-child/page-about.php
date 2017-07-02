<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div class="about-header">
<h2><span class="about-name">Accelerate </span>is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
</div>

<div class="about-title">
<h5>Our Services</h5>
<p>We take pride in our clients and the content we create for them.</p>
<p>Here's a brief overview of our offered services.</p>
</div>

<div class="about-content">
  <div class="content">
    <div class="about-image">
      <img src="http://testaccelerate.staging.wpengine.com/wp-content/uploads/2017/07/Icon1.png"/>
    </div>
    <div class="about-text">
      <h3>Content Strategy</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="content">
    <div class="about-text">
      <h3>Influencer Mapping</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="about-image">
      <img src="http://testaccelerate.staging.wpengine.com/wp-content/uploads/2017/07/Icon2.png"/>
    </div>
  </div>

  <div class="content">
    <div class="about-image">
      <img src="http://testaccelerate.staging.wpengine.com/wp-content/uploads/2017/07/Icon3.png"/>
    </div>
    <div class="about-text">
      <h3>Social Media Strategy</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="content">
    <div class="about-text">
      <h3>Design & Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="about-image">
      <img src="http://testaccelerate.staging.wpengine.com/wp-content/uploads/2017/07/Icon4.png"/>
    </div>
  </div>

</div>

<div class="about-interest">
  <div class="interest-text">
  <h3>Interested in working with us?</h3>
</div>
<div class="interest-button">
<h3><a href="index.php/contact-us">Contact Us</a></h3>
</div>

</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
  				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
