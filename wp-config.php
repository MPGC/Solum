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
define( 'DB_NAME', 'nuevaformaymotiva' );

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
define( 'AUTH_KEY',         ')6C uDBiI@sbF14RE?]Ifxm^XFyGf@|M8@o9Z#&W*h2:Kk6#5.rsJc%E?t}%|>Zv' );
define( 'SECURE_AUTH_KEY',  '[TLY3,=Sh>CPDC(2`;iv+UV?GwsW,,&K@q5heGv )|k:<5k:#$ye5HwrqjRmR8a5' );
define( 'LOGGED_IN_KEY',    'B=;GiI-/s)| IZ)}{l#svCEPECr1G{qPSK+lBE,th?2T<S/0DZN6I8TYAzJ}It[K' );
define( 'NONCE_KEY',        'vg&=FZJZ`Q/O1FFNIzt!Ez[`e<Y_vF?voK&*azJtc/!P3g,w~Uh3Mq&R&n^?D#}3' );
define( 'AUTH_SALT',        ']ROYR$-&CC!anJ-bdqaBA,-w,DW~$|-1e@]pTpfk5t21(~tIrJ!)&sgb7$ yff3,' );
define( 'SECURE_AUTH_SALT', '9YgCq8_}MVU)K{p=2:/%}9{EyvjcpA87Q%PJ :E&K[I:swIi[6cq?>FO3O,v{bf8' );
define( 'LOGGED_IN_SALT',   's)+AFX>.^cPV])Ilw%f*kWEOyuFVz5Yfq=G-*WSdB1qOqz2[rKq6&9D,:Jg,9PG7' );
define( 'NONCE_SALT',       '>i@!*$!=-_3S$eyk?n[;5sw)*,GGbL+6m!u2p<IM_@Z hY-w_^Y#a(LtDy3#y}3/' );

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
