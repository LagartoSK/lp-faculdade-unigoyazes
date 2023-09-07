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
define( 'DB_NAME', 'fugedu50_odontologia' );

/** Database username */
define( 'DB_USER', 'fugedu50_lpuser' );

/** Database password */
define( 'DB_PASSWORD', '2RbJELOcx5uD' );

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
define( 'AUTH_KEY',         'SG7?8d4<;q<PDAOawwl81J+Pq>cx%KE8rf{4!zUl{C%V@W7~ppi;A]CI%|Km#>&]' );
define( 'SECURE_AUTH_KEY',  'SfuXYdCah>YOOotarZ*LUaXOr-u<+7rv|YMcwfAEgj,eO^<MxSc@xpA/.gLI^ki7' );
define( 'LOGGED_IN_KEY',    'WqU#rTCT/_N3f$jD]04XH^xj){*@i,3IEe3/)U7Gugf>#Pv1AC)^_EH(pW1,_^u!' );
define( 'NONCE_KEY',        'uHmYek9x9a {fV6(7f/OpJ#&W/z8Y`5OlI ~o]j9[#B%n$oE/Su.]|,v; P4K`,w' );
define( 'AUTH_SALT',        'pZ}NXK1KkSkrhLA_8Sj}WEw6+kz>TGK*#hO0I=rIh$x<&zf1F5%{taDt*B41e{F%' );
define( 'SECURE_AUTH_SALT', '6XfBU@EMz#8jx=UAH?Xf,Pv:1&fDg{;_{h?#dBHRmj0/lO/Fv[/~/}pAk xVM>AS' );
define( 'LOGGED_IN_SALT',   'LlXsX&!BPay3lPd^X>k#z-16lHNpCz?w;p1U)dq:UMME?B#bgu%:D>Td][A&6$QR' );
define( 'NONCE_SALT',       '#vXxvy[dmCtL2CctOYoxeb6;#fTslj[Y*)Es28-vt)<$+ZsTp:g?N](Jqf4u!]p0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'trin_';

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
