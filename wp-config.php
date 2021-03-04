<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spacereality' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '` =W6#KNwO9y0dR8|X2%!$[>[ma!GIl-eljm&{y=&U[RF;jka{1xiGXNW:88c?sW' );
define( 'SECURE_AUTH_KEY',  ';G<X*;dH?.qC|1NfEe{0a>_03ZSS<`c6}{@[%<_j5gPG`EY?ihm2_>`A<rLr6h#1' );
define( 'LOGGED_IN_KEY',    'i$rv^0ALv^[/3yD>p2f3tlwmha#m:jcn0gSSuqmW4Vp$ljxx[:@hg6S5E_jrAU>Z' );
define( 'NONCE_KEY',        '1^K(Zn|pUcHDEcCeg1VXp@[qvX25pqn-S)Nkz{At58I@i8]Sj?lm{w=tl)>Yf>,8' );
define( 'AUTH_SALT',        '=Kw:;j/<Y):y}]qdkj=2luEde}}GuLM1c`_J{AF}aOEnDCvp(.;mM%pdSXEC_yDU' );
define( 'SECURE_AUTH_SALT', 'Q?8e?#I`Ag#H|z|&$1k<|4GsL]rs SZGzp=rm^Y7o4c&1xj0lteP/xE]RvkOm;(D' );
define( 'LOGGED_IN_SALT',   'DpZWT4_FBMK@1*W3O_=8`;?QrS~W)+A?L(}nMXDwo{H_mx<#(NVqf>ug`tVgA9)b' );
define( 'NONCE_SALT',       'eUr1d{*O,0tf*k+FlSrrx@}{/:uj?!?u&_c<P3veD?hJhpKG6nwd~P3$+(baNe#$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

define( 'WP_MEMORY_LIMIT', '128M' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
