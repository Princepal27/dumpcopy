<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dumpcopy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5Okh312jly1bZuh89AFxy7oVIoYGsvqMEs8hbDm7mG2EqG1dStr5KDIXZdSbFnVr' );
define( 'SECURE_AUTH_KEY',  '2tx1DweakZO7THPYJhxHJQMkQdsWNsTYicGvF48UUViYs8fqcGUdDfFj5cTKfaG2' );
define( 'LOGGED_IN_KEY',    'myVlg6ANfiL6owImjQlsY8oCDkkC4k2FFfaoeH2iq20S0fYfLVoQhCQzeywv6vI3' );
define( 'NONCE_KEY',        'xaS9UpHmLpeSiG8XnyDfyuosfbulSiotUesvjeCsMGRVyEB9VHLwSym7Vw1OCipy' );
define( 'AUTH_SALT',        'OGrOg7k3ZpxOy6t2TkKVSVuOoKKVfLU9Tnzpp7tkrV1e6cEnDAsB4pekjG3z1sox' );
define( 'SECURE_AUTH_SALT', 'TeW6cUTsUtubbarlIFxpj952wul3TZpqoBtc8kbu63388arTIogQK5Yqeemzii4K' );
define( 'LOGGED_IN_SALT',   '8DKTv2OsJaAZx8O9KFfb3NQ5F02YSxWPMjGA5oQZP1Oz0FMKyLqbhNuhYmZ3h0Dz' );
define( 'NONCE_SALT',       '6oP8CWYL0Bw2KkjVbow1AsUftItids9rQ9hPQVXwx8qsQ47CSloJwCvjL3FaNd8m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
