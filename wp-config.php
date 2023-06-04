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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'tQv8qLfGekE.(.1*J>pwA1].zio|1j|GS|E_^/0L~q^O?<[.&E?UNai-*DadheFl' );
define( 'SECURE_AUTH_KEY',  'ckxCO1D[cE2S)qax/ ^iN*w*}:(G_%&j*slN+~sg$J>G}|qu1A_3K4?juhA[_$y|' );
define( 'LOGGED_IN_KEY',    'WNGh!{ PRU?s+~,KNmiuc!?u1o8D8(()?21yjwz*o@8/0q&9.:|o l5t )0,HG5:' );
define( 'NONCE_KEY',        'Mp4Q4^K[(! m@$_WVBZlZy%~)|l?*wC<*>[>mQ [?d w,G#7uABlw6]oUP_DWym#' );
define( 'AUTH_SALT',        '^D^<k{:N[sl[zFJu+P;UUE0oD84OMO5Su~/t5REtZo?Uu+RO|gFhsarUC;khJhcF' );
define( 'SECURE_AUTH_SALT', '#[7}_]TniMmETe?>+-.!ioV0k/C-UEXo<)[.`]pz n,t,YOzSwnKF}`-aY(Sm) [' );
define( 'LOGGED_IN_SALT',   '+KQ&-Y*]WIxc[P/4G2@A[| 6t6lBs`]stef/aUmgc55u)[_~ZlqZ4~RSCJju>k+|' );
define( 'NONCE_SALT',       't7R_WjG=R+|J;./t9uB$=Pnc3ad!sAf&i?(}b2Buxk2k(CGJ7O(</[{bBX4,r~,G' );

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
