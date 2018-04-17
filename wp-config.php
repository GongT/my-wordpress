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
define( 'WPCACHEHOME', '/data/wordpress/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost:/var/run/socket/mysqld/mysql.sock');

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
define('AUTH_KEY',         'iuP,Z:Qlu`uq$m^;2+P 1&-PR9%d!,,z$DwK2W$)N_ztI`nq*!y+hf:hLq/pz+d#');
define('SECURE_AUTH_KEY',  'AdVe7f|m1?da;XV4Wxc};0%H:?sLatb7z3H);wkI#bb9!)7U_:h9_--IaYb{h,F1');
define('LOGGED_IN_KEY',    '_)>,:G7Dz`tC}zy (bExVJq0B]:Q?Jo[%*GAWg!NMu[L>Ya`ytSFQO77 x$ow}lc');
define('NONCE_KEY',        'T67:78_o:@.~^1Ko#C;u%cwC aP)O2NL3PyNK^mt[po}VaBR!E~9 e:hQCv<6W]I');
define('AUTH_SALT',        's4sYSi9a!pZC=+(N[Sb53lH[_sNt)c@%Z!>_4al0q[>ygu.daLWj4MJ!s,8GmD7G');
define('SECURE_AUTH_SALT', 'u1?k2QNQu6,7KInNO(lB^A:FRypPr4u6Tx]6B)i8W9[bEVC(~2;/SJt?^2?AnMqm');
define('LOGGED_IN_SALT',   'EM{SpN#[1I:p+Ksw1Oo%c7`is+2WQJdkZ+C1^@Oq^l)yCTyOz5@b7#Pw;Tt}wR<y');
define('NONCE_SALT',       '.<[k{oq`NLQw@8*-e1Vb=!YolSZ%7(RiE_/m0B{O@4=8|w.$I89/ Ezn6jS#xcTD');

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
$debug = false;
define('WP_DEBUG', $debug);
define('SCRIPT_DEBUG', $debug);
define('WP_DEBUG_DISPLAY', $debug);
define('WP_CACHE', true);
define('FS_METHOD', 'direct');
define('RELOCATE', false);
define('FORCE_SSL_ADMIN', true);

define('WP_HOME','https://blog.service.gongt.me:59443');
define('WP_SITEURL','https://blog.service.gongt.me:59443');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
