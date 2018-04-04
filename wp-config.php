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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '397d3dff76224b0e4c1782526dd57d452a2f9b198445ba78');

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
define('AUTH_KEY',         'Xzsho,Lb1;Gi7P@cf;_CeHl|3ZFI3IOL~o[#2|5wTe!6.A|,E//YaQ-_)hzB[+G>');
define('SECURE_AUTH_KEY',  'c`o2K%f3OD,74mvQ%h1;2Gj|/*cqOeMhc,j`KZuyJ5Q:@rtnZp%c--#;`)z-{ySM');
define('LOGGED_IN_KEY',    'h0iYgm(3??(qD)E_4:!Cse]~@EwPke6QUhi`GfE52C;ZqA2}j&Px3.[<Lw0qP?~/');
define('NONCE_KEY',        'u6,Y),w`fK8=]}XPUog-D:~e$hiCSE}!]lM#`zIppp{)W,k_5`Z_Vl]ez+vcI#Ol');
define('AUTH_SALT',        'Y gonR`ktyIy*e(/A~V.FRDFDLs$Sh+}J(x2UIYydV|3UJ|O_]ci)b!pXo%sZv@l');
define('SECURE_AUTH_SALT', '_2J20$S|2Y(y2Y;c6tA)zL7Ag-Cns0UO@bK1XIWYA 057XuDr?jFg9WC49[+^uiq');
define('LOGGED_IN_SALT',   '-xu<Pc,4&sB$}_Hi38RIaU`?a^.j-d|~ZaV8Z.E,S`X~_o^oumvse_qoBLBV;n+E');
define('NONCE_SALT',       'x>Brq%@]kn6LsZ>Z]tChP0|obcMa!&n?XF3 )kATAR1;?|)Yw*I,u%K0z+_D`2,n');

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
