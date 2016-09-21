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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'aFQX4hr0a@)h9I.,@JPAMSYF!JjjKE2Y,$=$!3MXqIn`-|%`e#HR: gG<?0n<$uW');
define('SECURE_AUTH_KEY',  'o#EBxl C.%/S6d@x(Onr>D/|j>4^>oQVi0|JiF!%i=Zt?>J/*aKX6fQw7LGHK9]D');
define('LOGGED_IN_KEY',    'APw$c<8k?jKhl]csc> 4oKWWtO>!1Wc=|r11u/-Z3(=XNVa>V`l4_TCb8-}?[R+(');
define('NONCE_KEY',        'K`!pa3q#k:.[}?ut.ifJcW%L6RJP^%~Y^>+i%_yWj$AD:XQ|YS~*7N?8l=W,Y|/z');
define('AUTH_SALT',        'Mb#K(``PN0G!C-NX6X`gdA|G_.`S?5esyI]GoIE]]%N89$wml4agG/R+(6oR%U12');
define('SECURE_AUTH_SALT', 'EC!,ucolCM?|:^|4kZ- M$=[ZX>k{q#S1?cRspY-`|oCAXj^_(xho{OhGvtb}[o]');
define('LOGGED_IN_SALT',   'ob-d9S)6x:{QT0>ElI^t`faS]?C6vmDsUYKo.BJE=l%^=Y]|>E_ aTBveSkPSJoK');
define('NONCE_SALT',       '0a1N`IPb^z4-oVGYrX1P|i5MQ|!$i{$$3-y~J1/nj%M^YD)`X&RR.3;`64)6J|]=');

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
