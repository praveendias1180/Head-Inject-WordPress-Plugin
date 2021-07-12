<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Head_Inject
 * @subpackage Head_Inject/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Head_Inject
 * @subpackage Head_Inject/admin
 * @author     Your Name <email@example.com>
 */
class Head_Inject_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Head_Inject    The ID of this plugin.
	 */
	private $Head_Inject;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Head_Inject       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Head_Inject, $version ) {

		$this->Head_Inject = $Head_Inject;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Head_Inject_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Head_Inject_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->Head_Inject, plugin_dir_url( __FILE__ ) . 'css/head-inject-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Head_Inject_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Head_Inject_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->Head_Inject, plugin_dir_url( __FILE__ ) . 'js/head-inject-admin.js', array( 'jquery' ), $this->version, false );

	}

}
