<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'sunny88dayS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '||J?c-!E|Yo]M<R+&!2%L+{L1t!(1n{pa4K-?M?Rmn-J@qCY|-qGo<:_j*[Gpr<~');
define('SECURE_AUTH_KEY',  'e!jp|:{8)QksrT0@1[a}~|vek/;l`oA?}Vf5,aB+UlGZCkc+ZlrsREtv-4_.?FC,');
define('LOGGED_IN_KEY',    ')l.^inE@g&yn5_.d$3+qmL/v`d9[uqj-Y@K|RqPxsr*NJb$]Ff0Hy&y;5_YKk?Mq');
define('NONCE_KEY',        '>s*JkvEcIYcv,bjCf%1sgbmPhveV7C>aD[g@]mQHU/|Ii{.tULcN/mha@-z!il]i');
define('AUTH_SALT',        'RO-ng|ocl!al|0;LpZ.)<&R>7*h>`+y-sM-P^Jo}m@$@(IE!4MsX>fI~|%;tJ{-z');
define('SECURE_AUTH_SALT', 'N8W=H`xd4wEa!<8|wMRGA.z(h.5vE?MynNUWuvcN:[:nGW o9r,`eVK~g}-6.7IU');
define('LOGGED_IN_SALT',   'h&^<G{cu&*.F5-*-ei20Sf7}ThSLz+4T-W/|{PUP.%h%j0dy|/|EMY`8]9}z1I%-');
define('NONCE_SALT',       '<V+9{3k=Es+ABN/iC?nbnohHR-?cE&2`WUdXom{jFAtYzSY#q57t:q4np/T@pl()');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
