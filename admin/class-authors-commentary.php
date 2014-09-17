<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://tutsplus.com/tutorials/creating-maintainable-wordpress-meta-boxes--cms-22189
 * @since      1.0.0
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
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

}