<?php
/**
 * @package fc-wp
 * @version 1.0
 */
/*
Plugin Name: FusionCharts for Wordpress
Plugin URI: http://wordpress.org/plugins/fc-wp/
Description: FusionCharts for Wordpress enables addition of interactive JavaScript charts in Wordpress posts or pages
Author: Sahasrangshu Guha
Contributor: Uttam Thapa
Version: 1.0
Author URI: https://github.com/sguha-work/
Contributor URI: https://github.com/ukthapa/
*/

// including the file that contains the functionalities
include_once 'functionality.php';

//adding the actions
add_action( 'media_buttons', 'fcwp_showButton' );
add_action( 'admin_head', 'fcwp_addCss' );
add_action( 'admin_head', 'fcwp_addScript' );
add_action( 'admin_head', 'fcwp_addFormTemplate' );
add_action( 'wp_ajax_get_chart', 'fcwp_getChart' );
?>
