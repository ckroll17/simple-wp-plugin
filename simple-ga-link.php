<?php
/**
* Plugin Name: Simple GA
* Plugin URI: http://wp.carlaland.com
* Description: A simple plugin for easy Google Analytics access
* Author: Carla Kroll
* Author URI: https://carlakroll.com
* Version: 1.0
*/

function ck1_add_ga() {
	global $wp_admin_bar;

	$wp_admin_bar->add_menu(array(
		'id' => 'google_analytics',
		'title' => "Google Analytics",
		'href' => 'https://google.com/analytics',
		 'meta' => array(
		  'target' => "_blank" 
		  )
		)
	);
}

add_action('wp_before_admin_bar_render', 'ck1_add_ga');