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
define('DB_NAME', 'convertcms');

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
define('AUTH_KEY',         '1I]]hQ-ivWaP+e5F{#%7mWnJW xj_z19/FPC[@y?I@S+_%%:Hd/j0=Fm~5#)jE2H');
define('SECURE_AUTH_KEY',  '8qN3iG4r1+jvL(w.a6zguhaR@y4(+O&U?Ebh_I[cf}{1W;$g*JoelA5TRtTgDNhk');
define('LOGGED_IN_KEY',    '%R.~5Cc&)QVJTvIA#J9:DZhwr!WM0ttO0sF0#~Y .W( Ev_c3&seAIVip2Raukl~');
define('NONCE_KEY',        'ckLHtkWSqT/:-vM-8/DNh}>*`pO!@:OI1k?~,kt#D;/OZl79MnsTbSkGjOgQ1S^>');
define('AUTH_SALT',        'OO]t]acKE9#{[H4TXv#~5uv&*5KpX?h9c,LsX,c{7/uU0GC^z#2R r~h@p~>y$|x');
define('SECURE_AUTH_SALT', 'dDwDM]JRk9kc*&!6$fp5$Jb,<T&OdK%=31p)3PD2GNVYU8$iG}#/VBb8bU+7&##4');
define('LOGGED_IN_SALT',   'h%XKtIkrn]-2d+F>oyR0&EuzGZ@fL$F8)6%UhkD85[R#N9pb_>EAd}%pb7I?vD|$');
define('NONCE_SALT',       '5b/p%%}0kY$1[s q,f<cA4`+F=&1rP/;*)>at:;h=m4CGP Rp=Wu$z`I7Z3w8x8~');

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
