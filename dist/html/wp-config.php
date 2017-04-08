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
define('DB_NAME', 'christosgcassandras');

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
define('AUTH_KEY',         '-tzk!AT?Cu!#GUR_PVLPK?G-C-/$osSKOl^0|`V>AF]g6#|jh}VkXD]1eEhB;E e');
define('SECURE_AUTH_KEY',  'I$4n9wg:7Ve+PXf?/H#q9_IC++=K89uGO&w^?#D{IZ/:kvS0X4(N(2i.Az==ANi`');
define('LOGGED_IN_KEY',    'WjYK^#mNjz^S2TBE247lD:H;=lTE3P(XM#D-)%E_$+di)6kvKwiq5WW1N2vW25P ');
define('NONCE_KEY',        's>z$x|U:s}Uy<`MB*$Y4+OG)M;XVhF -Z2FUIc+S}`-o%`P=s*x8u$-C||VH ${-');
define('AUTH_SALT',        '_*D-?KA&:Zt8-n|E.5lwJ;ye#o~<QI^.y0s#Q (Tg<xXUF~:3P<Xa]j:v<N$_yib');
define('SECURE_AUTH_SALT', '61/(7]|Ot_!n* S17&]Z-t!9bi``%Q &+svbA Ma(-i_coG+6q/a$++4x3Q5oWHq');
define('LOGGED_IN_SALT',   'ghc4d/`cmd>M#)b7$A>)kvXP|NiPRB-D},.b*sja)(6|1$#%+-$G)*LXgu)-[0DO');
define('NONCE_SALT',       ':CNU9S,)k(V=|iUpA/bjaD$vL@(VvcF{Jm4h%mkP:>91|05& qJ-,p+UyuxMM_Kj');

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
