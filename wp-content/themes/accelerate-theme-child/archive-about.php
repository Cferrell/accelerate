<?php
/**
 * The template for displaying the about full page
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php $counter = 0; ?>
			<?php while ( have_posts() ) : the_post();
			$size = "full";
			$about_image = get_field('about_image');
			$about_title = get_field('about_title');
			$counter++; ?>

<div class="row post-list-<?php echo odd_or_even($counter); ?>">
			<div class="about-content">
			    <div>
			    <img src=<?php echo wp_get_attachment_image( $about_image, $size ); ?>
			      </div>
			      <div class="about-text">
			      <h3><?php echo $about_title; ?></h3>
			      <?php the_content(); ?>
			      </div>
			      </div>
</div>
		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="about-interest">
	  <div class="interest-text">
	  <h3>Interested in working with us?</h3>
	</div>
	<div class="interest-button">
	<h3><a href="index.php/contact-us">Contact Us</a></h3>
	</div>

	</div>

<?php get_footer(); ?>
