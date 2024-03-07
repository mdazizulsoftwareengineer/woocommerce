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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'ocYH.&*[3*UE6?:K3ck-N;0hdyTU|t<Ksd22.whGl%@/{0$1;0WdYyC75eCB[5E1' );
define( 'SECURE_AUTH_KEY',  'e/_r;g!K9)>^G~w-}1SNOH7!YPC@2A>>AKK49H8}*{HA!}UJS8?#NOFC`gm<E8WQ' );
define( 'LOGGED_IN_KEY',    '~ZKSK._!U<j,cd9KH &C>LCv@ngTrPqqYT-bjHLG?NLS|W+j+b qF!2IF_I,1aGC' );
define( 'NONCE_KEY',        'o:/qd~2qt5<Fq.jA^<2mEpYnvL+~uQMN/i&,Ybzq8zzR9.$odyk :$+$tL@}?uFq' );
define( 'AUTH_SALT',        'hD%cT@a5Xhw9#bbEut#%481/d?/$J7F,zBftgCJ@>#d+AxtINl`s72bG(lJi(w(u' );
define( 'SECURE_AUTH_SALT', 'oUEH1k>&#<><j/P/-6?1m^mJM}nWO3Lp7rVRM&Aclp&V9s+,Di$N^?v)^*niz:p1' );
define( 'LOGGED_IN_SALT',   '+|nRFmC_$1>iU,qoxRd_::e^ @:d[GU,MQ#J7o.qpB5U^Zjw#L2&_}yZX^h~H v&' );
define( 'NONCE_SALT',       'D[|^q|A&*}j[bE8EzbDb00I$gwtkk/jq)PO45{5c,j3#`ZlT?!&+c_E3wRD%]IjI' );

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
