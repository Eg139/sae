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
define( 'DB_NAME', 'sae' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ns*b@4zz1#fEA[ZsIkk-k[|cb4v>!Z(v,? U.c.QID28/O)NKlNtz(9`7m:,T?Bc' );
define( 'SECURE_AUTH_KEY',  'B;8:M6%j{)#;,bPWvU3{D[LTl;i7q>u?` hLySz!}w 8oBvbKEzn10[A t+#_w_x' );
define( 'LOGGED_IN_KEY',    'UN5,IuE }^$2kVh!,7J}YiGHG5gv#f2qRm[NCo0^<;h/V:lXxnqTI@J/o)ev{BV7' );
define( 'NONCE_KEY',        '/4 $zoYUY8`F,ew:P:ou)9-Wio_9W*Pa/La/sXW2]sSQb13C+YqTu=5]aUG 6%I3' );
define( 'AUTH_SALT',        'd$.v~TX>JSY?;kZ</Fteug<>*s=xenPb@jxP#FFsdoTIkg_ch=}y///wY0#Ke:Ne' );
define( 'SECURE_AUTH_SALT', 'bFp5L2{RV>G1]H9E?J4fJg9;WT-H[mDB2 _ir<xag{O9g4=T^j_G[<H!ie%9E?JX' );
define( 'LOGGED_IN_SALT',   '6ku@*Ls|*Ub2G?IunX.H0Xf*i?/]f)81gPvouIgSUU]^nS.]Fvn1H:gT:cZq*[$V' );
define( 'NONCE_SALT',       'l:kx-+,660v(A]2VFJ(q2(uGjRUZ9{aqFhyAPJ;G @TQio rmmz}&3pS&xqn~6T|' );

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
