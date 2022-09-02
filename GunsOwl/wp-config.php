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
define( 'DB_NAME', 'GunsOwl' );

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
define( 'AUTH_KEY',         'tBITq6LgtGGOMlBa0SNuQOWrB73tCSc8WtWgOgFg49cSfEL4qcU6zDPN3duCPZrL' );
define( 'SECURE_AUTH_KEY',  'Qae3JqTjzEKBZo95sTg8iQEKArDjRq50nBbdJ1imNTzbmYuuXOiOEaNq2vd2fsXJ' );
define( 'LOGGED_IN_KEY',    'cw3bZW7qPCw9CrM75RVqZ22vcji352vmXBm83wd1eUhn9o4AsIGI3iDHAsDhOo1g' );
define( 'NONCE_KEY',        'gM9DiNOmo2EX8jYLQORmYjQgwh66MyH0gSzV2SUUX6rX651PBQBG1cIN7paNnDDX' );
define( 'AUTH_SALT',        'K8fvljlrUYiVx34l29e7ZJlu3fUQqDIAeGwv4NayawoFtxzDX7s2TrXvW2HiE5vq' );
define( 'SECURE_AUTH_SALT', 'lVdTFtpeGxwPvCLE3ZRuMUlpQaYdk8UumFGz65XDRlKHaJo63uDRbVIhMvVWVtlH' );
define( 'LOGGED_IN_SALT',   '59foclMo0mSn4hfeeNKyRE7EMW4PYbDZsqfCQJQ1aNnahooXNdi5abK8AX98NOiz' );
define( 'NONCE_SALT',       'uADKz0HgTghaNWNoPQrjvLxQbge5uudKzATX8BV6YpjPCjhJ6dCMRzmL4wPsGPA0' );

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
