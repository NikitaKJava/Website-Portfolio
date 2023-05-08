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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '~d]e]^Yqiv{{Dqc6@|UC|jszKc^;/C/+jt>QP.M.zkA}TV]`mV4:ba`93JVV~lGC' );
define( 'SECURE_AUTH_KEY',  'cagD,XuIxn-JoVxuwc{Bb:*WoklVy}$,BoC)&FmADRvjx.q/]BA#/p;rQl/SWR8w' );
define( 'LOGGED_IN_KEY',    'F`p%[rW@|7(UfPX:%C:BRy`#5(+1N[($_>gq{-!$$Vpp:15UKW1/,d5K]oi~~uh1' );
define( 'NONCE_KEY',        '~%v0h]]e1BD|@^[>tpxiQU4h4YF]X0ShmT0S9#q9;;jJ+?P;8k}db)%t`t?a@}o3' );
define( 'AUTH_SALT',        'o.4A[;*/EDyXIp.*Kji43~AUDu[$dPv8Wwcae:=d:Hx7^g8n(%dxr6HhfC{8YtKX' );
define( 'SECURE_AUTH_SALT', 'UQ!;*n<L.18BGg fq8d[|UxX-.1M<{H?N`@J=_<M9Tq_=3$c.+*=YE;0HL+j*).:' );
define( 'LOGGED_IN_SALT',   '4?$4)s1EYR)F]wa*)^J(6+gLgB)iDcx 4e<*pVj63!SeD95(4t`eHU;nL,z5_k1N' );
define( 'NONCE_SALT',       'ftOK-/L7-g;k:$B2glLbiX(hd7|`PBF-=*PoXvsx8GOQ.]6J4N h7MMHs*fxj,t3' );

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
