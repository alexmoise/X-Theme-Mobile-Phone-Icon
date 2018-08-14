<?php
/**
 * Plugin Name: X Theme Phone Icon
 * Plugin URI: https://github.com/alexmoise/X-Theme-Mobile-Phone-Icon
 * Description: A simple plugin to add a callable phone icon to the left side of X theme bar on mobiles. No settings page at this moment (maybe make the phone number and icon color as manageable options in the future?). For details/troubleshooting please contact me at https://moise.pro/contact/
 * Version: 1.0.1
 * Author: Alex Moise
 * Author URI: https://moise.pro
 */

// Output the HTML code
add_action( 'x_before_view_global__brand', 'mo_add_my_icon', 10 );
function mo_add_my_icon() {
 // if ( current_user_can(update_core) ) { // uncomment for playing with it as admin only, also see below
  echo "<a href=\"tel:1300208580\" class=\"x-phone-icon\"> <img src=\"". plugin_dir_url( __FILE__ ) . 'x-phone-icon.png'."\"> </a>";
 // } // uncomment for playing with it as admin only, also see above
}

// Enqueue the styles
add_action( 'wp_enqueue_scripts', 'mo_add_my_icon_styles', 99998 );
function mo_add_my_icon_styles() {
 wp_enqueue_style( 'mo-add-my-icon-styles', plugins_url( 'x-phone-icon-plugin.css', __FILE__ ) );
}

?>
