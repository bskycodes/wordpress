<?php

@ini_set( 'upload_max_filesize' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );
@ini_set( 'max_execution_time', '0' );
@ini_set( 'max_input_time', '0' );

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
define( 'DB_NAME', 'wppress_db' );

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
define( 'AUTH_KEY',         'ub|$r2ql[Nw!fmaNY;}_r8i]s<9btQbB BQqe=vxQID`nIk]!9R9[xn8,f#R<$}7' );
define( 'SECURE_AUTH_KEY',  'feT.3H)}NX,-n;88*ACAG:X|5$?xnH5A*OkWMr_2IHLT)mg=l~y5IjY({(D<XbKj' );
define( 'LOGGED_IN_KEY',    'rpW<x|&qc5VWjPJi3eVh5CO>|:Sv@WMaN> x&]Xp{ #>G=>:-]K7m.zPJmhWOzZz' );
define( 'NONCE_KEY',        'bRkHuP|^}`>fy=jMom?eTGf:Zv7_AF#`nS-4SQdhcVu1(i,uL_PyZ>Ewt|QJH+~4' );
define( 'AUTH_SALT',        'fEPFK=AN>HJ,eJmn$-IthxD|rSf4jZ8s15@~PPnPV2 ,]GHIVGz|M+uTdU?Rp6^R' );
define( 'SECURE_AUTH_SALT', 'pHVby].:8iD**)Mca#]P!-U/S/RAI1~57aN<*#L;cvpP>goJon#d.6S|r]{$<16f' );
define( 'LOGGED_IN_SALT',   'gK{t8F<{Y_kE]:%*WeC+7)@* {Kfl3XG*cNWT~&@|Sy<OjF5wZ.@`j+  |%-:Zb&' );
define( 'NONCE_SALT',       'F8I/rf4~bU(u>{5?o%q,s77<W,dO0^h&;Nh85]j3hMJ)`|ls_02i99z0!Sy{,|NB' );

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
