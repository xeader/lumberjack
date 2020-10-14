<?php
/**
 * Plugin Name:  Relocate Uploads folder
 * Version:      1.0.0
 * Author:       Xeader
 * Author URI:   https://xeader.com/
 * License:      MIT License
 */

use Roots\WPConfig\Config;

add_filter( 'upload_dir', static function ( $upload_dir ) {
    if ( env( 'WP_UPLOADS') && strpos( Config::get( 'WP_UPLOADS' ), '/' ) === 0 ) {
        foreach ( $upload_dir as $key => $value ) {
            if ( $upload_dir[ $key ] ) {
                $upload_dir[ $key ] = str_replace( 'app/', '', $upload_dir[ $key ] );
            }
        }
    }

    return $upload_dir;
}, 0 );
