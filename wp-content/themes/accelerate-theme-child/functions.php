<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

//203 Sprint Two Monday create custom post types
 function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );


//203 create custom post type for about page

    register_post_type( 'about',
        array(
            'labels' => array(
                'name' => __( 'About' ),
                'singular_name' => __( 'About Content' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'about' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

function odd_or_even($counter)
{
    if($counter % 2 == 0)
    {
        return "even";
    }
    else
    {
        return "odd";
    }
}
