<?php
/**
 * The template for displaying about content
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
      $size = "full";
      $about_image = get_field('about_image');
      $about_title = get_field('about_title');  ?>

<div class="about-content">
    <div>
    <img src=<?php echo wp_get_attachment_image( $about_image, $size ); ?>
      </div>
      <div class="about-text">
      <h3><?php echo $about_title; ?></h3>
      <?php the_content(); ?>
      </div>
      </div>
	<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
