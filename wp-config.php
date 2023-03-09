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
define( 'DB_NAME', 'wpress_db' );

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
define( 'AUTH_KEY',         '|8(BO}OcvM[mo=7igNC/qDt@i30b?z6M $^fae~$%ks8<,Ac[9:[AYB8l2~l]9_H' );
define( 'SECURE_AUTH_KEY',  'q[>usyP|^cN@PKNL=ZW-B?$c$#V(DITkrvUN@f%GhWXDa3Dm)_H^b&eg//f`O[aV' );
define( 'LOGGED_IN_KEY',    'IxHBXOM)`=U50]f;C&ZaLG|/hjB<`-6^Tv/16N=e(26SUv~Kix(.b zXF(46nD}r' );
define( 'NONCE_KEY',        '3`3huY{o9BsUcC{e{>C`d-<g.[Kgb, PB^LUs4_PCqP-lI(=&RdZP{_Vvo=8>w8f' );
define( 'AUTH_SALT',        '%jv(G3NS;:.pl4NG[iC{]S#j@,vB|(8zZ 4n}UrD&ot/4XVlYTM)uXZYgr0fdd<L' );
define( 'SECURE_AUTH_SALT', 'B;_Jj9u/y-4vpAORau@H?~^TxIGc-jF!EBW|<+Yc_MIkcH94PGI-=-NNjuKlP%9C' );
define( 'LOGGED_IN_SALT',   'wwHm]/bSR:;dR0?V4a**g$] rp+J3ZBAuMstzh=].O]zk1Yw.YV8M 3>17O2aqb]' );
define( 'NONCE_SALT',       '5pP4c -@&a1?gC+VR$YXCP>Vih5qRQ,`+ EuJ.AzzoH>dy6`H9,nve`i=mXxa_Ru' );

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
