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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'do_an_cms' );

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
define( 'AUTH_KEY',         '&iq{^fK+ChWBx;)o8eM;5N{YOV+4Sh;~7TEyu*=Z,CbJe#nAW#BMlcDxcf*k1vl@' );
define( 'SECURE_AUTH_KEY',  'W?$xt8SZ:[!Kix{ZW(pkxHRDn7yG:{JrJuNT`0t6!|DJ`?bz&5?Y~;@^`-Wkc`1,' );
define( 'LOGGED_IN_KEY',    'PDfRG-*5@fPp0=BNzFMoZ5~_>o5Tx+Ltj4KaH[X(c7&+WQw999HV$>.xO_?dh-RS' );
define( 'NONCE_KEY',        '#Q7`gL?kRVOf%^yi8x1> e.Q0l[xAA4L5jcB3?s)YD&.5#87LS?CG)PDo!A{j~DV' );
define( 'AUTH_SALT',        '5tV{NZxwrbN?%]~bGQGpsnkY.8e,|!ziAHZ^UG+sJ!V0h+J~XdW@`$1-/,B%Mb4*' );
define( 'SECURE_AUTH_SALT', '0UDGq/J1^&dew6l66U`j,vz;l|<?srF8qu*xHt*z1>YzRgjmBZ~lrqu1^)n:i.c_' );
define( 'LOGGED_IN_SALT',   '`o6!>Jps!Unkxq`~c0iT%+^t:Q4P>EwFGh|15H|{u2FIJe5;$|f#TF-6!C;+3M?=' );
define( 'NONCE_SALT',       'qhIQ#-ZNjo@MKiI.BHUM^U_}zRLU^eE0wTNLOgU^wMhmI4*-.p~l1h<9e-$V(=Ms' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
