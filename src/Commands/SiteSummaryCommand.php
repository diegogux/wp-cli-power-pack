<?php
namespace JB\WPPowerPack\Commands;

use WP_CLI;
use WP_CLI\Utils;

/**
 * Prints a concise overview of the current WordPress environment.
 */
class SiteSummaryCommand {

    /**
     * Render a summary of the site environment.
     *
     * ## OPTIONS
     *
     * [--format=<format>]
     * : Output format. One of:
     * ---
     * default: table
     * options:
     *   - table
     *   - json
     * ---
     *
     * ## EXAMPLES
     *
     *     wp site:summary
     *     wp site:summary --format=json
     *
     * @when after_wp_load
     */
    public function __invoke( $args, $assoc_args ) {
        $format = $assoc_args['format'] ?? 'table';

        $data = [
            [ 'key' => 'WordPress', 'value' => get_bloginfo( 'version' ) ],
            [ 'key' => 'PHP', 'value' => PHP_VERSION ],
            [ 'key' => 'Site URL', 'value' => get_option( 'siteurl' ) ],
            [ 'key' => 'Home URL', 'value' => get_option( 'home' ) ],
            [ 'key' => 'Theme', 'value' => function_exists('wp_get_theme') ? wp_get_theme()->get('Name') . ' ' . wp_get_theme()->get('Version') : 'n/a' ],
            [ 'key' => 'Multisite', 'value' => is_multisite() ? 'yes' : 'no' ],
            [ 'key' => 'Users', 'value' => function_exists('count_users') ? ( count_users()['total_users'] ?? 'n/a' ) : 'n/a' ],
        ];

        if ( $format === 'json' ) {
            WP_CLI::line( wp_json_encode( $data, JSON_PRETTY_PRINT ) );
            return;
        }

        $assoc = [];
        foreach ( $data as $row ) {
            $assoc[] = [ 'Key' => $row['key'], 'Value' => is_callable($row['value']) ? $row['value']() : $row['value'] ];
        }

        Utils\format_items( 'table', $assoc, [ 'Key', 'Value' ] );
    }
}
