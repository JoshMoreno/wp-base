<?php

// =================================================================
// Get the correct config file depending on the environment we're in
// =================================================================
$dev_config = dirname( __FILE__ ) . '/dev.php';
$staging_config = dirname( __FILE__ ) . '/staging.php';
$production_config = dirname( __FILE__ ) . '/production.php';

if ( file_exists( $dev_config ) ) {

    require_once( $dev_config );

}
elseif ( file_exists( $staging_config ) ) {

    require_once( $staging_config );

}
else {

    require_once( $production_config );

}

// ======================
// Proabably never change
// ======================
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define( 'DISALLOW_FILE_EDIT', true );
define('DISALLOW_FILE_MODS', true); // this prevents updating things from admin area, we have composer for that
define('WP_POST_REVISIONS', 5); // lets not clog up the database now


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __DIR__ ) . '/assets' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/assets' );


// =========================================
// Don't Remove
// Sets up WordPress vars and included files
// =========================================
require_once(ABSPATH . 'wp-settings.php');
