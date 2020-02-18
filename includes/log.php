<?php
namespace WooFixIntegrations;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Log {
    public static $source = 'woo-fix-integrations';

    public static function debug( $message ) {
        $logger = wc_get_logger();
        $logger->debug( $message, array( 'source' => self::$source ) );
    }

    public static function error( $message ) {
        $logger = wc_get_logger();
        $logger->error( $message, array( 'source' => self::$source ) );
    }
}