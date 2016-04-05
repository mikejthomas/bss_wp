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
define('DB_NAME', 'bitspacestudios_com_1');

/** MySQL database username */
define('DB_USER', 'bjbvnuq2');

/** MySQL database password */
define('DB_PASSWORD', 'eG*fY6Ki');

/** MySQL hostname */
define('DB_HOST', 'mysql.bitspacestudios.com');

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
define('AUTH_KEY',         '6kmuX^_!(tg^BIsu$r:6)aLw_0E/6(#OMztGHY82+YtU6eMIyHIJ1GPnRcK~8s/t');
define('SECURE_AUTH_KEY',  '7a8@0t9gYnF|@*9TtuRicD6zDNKT3qS%tn:/sk9|jAG/PPupYp;`:*EUOi!#t680');
define('LOGGED_IN_KEY',    'cLGjNPKnei)l0`|(mqA%0K0ww??Ix94PSL%o"q_F(&:sNQIQTNhvsbryi7n"cdzO');
define('NONCE_KEY',        'tM2_w?y/E9UwtLLXap5#47NtckR&NWe7va3%LKMQZfbN0N+|*5qyI#%(RErH*E!2');
define('AUTH_SALT',        ';Lfhr3EinWvg+t!h:Ic"?o&A_$Y"CPPB:$~g#zN#DVi4VUC^chd;MwH|V(f/^QS8');
define('SECURE_AUTH_SALT', 'C#VH*tyi@_$T$j|vW)xy?P#9zWK7u;efd:w6ey|@Z?G|qdKTHfv!&Cc;*p*H!lAT');
define('LOGGED_IN_SALT',   '%d$j_@/~EPz_ZLV/"j01jliS6i5Qwpf1CwXvX`C30(CM1?H9o:*m$G@p)QT|ho%q');
define('NONCE_SALT',       'Vaaey"O2(DSYH/7z21Vm`3uE79UHjj/7m75QK;#_2)OXWk%)onG+!ic|de2If2#1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wrft59_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

