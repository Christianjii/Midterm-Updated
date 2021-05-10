<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Co2oN:p@P>ZXzj=ylRRHHU+F0fOoH/5JnIe,_F PmfUqIxEuq2&j(AY]U2IQ7BbK' );
define( 'SECURE_AUTH_KEY',  '(G>rY_h%`xemShl 7|hBgfNw. L04^:}Fyr%;|`3>~^U:<CyG<O;Hf153dsUb6W_' );
define( 'LOGGED_IN_KEY',    'D||L8Q$8y>yEV>*6.xS.?DLw|b6*dq2g|kFQF>qGQto%PDCQ+$O|HnN8z-F[R6A6' );
define( 'NONCE_KEY',        '@,mAD#`8Mv;z:P;^2D~0a*F*2u*IV{MbV;<*m+A*JF8B0Qd-0Fg%U,Tg=::#]Ki1' );
define( 'AUTH_SALT',        ' >1@g?TTpq4&bEGp($jwPtbkW8x,O8xt;{ZdoWjcD>_muz3>#JQhTV^ XGK4pO /' );
define( 'SECURE_AUTH_SALT', 'k<M>fnA2OaY #KO)n:lQR9{|^-ASX FIBY@hcIgEZ>Wz r79GLa ry3M~m*,U(?m' );
define( 'LOGGED_IN_SALT',   'g~;olO/]u~>$c]zpjB/PhZxGml;T?zIPGkF%cEW%1`O#^c:e ^$+KK=V~8R}p/3n' );
define( 'NONCE_SALT',       'ekho)~QJ{tvVv?Mh_B<a:TR0SNYY I9{+F :_FdHh TLN-Gl@Ck^(wX_5cks2=Kv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
