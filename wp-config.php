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
define( 'DB_NAME', 'wp_p_agency' );

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
define( 'AUTH_KEY',         '8s<$T` ]ed#G!/(5pqo+2QBmFgzL95L-nm{$eI4I(`B/zGS*ank>hSA:ZW3et0am' );
define( 'SECURE_AUTH_KEY',  'Y7tsnWadJB+`q{,ZBw57%@$0!6<[WwY}cvxa2`H:|6KS(]JmeaT=CEu9-iyCUwHR' );
define( 'LOGGED_IN_KEY',    'JS,!u!8zYYJ:UcAOh D!GQ},230{C2SBjm/A1i/_aDlPp(^V+S4;&1S4Q9/!FfEZ' );
define( 'NONCE_KEY',        '.~*q=GtNm|r.1Zwv@&iHnb6Q?i=f_^ebe|*5Qse-|:R^[-pf&gCqToZ--u7>,Fk1' );
define( 'AUTH_SALT',        '/lR!$;-XD=;7qk~8qzOWEVz^WZuNjxc]Vp:C^yAfLwQ!gjFJc]]y%7YF(zW<o.Bv' );
define( 'SECURE_AUTH_SALT', 'q@1?ybtsxaPs)NfE]I?</R:#AH-[;SWV76_^#{va&nY)r,>h8, `t}a`&8dBS0:V' );
define( 'LOGGED_IN_SALT',   ' 6HOEx2$r+B]mbg;_XDXKmina_`Lbib,?O<y[49 `i_):rcXnZlK}%l!&8|?bg|6' );
define( 'NONCE_SALT',       '2:&BuQ=z0|!<9YK!JeIC]:hc>]h9VY+5,!~(/pxS2My.kW`L:h8?(ym)2/UZ*/hD' );

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
