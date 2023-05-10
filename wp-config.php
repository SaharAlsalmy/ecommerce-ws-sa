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
define( 'DB_NAME', 'wordpress_sahar' );

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
define( 'AUTH_KEY',         'X?8O#6t-O=!&m`(Nd) +ND_vJ9u|#/m,|Vpx4u-SM(xq,sTjr-T~WLTsqnf9)ZA}' );
define( 'SECURE_AUTH_KEY',  'hnoMQBz/y:vv.`Qq.FxU|u$CEIoxw/B%ktW 0[<t50jKTwkglil31ydn SC514v#' );
define( 'LOGGED_IN_KEY',    'i6*BfWYqBmGOLJp,ol#.M350&og8>V={zdKieuQWBD]b EkuW9@~ $oX4-owvNYy' );
define( 'NONCE_KEY',        '%u{6(]AQm~#-+(2=XCn=?HR`-2Ddnt).F1^p~&6%6#8M1H.$%:{+O;(e<UJkxB9J' );
define( 'AUTH_SALT',        'N6LoOvyI;s&)zE::8*dq>?>v^2dgHNf?B-x C|.V;jo5jX5B~zE8Y,)RnXEdW%u6' );
define( 'SECURE_AUTH_SALT', 'XQJo#C-b-|$wyZuXgXY }_V[[6sQ{fK]P8r?k|kfBD4`w&Pu4M-:&U3@@Y{Ec$.%' );
define( 'LOGGED_IN_SALT',   'o1Qt_KbD|Ta?k/QY0~7PrZ!.hf97PAhERGE@U^~!9q[zX.7[GK5n;WPftvZA3pP8' );
define( 'NONCE_SALT',       '|;4p5US?3HB58rM%Xr}peyd)keG4u7mks8p+sx:*<Ip/pc0J1q!N:RNO0s?DHsC!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's_';

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
