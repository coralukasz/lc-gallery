<?php

/*
Plugin Name: LC Gallery
Plugin URI: http://lcora.io/wp-plugins
Description: Gallery plugin for WordPress
Version: 1.0
Author: Lukasz Cora
Author URI: http://lcora.io/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lc-gallery 
*/

function lc-gallery_menu() {
  add_option_page(
    'LC Gallery',
    'LC Gallery',
    'manage_options',
    'lc-gallery',
    'lc-gallery_options_page'
  );
}
add_action('admin_menu', 'lc-gallery_menu');

function lc-gallery_options_page() {
  if( !current_user_can( 'manage_options' ) ) {
    wp_die('You don\'t have required permissions to open this page');
  }
  echo '<p>LC Gallery plugin options page</p>';
}

?>
