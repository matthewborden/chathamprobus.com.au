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
define('DB_NAME', 'WordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'P7,nKlnA~dd@%w7Ty66+aCwLFIDi@[.Ns`p*-,8}QqWg9[9UJqd`ssJ6f.LP[M]S');
define('SECURE_AUTH_KEY',  ' ?~MdMDbW/hkk^EF+E|-?69zV4q2z2D|k|MI>JsZm<`|mmE1Ws 5-)9J<3+M9|)&');
define('LOGGED_IN_KEY',    '8T|pNjJIgo3$M`6)iQOkGT0+%9H_3+jniE4.{i>qYwlJ4+8DU0L#g[M$|83qwH2)');
define('NONCE_KEY',        '|ZQQ}ebwMub~2eW 6O**ElfLx)(^*TdztC4PA81fnoeHxJ@h[Rkh/T-BvqEt&#;5');
define('AUTH_SALT',        '|k<b]BF-#<3kR1J+|w2EwX;!%[c_bFJT1Xdh:Zie?2~B!v4Uv,|>rG+9&1:aj`8{');
define('SECURE_AUTH_SALT', 'rdCw)JrN9jzM6zsiI%yDEQ7qFSYn3]Cx)7+;b<1R+u-e-_(xv9xGBtNXes,y=WmJ');
define('LOGGED_IN_SALT',   'l7G]hn|~=~J8L/B2c>Vw=[k%ohU+a|7zVLv67<u1yC|Rl+mj:GxPhi=n2|56$&+;');
define('NONCE_SALT',       'PEzO!jZ#1<FQ||67@5yn:un,DBn-o+dP6URJjZ:+tB73mzj731)J-8>rXS6YC>1.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
