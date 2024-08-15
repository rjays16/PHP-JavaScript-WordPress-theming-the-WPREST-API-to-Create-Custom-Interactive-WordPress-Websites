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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'STg&>|8x*0[b$v[  _rH`:W:o6DPioZgH<tjT&}]`gHmS=HNbLA)fLfi&?/jmk[d' );
define( 'SECURE_AUTH_KEY',   '(6dy<YE^bX3Z:L%~Rknnz1k gl{Ye[Aoe*sW_)[(Z^aKO(fd4tH|Eg8VC2MX7aU~' );
define( 'LOGGED_IN_KEY',     ']xX{/-$HG *K%An@3.M83W~#(w0fa?mrON;B5XPrb<UbQqzc~[Gz${`~/yZ )2A}' );
define( 'NONCE_KEY',         ')fZ8qB_w_(BE^BZs:f(!D+S9>O} U76Phaot/r<Dj=!)yYWCuLHm_e_->a1+SHBx' );
define( 'AUTH_SALT',         'Z><-|AzDM<&*K|3$7Q>%T{9vV)n/qMz1P$zpi1|aQA_$2;Py4%z?dNbniW]BBme&' );
define( 'SECURE_AUTH_SALT',  'c`bbW?=c7k7g~zfy!X!r[pDwUeH3cPrk;V.pUeoA.>r?@2:lQ^Sa5#yVsh0VnBt!' );
define( 'LOGGED_IN_SALT',    'VFqZ2^R@M`Q;i:opAXLfQ#_seP`|5H,D5:ls{;bW4And{:dRhnw.W3v,{NOMYJt~' );
define( 'NONCE_SALT',        '?^6fOwcSp$_#C+LcCjL/2kZHj3{{yVxXlSKg-_r[.w*|LS+.?N*L83VAju`R?y7$' );
define( 'WP_CACHE_KEY_SALT', 'f&qndD4?Tf,MftX_+o l1lt?PTq#)PCRHm(FmWK:7K*i-V%C*`owA}2.gcgfW+0m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
