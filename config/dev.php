<?php

// =====================
// * Local Environment *
// =====================


// =====================================
// Define the environment and WP Details
// =====================================
define('WP_ENV', 'dev');
define( 'WP_SITEURL', 'http://composertest.dev/vendor/wp' );
define( 'WP_HOME', 'http://composertest.dev' );


// ===========================
// Define database details
// ===========================
define('DB_NAME', 'local_db_name');
define('DB_USER', 'local_db_user');
define('DB_PASSWORD', 'local_db_password');
define('DB_HOST', 'localhost');
$table_prefix = 'wp_';


// ===============================
// Debug Settings & Error Handling
// ===============================
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', true);
define( 'WP_DEBUG_LOG', true);


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
