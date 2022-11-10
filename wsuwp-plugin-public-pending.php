<?php
/**
 * Plugin Name: WSUWP Public Pending Posts & Pages
 * Plugin URI: https://web.wsu.edu/
 * Description: Allow pending posts and pages to stay published.
 * Version: 1.0.4
 * Requires PHP: 7.0
 * Author: Washington State University, Danial Bleile
 * Author URI: https://web.wsu.edu/
 * Text Domain: wsuwp-plugin-public-pending
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Initiate plugin
require_once __DIR__ . '/includes/include-plugin.php';

