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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '^MF~}bn8d1=ba!n7)QNm.2jM1x}Kx[.L)e;bFd+W048>)F@5QqO ,a,mP<s{LQ6b' );
define( 'SECURE_AUTH_KEY',  'NoZ?F9=y?O[C_au#GP{qwj.wX/{.IHe@AGel.(ff4%dN89N,D8CZy>RL_ rSyqSL' );
define( 'LOGGED_IN_KEY',    '[ ]{-ctid4f`#P1/X<PF*}~5q[#~Ci+?/=,IhBIFORctPbGt1T*,2bMGD0b@JIV}' );
define( 'NONCE_KEY',        'Hh# ui-/#wkdPNEAKc<&27q^T)f[@TXOy7+Pw2=.U8_U`87HN@Z$CA]=xI?n8)RS' );
define( 'AUTH_SALT',        ':OI4<sNUM1gJQI;ADs|kN~6rGX:8K/b[y>Ubbe6@UEit>u8v4$XU}1qBjSh[f[zP' );
define( 'SECURE_AUTH_SALT', '^TY2.nXuMv-lQpz,2ZMtIb?@.{Q,3hDlXt:j]1ueg.,n_PCm&6t_bv,$zzt`0j)H' );
define( 'LOGGED_IN_SALT',   'o%CR(;|a~bRL!K!b<67GD/-bw;/id8X)d+PMcG5_w+HTKwTBoN}rTS&+7M~,%389' );
define( 'NONCE_SALT',       'kYzTI7nS2BT0g)HvL:%ba4xDG#0V+,;h6>/4<?taxkv$7k*7FfZ&7l1N>WCrV2Q]' );

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
