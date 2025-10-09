<?php
namespace JB\WPPowerPack;

final class Bootstrap {
    public static function register_commands(): void {
        if ( ! class_exists( '\\WP_CLI' ) ) {
            return;
        }
        \WP_CLI::add_command( 'site:summary', Commands\SiteSummaryCommand::class );
    }
}
