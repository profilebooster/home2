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
define( 'DB_NAME', 'profile' );

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
define( 'AUTH_KEY',         'h=)@FuC+qhAzIC]H5ZR~/BoodUt~.3@z-/KDlKsatAn_r,ku44}Y?s}g$&hTf|6 ' );
define( 'SECURE_AUTH_KEY',  '?22p%/ 1i$%VaYXeu^zhGa?ha]?#i(dU7fLKqDQ$&2zD:x-SG0Exk<ZEJM3}@G;G' );
define( 'LOGGED_IN_KEY',    '=c`UlqQ6 e2N]]CD}3Pf@YA($9z/O,uT@U>a8T#Qi/>#7&SX)Nx9P;8Z8(Opfrpl' );
define( 'NONCE_KEY',        'J6wvt@00k*R#w$ _{b#Zi^P@T{als<ST|Z4:;J*7O.ONa2n@_i`1Z_wW3x6wy3K0' );
define( 'AUTH_SALT',        'zgO9j0~bZAI1^|{`tpXW$>aE8vTNG:b|n#*6dJOvDnE6Xl@v9tTevx1XEONg8/Y$' );
define( 'SECURE_AUTH_SALT', 'T:{8_N;bn0ZOXeA#^P7 N|nDKoj,CKc1&q]DGV0?7u]=d#29}A+7kCBPE1d*^Up;' );
define( 'LOGGED_IN_SALT',   '{A.-AU4YaW]5Q~/+W<u`lz1Ng$.fAfwHQ|6k&}LkAE+e(;,Hbi4XwG NB!Yc?uT_' );
define( 'NONCE_SALT',       '{$m+/}}2YQevKc<OrST)t|DhZ*rvy0bdR-SV{%=*?G&;i.K-7NzL{j~*V~z{?v/m' );

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
