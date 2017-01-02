<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'esadDBsudaj');

/** MySQL database username */
define('DB_USER', 'esadDBsudaj');

/** MySQL database password */
define('DB_PASSWORD', 'amjsBJDYgd');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y>jnv>}y$7BU3MTjqubfy$jn^,7E$3AUXLPimuaex+;2m*.6A<{EIPiHaex*.p');
define('SECURE_AUTH_KEY',  'kz>}z!,8BV|8GJcgNRZsvjn^,7F$3BUY7BUcgNQkn^>n^,7B<{EMQj3MQYrvbfy$');
define('LOGGED_IN_KEY',    '4@!48R0JQUnrYcv$^gk@!48z}0JNBIMfj+];HL];HPT9DWei+Ztw]:5_#9DW];HKe');
define('NONCE_KEY',        ';D+;2LPZdw~_5s|[CGO:1KOhCGZdw-cwz:0@!48GZ[CGZhkRVos|kr,>BF}0JRU48');
define('AUTH_SALT',        'QgzXry$3^.{EI>{FIQjBUYfy$qu<{E+;6ATX6AIbfMPjqu<m*.6AH;2LPi2ATXqu');
define('SECURE_AUTH_SALT', 'IXbuymp.#9H*26PSaADXaiPTmq.<-_#9D]:HKSl5OSltxeh+~2w[15OS8GKdhGKSl');
define('LOGGED_IN_SALT',   '9OhltZdw-:s|[1KO48RZdCGZdl~Vos|[@!>J3BEYbIQUnr,Unrz}$^3BF26EXbuL');
define('NONCE_SALT',       '<7BUY7BJcgzQjrv>}^.6AI2MTXqAUXfy$jn^.7+;6ATXDLPimLPiqu<ey+;2qx+;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
