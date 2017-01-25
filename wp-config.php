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
define('DB_NAME', 'nat_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'S:*q}CwRbp!0M[hY!{Zx1!;A{A CXK@3yZ%L&z!sk_Y2[v,9Xux)*dE&8 AT6+Zj');
define('SECURE_AUTH_KEY',  '/7h1GiungwZ]@r4s>qx4JsiWF1QaM](I!53N!sjwgrO>/z(%RjFSfQ4aFKWJ1>Cf');
define('LOGGED_IN_KEY',    '%F6n:-ec=.*!T=t#/iW@v!^/Oui-Z1pt?,bQx]{@G]_*dR-YS6fa<c=JY$j|HCD.');
define('NONCE_KEY',        'GZT.2Rh%@]gL`2kLQf#9P@~,/E%i|4^J:gE4@g1U:B-e;%X^7Z=#+NHR+c{XvJ36');
define('AUTH_SALT',        '&>i#Upb,]q^!.#+(`0Ivo[j,#%Oi.@9MxG,@ek9f[OyY3xW/V^z98U([WW]7Hoq<');
define('SECURE_AUTH_SALT', 'gFZPCR1%7@jtP&Mg?/z4|U@@to0e;FK*^Twu~A!Zzb?Nj@+2Z<Oi1hxHs+DAlBu&');
define('LOGGED_IN_SALT',   '  }YVu:T}2C&uCN]b9`z2le4.@%NX;@aB-mw8ADf@[wEh,G+*f5z$Ehr~^E7RI2$');
define('NONCE_SALT',       '}5u[ZGVw80>J6=!W>L5SLJ`zB-7j_v[i*4!h>H$AnmZ@Q9BoW=)bu-w wm-L);3 ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
