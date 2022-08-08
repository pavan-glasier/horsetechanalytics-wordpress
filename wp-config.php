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
define( 'DB_NAME', 'horsetechanalytics' );

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
define( 'AUTH_KEY',         'x;ep,4|!(X~-h4Rp5:BeoDgw;zfS6nFHaASS{obqo4-hVZo#D38^9|GfdpTc-_9O' );
define( 'SECURE_AUTH_KEY',  'fP_)W,:q`/#rz0qfZG/W$9XxcHocs9TDLhs9X,HXHgSu8KmL2vT?Z8CZNQ4.&AB&' );
define( 'LOGGED_IN_KEY',    '#YuxM6]w8^/q^o=)2gY:6_,T}I1V]8_>JcTW,NDbs=XU4vRR}9+W3bJ|>`^$d1$;' );
define( 'NONCE_KEY',        'GWHCt[Qg@h+q*y#dR(G3,jES1(-*RR*v5A7iE~xqmw-.~1ME7/3+Xx E7.`_7g,i' );
define( 'AUTH_SALT',        't-B+mV&=&Y}1)LsN)a]*xQ7euymSzW G?Y_{ByU4WXh,Z 217wCu_/SIaa.rY3$c' );
define( 'SECURE_AUTH_SALT', '@R/_x0=}.qwHv;/WOV:]hF]$j>`mRzGaR1&x&LBlhzrrl9vlaPuH/#u$ DkBd4nz' );
define( 'LOGGED_IN_SALT',   'AJSHZX#K Qrhn=m:YliVYPqHt]W9B7ovp yOF>9w(OG@,Emm5ag{~l0C~_&z_9*T' );
define( 'NONCE_SALT',       'Ac0PoM`2)D-gMlEn<>?htB18|;dWox(2Vb,G[ pTRV oEmMt5P4Ta)!5y@,X?iBh' );

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
