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
define( 'DB_NAME', 'pizzariap' );

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
define( 'AUTH_KEY',         'Soi ^z~X9W0&t/7JT*t?p6>XFCXJG7.>Nkzx.0LF=8ymT]^K>}2eZpc.fpG-B6$j' );
define( 'SECURE_AUTH_KEY',  'Ew,hPRZRfcKKhOX7tc%3Oqi1n(f}.nTlSj.2c8GecD(.@Xl{Cy5J,G)z#<{rn%`0' );
define( 'LOGGED_IN_KEY',    'n{|uuv2nW ;9S_#8wKFF_>R9>ed6.Sj6mR$_`}vApwy~,_G-) [5jdk9&}&9rbTs' );
define( 'NONCE_KEY',        '=zNg@_tLnT@CfT2m02f-6n]ob>ca{SY/%?{vX6^1$(`e=)zq:GGyH]+unG&pZ^|z' );
define( 'AUTH_SALT',        '{5NSDfdu;$v?:i!rt|42>#.c1jl55k1D[|PW06#BcK|SMlsAB@!zwj?-w.rOI*eM' );
define( 'SECURE_AUTH_SALT', '*@fe[Ok:Nr}&P HY).[[7YOUZFp.C0.46t Zo1p~b3. :AnrgM#0+l*PYIo0p+K{' );
define( 'LOGGED_IN_SALT',   ' p@I!H@zZno$ xQsrq|w9RvIW#8ObP!}%FTamiHW)5LpOmlZ3]^%[y0 !I?XGlpv' );
define( 'NONCE_SALT',       'c+88X}KuOn_Weee!Sg,5,7RQ DxJ0[2L;8KZ:?q4F!bQ(yV?X<?BTo>Ee=gvX[wO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cl_';

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
