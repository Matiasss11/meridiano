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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meridiano' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

define('WPLANG', 'es_ES' );

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
define( 'AUTH_KEY',         'Oo5nj0asz6fH420K2p1wnd26DnybHPsfSpUCKO3bcRexPuLQ978rvCs9T1BRv6XP' );
define( 'SECURE_AUTH_KEY',  'X12asYqH4Jet2UW4l9r16tpRk9yFyzhnOyPMfVSQGTkvvovlUAeydGqAZL3K3MHY' );
define( 'LOGGED_IN_KEY',    'F1bX3JR1MbJUdKrCma9iKvxEHYD45sKmYUUHcS1P8V8tlAX0yag20GK5EsMyYm2j' );
define( 'NONCE_KEY',        'laZHcQt6rYOJDmJzVNhdgF6AUGVR80yCIMM7MTWGzBoSL2yQgUE1bjoc5IVAddX3' );
define( 'AUTH_SALT',        'jOT4XME5BGrWZW78x5ot7HVeCDfRgGmob1taUnCD3umqWl2BpiRgqddwHRDIDAnp' );
define( 'SECURE_AUTH_SALT', 'e6FNtE33U6HkH8ReMEDYLKCv2vTTxIYW7uTg0kXwXgiuiYY9H5jMT1TaXa4Zujd0' );
define( 'LOGGED_IN_SALT',   'R0JDCbVrbAA3ei0TRtnZG8P8ejB5cuOXfVR0AwH1tEc3dmQqxi02hvbVJpMJjQKJ' );
define( 'NONCE_SALT',       'LFR7kwpKWYZ7HsxbZX6kUmkqWllsV7Du7IGHzb0z2gMITCBMOaOxRhFSJw5zkTKW' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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



