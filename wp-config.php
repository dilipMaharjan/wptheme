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
define('DB_NAME', 'wptheme');

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
define('AUTH_KEY',         'CFSSX9Tmi)?B{sj5V>,%l-qg<E5yBoy-W5^J%{-(g~)~l*+!:(~P8{~%^8jL3wk~');
define('SECURE_AUTH_KEY',  '6DU=d<?]>{?F6R{t=*8W+0oFVO_Twy:H?AHbTL}=Jip4eaVgcsAm[t40u6d6p? )');
define('LOGGED_IN_KEY',    'vd%4JiQE2/*>wfGC*XX29KIH4jcxQ/}gi(8c,O&u(g@lJnryVnF3TMx}lDCe%+Y|');
define('NONCE_KEY',        ';s7YO_cIi},)r&zyKvt,v!^ASJ_[YXv~+DNnK^R)tP6[BDA[kgHvPAY^*Ngib:ss');
define('AUTH_SALT',        'dy}!1q~)25UNL17@HOrSM^/`5g)JA!|9(HfdR-qc7^_vy7UnL;(`v4*LbFv;>7E<');
define('SECURE_AUTH_SALT', '%ACGVFFFpq/V:nwl*q317o?l/zS/dEo($t>Gl=rDgh8u{Xk{Ec1vF6xfGtm,@v`E');
define('LOGGED_IN_SALT',   '+i4pCf+M@<Ag~v[ScQ7qq+D6rZ>,1t{IFlZ>s/dD~w(]`l9_G.zpqnVZ*0`JksDi');
define('NONCE_SALT',       'rOCB I{Tx&K]7u%)<v;~X8?4Z.C2V xedKb<.v[ DviYr9HYk:7a<|NY~;ruT)RN');

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
