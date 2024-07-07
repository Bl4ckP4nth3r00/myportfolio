<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'myportfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '7|2D(~vMwW/a{lfxP9.|k5RWm8g}v!},F~p8TbDAIi0q>Gw5DXqv}v,o/$)-CONv' );
define( 'SECURE_AUTH_KEY',  'BmBHZ x~^BJ^9g2AW&H4i)I6( ZmkX?<mYN1O$xv_(`11eA+[,f(h:!qvb 7fB:=' );
define( 'LOGGED_IN_KEY',    'i:_a-|3EV(;$v`JD5& WoL^xxda=!G~,E^)mjj)Au%Xi8bky$SbXUJFjNw=Nu$JM' );
define( 'NONCE_KEY',        'Cc%_/]A+O>ZVp~QG[9gCkt3BQfrS#cFWKsx!O.qp+q@.a$1Rl5LQ(x&jf_jsWkv$' );
define( 'AUTH_SALT',        'B}SAFzp`/{]D>SjCPa;x6S4ROgi70/A.o)/8HQnp?.Er;Wp6XJ~d!UlD.k9ST_cb' );
define( 'SECURE_AUTH_SALT', 'usO#:x4Vk>cyLD-kP^`s&eA5If`AkH)D;PS#@FLQ&Uw5jSBie3m2PGj9z9]-<l|u' );
define( 'LOGGED_IN_SALT',   '47~7H4jdn>hp^Q`xX/%P749GUq?zd5o2(pN8H1dW)goP+2Galn>&~tK8z_#P4@8W' );
define( 'NONCE_SALT',       'Tzs[-~tjm1>zYXU!vsdMG,G!qV6Ps7=vaXS^M@/mGC-^7iWTEFtN6RweK k,c|DR' );

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
