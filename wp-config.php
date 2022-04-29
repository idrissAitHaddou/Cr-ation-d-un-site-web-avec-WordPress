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
define( 'AUTH_KEY',         'Ry2[{f#cogRqM~X.xyf..8]5w1+%P0@z4Kh?=kQh*MG?;h,P$:C7]nA#!VC5Ruqs' );
define( 'SECURE_AUTH_KEY',  'W0?$6?Wg QjukqBJmy4K+T3 fBKQu48A*YWXh[KqhrawEmQDC@<Y2og1l~/XxT&;' );
define( 'LOGGED_IN_KEY',    'V0+${iIW@u5l/2kH.ZfD8]n5{Q_Ij1.Q8|-=GVqAW~)t5c?kUQ*E,iJubfbXB((-' );
define( 'NONCE_KEY',        ').~Jxq8j>#/#=8f[sg^ca=hCQ1Ua3~`_6,$>W`sozxIMce>cjZ-H+;-2>{@-?AK$' );
define( 'AUTH_SALT',        '89HY7x&Mf*ythmSFk+3Y1#JR}WQsDO5&;T$h3o.!Y{^.d6z:gf E<?LmJSl|;]0z' );
define( 'SECURE_AUTH_SALT', 'tJjK@GyQw<)LBQMjL/U>h-S?@DnmIKSNqz*|oc3E(@ckA0lUn;ajz4x70qtepH>!' );
define( 'LOGGED_IN_SALT',   'i=#9+_%(;&[rSGg4t^n~u5E|)4#T,rBkcQ#b#BxU%w1j>xOCU%>ntJf4#H$CQ0Zt' );
define( 'NONCE_SALT',       'npI3N5S%F[Egih:VxvcyDMFPq?zdT}TqISG1C-p}zC[k./,YYqdYzUEm~9N 7eqT' );

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
