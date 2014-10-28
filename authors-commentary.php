<?php

/**
 * The plugin bootstrap file
 *
 * This file is responsible for starting the plugin using the main plugin
 * class file.
 *
 * @link              http://tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * @since             0.4.0
 * @package           Author_Commentary
 *
 * @wordpress-plugin
 * Plugin Name:       Author Commentary
 * Plugin URI:        http://tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * Description:       Allows authors to keep notes and track information and resources when drafting posts.
 * Version:           0.6.0
 * Author:            Tom McFarlin
 * Author URI:        http://tommcfarlin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       author-commentary
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The class that represents the meta box that will dispaly the navigation tabs and each of the
 * fields for the meta box.
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/class-authors-commentary-meta-box.php';

/**
 * The core plugin class that is used to define the meta boxes, their tabs,
 * the views, and the partial content for each of the tabs.
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/class-authors-commentary.php';

/**
 * Begins execution of the plugin.
 *
 * Everything for this particular plugin will be done so from within the
 * Author_Commentary/admin subpackage. This means that there is no reason to setup
 * any hooks until we're in the context of the Author_Commentary_Admin class.
 *
 * @since    0.1.0
 */
function run_author_commentary() {
	$author_commentary = new Author_Commentary_Admin( 'author-commentary', '0.6.0' );
}
run_author_commentary();