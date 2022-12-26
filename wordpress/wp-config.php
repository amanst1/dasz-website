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
define( 'DB_NAME', 'dasz_db' );

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
define( 'AUTH_KEY',         '![=I/a_A:WVTbThw:4IJE,U)lp_ELy2u8{S-iRE-uxbLu:mR%vtq{;96)Rg]o qz' );
define( 'SECURE_AUTH_KEY',  'u_lvYl1ReT{W{Wqp&T$EE>8ntjMReMrYT_o|[{5u WUz9q~zA5YA)V-*SUi.rT5r' );
define( 'LOGGED_IN_KEY',    'qI9,(MXy8J^DA-6s10tLlaz9Q}(`2_BvITEu=.+yZb8wa^9+.Tho4AL-{.DNs6:n' );
define( 'NONCE_KEY',        'w_[Z54?CXauShvYPUC8/^pU^nw<#`4$-`+=keB|`HY>w1obD<-9Y WkYZz+wiv; ' );
define( 'AUTH_SALT',        ':YN_oQQ[1AmN`tyO^Mu+JdAXC/2fah7:`_g{IzEFgiQ.@*&<?VR~kGHcQfk7!4]!' );
define( 'SECURE_AUTH_SALT', 'DZ&Rf~W83.6A]^215#55pTo+[,gF@(9rj-T~ Idj|_&JKRIBH|c!2QZOQZrJxK&7' );
define( 'LOGGED_IN_SALT',   '$^Vtk|Gl`!Hf#T}g.indtU$Y=|SI(z5,GbyC_ql~NM(/Q4C=r%]1[2awQfum Iw1' );
define( 'NONCE_SALT',       '>%2bAObSJ#W]Q%Hphl2cSB<y;4^E@ B@d`GB-qs]VtXsEMY:WD6)E[)V@_&B`{Dv' );

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
