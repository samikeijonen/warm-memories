<?php
/**
 * This is child themes functions.php file. All modifications should be made in this file.
 *
 * All style changes should be in child themes style.css file.
 *
 * @package    Warm Memories
 * @version    1.0
 * @author     Sami Keijonen <sami.keijonen@foxnet.fi>
 * @copyright  Copyright (c) 2013, Sami Keijonen
 * @link       http://foxnet-themes.fi
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'warm_memories_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  1.0
 * @access public
 * @return void
 */
function warm_memories_theme_setup() {

	/* Change default background color. */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'd3d3bf'
		)
	);
	
	/* Add a custom header to overwrite the defaults. */
	add_theme_support(
		'custom-header',
		array(
			'default-text-color' => '4c96a1',
			'default-image'      => get_stylesheet_directory_uri() . '/images/headers/warm-memory.jpg'
		)
	);
	
	/* Registers default headers for the theme. */
	register_default_headers(
		array(
			'warm-memory-1' => array(
				'url'           => '%2$s/images/headers/warm-memory.jpg',
				'thumbnail_url' => '%2$s/images/headers/warm-memory-thumbnail.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Warm Memory 1', 'warm-memories' )
			),
			'warm-memory-2' => array(
				'url'           => '%2$s/images/headers/warm-memory1.jpg',
				'thumbnail_url' => '%2$s/images/headers/warm-memory1-thumbnail.jpg',
				/* Translators: Header image description. */
				'description'   => __( 'Warm Memory 2', 'warm-memories' )
			),
		)
	);
	
	/* Change primary color. */
	add_filter( 'theme_mod_color_primary', 'warm_memories_primary_color' );
	
}

/**
 * Change primary color
 *
 * @since 1.0
 * @access public
 * @param  string  $hex
 * @return string
 */
function warm_memories_primary_color( $color ) {

	return $color ? $color : '7fa7ad';
	
}

?>