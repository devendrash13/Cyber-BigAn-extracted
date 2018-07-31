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
define('DB_NAME', 'cyberbigan_input_1');

/** MySQL database username */
define('DB_USER', 'cyberbigan_input_1_dev');

/** MySQL database password */
define('DB_PASSWORD', 'Cyber@bigan');

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
define('AUTH_KEY',         'R%4t_p;)D@m,ots`ME-2)FoKLj>M^j|l%eX5R9g~)df^-J]G$(p]`D@`bESfi7wd');
define('SECURE_AUTH_KEY',  '+*Tf~nm-:g[v*G2Ed~l>=;ZuTq;]}<T<DDs=$9,vo|V3gqcSPkU!EZ8OyA4J#!%X');
define('LOGGED_IN_KEY',    'r|<)$3qh!e%kAy3 c<52:K(4C>[%k{^W;Q_h.,`=kA7@;%yPej/PE(6bWzxaOw,<');
define('NONCE_KEY',        'piI95aFXMN}>AX}ca|CuS_%$=[9vq5!Fu3_D`u Ruh~?uo9>7JTz#c0{H(0uceJ}');
define('AUTH_SALT',        'Xc;~Q>#$oLCtynZL:Ukh>a@]8=dc0Gyuf4X/>R86J{{7#{eBn@7_xX/ZEh7jcsQ*');
define('SECURE_AUTH_SALT', '2R=&6Ges2rpa]0!T;Rzbz~@OFFZ0-Q13kN-tm5h!C3N_#HVDR1nV Xmv$zooD*YJ');
define('LOGGED_IN_SALT',   '>ty2Oo5ac[Q!4W0!hbg$$=T|)igA@/4cm?Ui.=8FyPWE6kBIJd0A/o4YacQJEYNU');
define('NONCE_SALT',       '=D#$qJXy%!j40?tI.q*}JJFiVVH$J(Tz(#F=M<]-Og!i-||`WS{5kLCl=E|F-,,G');

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
