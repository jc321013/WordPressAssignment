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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mySite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Vb>4KP/=U:D{0!RaxbNbQ!E8#m~m&2[oHns:0C59sP!Z*GQBZ/c6om{P?esX/dXF');
define('SECURE_AUTH_KEY',  '7wO7O5uT(w`O!g/RZs.,*WeUd=>,?e_QEid@@@a$&4EmJ0u_<z:Tmeqd>m_u#[L5');
define('LOGGED_IN_KEY',    '@?kU!xMt~,E~%GAspRh/1v[|q>rGOKj2(*/yeM_3x&(</3l YMySW);$o0^^m>AV');
define('NONCE_KEY',        'fFCh1+/RhbW5,+K,zu-+RZSU*3d(Hxs0f]v$yH;e;Y-^f6Y9:[Rp/~#ys`-lI!9Z');
define('AUTH_SALT',        '[2#~k`0k#v_ar|O1`##m>&&!j.spGRS H9]nLl5hL-I[CC,#X>A<r/c>}DrXAGDZ');
define('SECURE_AUTH_SALT', '/DE%z}!i[pJ<6 @wW)VRk{@c.IZ dM /`@@mGH,$.j`|vykXVy,,zg0cf(KKys:x');
define('LOGGED_IN_SALT',   'M[1U$2=d_H.sRCU&|.2%i2r}]f${/osEj8oJ7{ZL4eJw`zEk.NL@*DdE(NR)Q_oE');
define('NONCE_SALT',       'M?&Y_(-q [T|ZKU8-<E:s1->!1wp7((qk?EG!|8eQ0ik~_SjA^=rj*ikW+v1}u=)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
