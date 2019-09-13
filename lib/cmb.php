<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'rm_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

function rm_custom_metaboxes() {
	$prefix = 'rm_';

	$home_cmb = new_cmb2_box( array(
		'id'            => 'home_cmb',
		'title'         => __( 'Homepage fields', 'cmb2' ),
		'show_on'       => array( 'key' => 'id', 'value' => 38 ),
		'object_types'  => array( 'page', ),
	) );

		$home_cmb->add_field( array(
		    'name' => '',
		    'id' => $prefix . '',
		    'type' => ''
		) );

}
add_action( 'cmb2_admin_init', 'rm_custom_metaboxes' );



























































