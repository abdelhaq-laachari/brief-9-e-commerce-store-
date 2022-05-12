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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1iznfg/<XE6MSq96c(.HFDaFbY@&ukev_TS*h~tpd$/M-hR#Kps^zi`,BNow_o7y' );
define( 'SECURE_AUTH_KEY',  'q:b8:J^9En*C;2pj>ep4qOKdoKY(-^+fvU4:)L%x5[=|5B-bgHCQ%l`8NUTIN,qZ' );
define( 'LOGGED_IN_KEY',    'Yt*t_6:Il2[l(=Y2RU^eQk0uH8n&Zn2^glyy> 0.X4j_iMN<%]5jp,gFW{hMF^4,' );
define( 'NONCE_KEY',        '9K>GuQr[o{l_y}4cgZqq,K*Y9@dHhj~v/T8ECzlaBlFfM1CiCpv4}JwG1n60qg P' );
define( 'AUTH_SALT',        'IejvYC8})Tjwa/!Hrw-fKN|*Ba/Hs#E=o<[5V Df=37B&Z0hB2+;E#&^:O%?i@9I' );
define( 'SECURE_AUTH_SALT', '-tK3]:RZU]6~a&PfIe<?QT~?rCky#R<3fV`*~4d0Ub1xkFX;0t]=^1-6hr.ip~s?' );
define( 'LOGGED_IN_SALT',   'tQ|&pbEeg^hCM=T#_[X=*|yzQEvcCc!h@Qd-7L* 5N00[H6+F+QHf]erWFy1VAZr' );
define( 'NONCE_SALT',       '>=ufn=*E<]b[/}^VHCR7?/h0v?>x{,A&)[8YY/u[dtt<uX3,|%,IUj=G]zK(vVJ>' );

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
