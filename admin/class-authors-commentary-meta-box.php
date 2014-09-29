<?php

/**
 * Represents the Author's Commentary Meta Box.
 *
 * @link       http://code.tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes-the-layout--cms-22208
 * @since      0.2.0
 *
 * @package    Author_Commentary
 * @subpackage Author_Commentary/admin
 */

/**
 * Represents the Author's Commentary Meta Box.
 *
 * Registers the meta box with the WordPress API, sets its properties, and renders the content
 * by including the markup from its associated view.
 *
 * @package    Author_Commentary
 * @subpackage Author_Commentary/admin
 * @author     Tom McFarlin <tom@tommcfarlin.com>
 */
class Authors_Commentary_Meta_Box {

	/**
	 * Register this class with the WordPress API
	 *
	 * @since    0.2.0
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
	}

	/**
	 * The function responsible for creating the actual meta box.
	 *
	 * @since    0.2.0
	 */
	public function add_meta_box() {

		add_meta_box(
			'authors-commentary',
			"Author's Commentary",
			array( $this, 'display_meta_box' ),
			'post',
			'normal',
			'default'
		);

	}

	/**
	 * Renders the content of the meta box.
	 *
	 * @since    0.2.0
	 */
	public function display_meta_box() {
		include_once( 'views/authors-commentary-navigation.php' );
	}

}
