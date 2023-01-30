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
define( 'DB_NAME', 'parlament' );

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
define( 'AUTH_KEY',         '=kB6S}<XSH-)QY [[hUqeYz02s7f4Iiyw^`G{<0](eEFIdT&`On~vK0{{ZAbJd2V' );
define( 'SECURE_AUTH_KEY',  'KrO_x8[Wqz~9#[CPi5IILe4GYG (E7lHd@LU^p?fJO3HYUr;Ea1z>/2m5<Lq]o^u' );
define( 'LOGGED_IN_KEY',    '7Jd/R`:Cx<XoN9=0mQ{#KSf(5r9xFbDPv8IE(^q=4Jb/;>3H{|LY0?{E^;]iGg^J' );
define( 'NONCE_KEY',        'EgTRtzGp#-Mk}:ufTm=7E/)<mv}px_hF9tBs`=~I-u&MM<K|uY,LKgzf&=PE{PX^' );
define( 'AUTH_SALT',        'r~2g0sW`=,7bq9<^J}-s O0K7r#`Y[28?--fq^-4M5TV)-,5p({$3r|UAtHKLF:O' );
define( 'SECURE_AUTH_SALT', '1{DEIIr=?EQ*eZppi(]_2>z#i/_U$ZquzSYY34m$<$~u}ZJ!;]EE[`f@%iwsn63p' );
define( 'LOGGED_IN_SALT',   ']xSpj5BPUd,!:o@_TDDu$8~xk:CHyU,Etcia&7ctwCz!6Z&zWh!2sTkGH~l[lmK`' );
define( 'NONCE_SALT',       'nN#gw]g>XAy+`rOEX)[,idqkGntK~YJ U)^VHb2Bs-3l^q=^?M.CEH.:JwPRh03Q' );

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
