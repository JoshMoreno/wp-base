<?php

// ==========================
// * Production Environment *
// ==========================


// This is just a sample.
// A real sample gets created during the first deploy
// But you still have to fill out the credentials yourself
// You never want to have the real credentials on a local machine for security purposes


// =====================================
// Define the environment and WP Details
// =====================================
define('WP_ENV', 'production');
define( 'WP_SITEURL', 'http://example.com/vendor/wp' );
define( 'WP_HOME', 'http://example.com' );


// ===========================
// Define database details
// ===========================
define('DB_NAME', 'production_db_name');
define('DB_USER', 'production_db_user');
define('DB_PASSWORD', 'production_db_password');
define('DB_HOST', 'localhost');
$table_prefix = 'wp_';


// ===============================
// Debug Settings & Error Handling
// ===============================
define('WP_DEBUG', false);
define( 'WP_DEBUG_DISPLAY', false);
define( 'WP_DEBUG_LOG', false);
ini_set('display_errors', '0');


// =============================================================
// Salts (security)
// Grab from here: https://api.wordpress.org/secret-key/1.1/salt
// =============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
