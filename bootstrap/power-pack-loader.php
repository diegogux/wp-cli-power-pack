<?php
/**
 * Plugin Name: Power Pack Loader (MU)
 * Description: Loads WP-CLI Power Pack classes when WordPress is loaded (for environments using mu-plugins).
 * Author: James Bregenzer — Full-Stack Developer
 * License: MIT
 */

// Attempt to include Composer autoloader if present.
if ( file_exists( WP_CONTENT_DIR . '/vendor/autoload.php' ) ) {
    require_once WP_CONTENT_DIR . '/vendor/autoload.php';
} elseif ( file_exists( __DIR__ . '/../vendor/autoload.php' ) ) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

// Provide a minimal shim to ensure classes are available when WP-CLI runs.
if ( defined('WP_CLI') && WP_CLI ) {
    \JB\WPPowerPack\Bootstrap::register_commands();
}
