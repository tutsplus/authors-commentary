<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * @since      0.1.0
 *
 * @package    Author_Commentary
 * @subpackage Author_Commentary/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Author_Commentary
 * @subpackage Author_Commentary/admin
 * @author     Tom McFarlin <tom@tommcfarlin.com>
 */
class Author_Commentary_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * A reference to the meta box.
	 *
	 * @since    0.2.0
	 * @access   private
	 * @var      Authors_Commentary_Meta_Box    $meta_box    A reference to the meta box for the plugin.
	 */
	private $meta_box;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

		$this->meta_box = new Authors_Commentary_Meta_Box();

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_styles' ) );

	}

	/**
	 * Enqueues all files specifically for the dashboard.
	 *
	 * @since    0.2.0
	 */
	public function enqueue_admin_styles() {

		wp_enqueue_style(
			$this->name . '-admin',
			plugins_url( 'authors-commentary/admin/assets/css/admin.css' ),
			false,
			$this->version
		);

	}

}