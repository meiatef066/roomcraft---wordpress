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
define( 'DB_NAME', 'wordpress02' );

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
define( 'AUTH_KEY',         '@#bC6^#yB21!7!:EXk~PANz}= A1j?e0.?w&f+m[J3#CPVityoDjh5;j=2iEKG1z' );
define( 'SECURE_AUTH_KEY',  '~Z$WRtkFPJ-gG&X;?htTeNDN}w}(l#{G0f!R.d3w9MA!n}05S^h4x>^ YnrA=50O' );
define( 'LOGGED_IN_KEY',    'F-cK_j#J~9.kBs!-ENC]W!r4EX^4HRrvY<L3p?1Y8h@6P9})xN5cs8P8Bu-O-Om&' );
define( 'NONCE_KEY',        'nEey*Se>JxVrz+o5-i-j!Vgq^ApBycEf}}-1x{{1ju}./q[!6&rJ|i!L*4(ZD*Dy' );
define( 'AUTH_SALT',        '.av#T`qho?ve|Mzc)mjb7J>_3wCh`F6Hx>pV)y3RW:KJ!,/O{;x:?EgQrI&-mGyN' );
define( 'SECURE_AUTH_SALT', 'A<fOnGI?(Ov#}_g,PW~vaE;1K(7VuW=!5?z*`$flgHD:F&CXc>PyoaS!Bg{A(2)}' );
define( 'LOGGED_IN_SALT',   'E#`@P:Tk/4;>170Na9;b_|!$kPoj/*W5WO3h8VB~:8G$tfwX}APPd[zs0+q#sK{.' );
define( 'NONCE_SALT',       '(7*FBqiOc%ZP6svggAH?l}G!`zPPa)iY<{&t.*,[e8{R1*Zhj0;4>?(OYz0jd(7?' );

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
