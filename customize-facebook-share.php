<?php
/**
* Plugin Name: Customize Facebook Share
* Plugin URI: 
* Description: Using this plugin website owners can provide their own URL to the Facebook Share API, through a simple form.
* Version: 1.0
* Author: Rajat Popli
* Author URI: http://easyboxplugins.tech
*/

// If this file is called directly, abort
if(!defined('ABSPATH'))  {
	exit;
}

/********************************
* Global variables
********************************/
$cfs_options = get_option('cfs_settings');

/********************************
* Includes
********************************/
include ('includes/admin-page.php');
include ('includes/container.php');

?>