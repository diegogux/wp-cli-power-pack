<?php
/**
 * WP-CLI Power Pack bootstrap.
 * Author: James Bregenzer — Full-Stack Developer (https://jamesbregenzer.com)
 * License: MIT
 */

if ( defined('WP_CLI') && WP_CLI ) {
    require_once __DIR__ . '/../vendor/autoload.php';

    // Register commands
    \JB\WPPowerPack\Bootstrap::register_commands();
}
