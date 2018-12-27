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
define('DB_NAME', 'iqbook');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'lp~4chl{}G7G>|N.M7^g;fP0Db)0YQrfvUMF[M~EalFG[R-*mg^$0!/!TBfR9+D3');
define('SECURE_AUTH_KEY',  'q(kQ6%(Gf-0mXhtr*MLgTb`<DTI_:Q(.lt7&E3PWST{Vs^bgS;62qny=LWy<l3YH');
define('LOGGED_IN_KEY',    'R7I[f[rPDN^tUH_;xRXr=eV}()C(<@Sy;/l(R8(wuYj/O>^g,7^vy9W?p$fy7.;,');
define('NONCE_KEY',        'Mk+g$_xb*c+%&[bW4v[?#ifvyFSc6w/JrdMy+o=G.:ij:0r^{bd&LFCGFA/6hb?[');
define('AUTH_SALT',        'LvF>NZQ.yS4FrF6_*/%9C(fs%2G%pC=7yvdyi}z[be^9+9=MBUtIk>/D?%(%vg#y');
define('SECURE_AUTH_SALT', 'jM-exu(/;<>S)cq?^6*[.Q{p?>e4+7WW%H^EDF`$tbjLS@a@*v$x8F>hR,sUtD m');
define('LOGGED_IN_SALT',   'sdB.~}sxk!Ivx.1(<|Z[M#PM_EzuoL/7^@-yL_Q]<Dl}$p=lb /ouaY%DMcp7YO.');
define('NONCE_SALT',       '|GCYcg1ai AT.MnY}=7Hf(Qm5^CU76,jL*[ El>FTyR74AW.JGtjd`95)(8Z/BYG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iqb_';

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
