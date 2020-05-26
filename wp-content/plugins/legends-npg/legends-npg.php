<?php
	/**
		*
		* Plugin Name: Legends - NPG
		* Description: Custom plugin containing all custom post types and taxonomies required for the site.
		* Version: 1.0.0
		* Author: Big Rock
		* Author URI: https://www.wearebigrock.com/
	*/


/**
 * 
 * Developers: Please make sure you check the docs inside src/docs-general/wordpress/plugins.md
 * 
 */


	/**
	 * Extending WordPress
	 */
	include( plugin_dir_path(__FILE__) . 'inc/wp-extend/wp-menus.php' );
	
	


	/**
	 * Custom addons
	 */
	include( plugin_dir_path(__FILE__) . 'inc/custom/tracking-gtm.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/allow-svg-uploads.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/display-svg-icon.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/defer-scripts.php' );
	include( plugin_dir_path(__FILE__) . 'inc/custom/limit-content-length.php' );



	
	/**
	 * Custom Post Types	
	 */
	/// include( plugin_dir_path(__FILE__) . 'inc/custom-post-types/_example.php' );




	/**
	* Custom Taxonomies	
	*/
	/// include( plugin_dir_path(__FILE__) . 'inc/custom-post-taxonomies/_example.php' );


	/**
	 * Extending plugins
	 */
	include( plugin_dir_path(__FILE__) . 'inc/plugins/acf-pro.php' );

