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
define('DB_NAME', 'databasewp');

/** MySQL database username */
define('DB_USER', 'userwp');

/** MySQL database password */
define('DB_PASSWORD', 'passwordwp');

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
define('AUTH_KEY',         '`!Bn*H<0C]bD5X.$!ANHB8?CCkRTBW[T6/}mI]@9)7XP{[0(at`-%|F Gqt93<^w');
define('SECURE_AUTH_KEY',  '8UOW=ls;o=.Z`63Go{-n&C?Nu%W~3za6|VG-Htx4f<28l{*:LhnhyUqXEg8PKG1]');
define('LOGGED_IN_KEY',    ',=-b6M3_an[*OGJUUU*2AfdAkPr[W>=PG^CLHb!n&9R<CDYuB>1A})-cUz_{ka{;');
define('NONCE_KEY',        '_3u g4wGc%vybvd##7W64>P&].O 8$Fx]{g9N9c5BQTwm4q)!U}94_)8>?yJ]heK');
define('AUTH_SALT',        'r>BshMJzelo2i~O{IG%`s<2A3#JD]TpvJqm=llA=*<R`%5Cne>[~ST%;VAKq}(}#');
define('SECURE_AUTH_SALT', ',NU/--7H8[PJB51(FNt5pJ%+;{=&bqf$H5N4B%@RRXQ ~<(Z=my?IT9dt#[*)95x');
define('LOGGED_IN_SALT',   'dF+i(S)fDR?)y=8m3 cC7E|uH1htumB4c]t=Xr8J`thM812W=R[(aSbeC5EL`!`(');
define('NONCE_SALT',       '46&[.?6eLkcth:x@{*PZe8:ii70]f6d=*O6gOROqP/-UxCaD0_*:]b$YR>,K2~-:');

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
