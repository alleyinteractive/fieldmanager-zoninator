<?php
/*
	Plugin Name: Fieldmanager for Zoninator
	Plugin URI: https://github.com/alleyinteractive/fm-zoninator
	Description: A Fieldmanager extension to provide a context for adding field groups to draggable zoninator items.
	Version: 0.1
	Author: Matt Johnson, Alley Interactive
	Author URI: http://www.alleyinteractive.com/
*/

/*  This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
 * Version number.
 *
 * @var string
 */
define( 'FM_ZONINATOR_VERSION', '0.0.1' );
/**
 * Include path.
 *
 * @var string
 */
define( 'FM_ZONINATOR_PATH', plugin_dir_path( __FILE__ ) );
/**
 * Enqueue path.
 *
 * @var string
 */
define( 'FM_ZONINATOR_URL', plugin_dir_url( __FILE__ ) );

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	wp_die( esc_html__( 'This file cannot be accessed directly', 'fm-zoninator' ) );
}
function fm_zoninator_setup_files() {
	if ( ! defined( 'FM_VERSION' ) ) {
		return;
	}
	/**
	 * Spin up the hyperdrive...
	 *
	 * Just kidding, load in singleton base class.
	 */
	require_once( FM_ZONINATOR_PATH . 'php/context/class-fieldmanager-context-zoninator.php' );
}
add_action( 'after_setup_theme', 'fm_zoninator_setup_files' );

/**
 * Convenience function to add 
 * @param string $label
 * @param string|string[] $post_types
 */
function fm_add_zoninator_post_form( $label, $post_types, $field ) {
	return new Fieldmanager_Context_Zoninator( $label, $post_types, $field );
}
