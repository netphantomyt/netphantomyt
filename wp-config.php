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
define( 'DB_NAME', 'netphantomyt' );

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
define( 'AUTH_KEY',         '>^/qcPC{?,XcAoh%UeBu%0|d[cHp/28]~*c[Y`Sq]>t^z({{Nr.RCq7T/:7]N_MX' );
define( 'SECURE_AUTH_KEY',  '4%PHVM(sZ{}agE:q%}pI,TvAd7KbwipGu<x<PStc4,{]91?WQJ)(]([D#WXvSf&;' );
define( 'LOGGED_IN_KEY',    ',>_@yO%6{Nx>ukhSrm13Dmr<pjTw!+J6zvas:;/(3ehy=9`|H!5^EC|?s3.S^fo[' );
define( 'NONCE_KEY',        '/ZihHA]&tz>EBJLCla!u=*lp6i+l#hKWq8PdmoU&BdP{8(NF2Pt$t96]-8SIGr`q' );
define( 'AUTH_SALT',        ']2g*hX5P3`Edv0=G^k,Iu6?gZ.eH5tj_gXa}gm7=(dR7G<V-^j57}Q$EMP~~#=LY' );
define( 'SECURE_AUTH_SALT', 'sF_qg/4E?Sx_.WJ[Z5K{,];TfnBZK!w&J>yNuNh)c=hv:A^aw}FA.DUn>3O%i8@f' );
define( 'LOGGED_IN_SALT',   ');zY|)>VrR`ZZ%`ZC+h3d_rwB-oav==D!i37j^g?r=Zl6T]*#2bwBWCO3/d6EaVE' );
define( 'NONCE_SALT',       'Wc8zp/api``M{k22 RSBn8u+Xe;Jl!0r<JfZu%1T6gW>*RPvrFc^k%W.,|JYo6DH' );

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
