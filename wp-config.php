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
define('DB_NAME', 'kenafrica');

/** MySQL database username */
define('DB_USER', 'admin9972');

/** MySQL database password */
define('DB_PASSWORD', '7&9&UJM(j273nt,jW$@F4p^>9}784]');

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
define('AUTH_KEY', '8EgmD4}u>/iI`+r64R^.~BE{)g9_`J-Fehx>]e?ntlXS}LrL+D$u+!V yAH=U9sW');
define('SECURE_AUTH_KEY', '3dxp+A>SYhr}&U9mLU*86KiiI1xBnBapi|jgeb07kS@TF`6W9m0rCT;uNowtu2la');
define('LOGGED_IN_KEY', 'VJ&v(cEn[VS%Jg/oRqg1hb+RrYU,q[YBG711u/h{7;w$a9|v@/q2Hq_oG+6?;7Wb');
define('NONCE_KEY', '8-#/d|Y?.[2BccC}*i!R)v`d?hPD`?+l:5B0[;I(*k/*Y3QHMt13w+hf.~*=/T.L');
define('AUTH_SALT', '7fP.wXcDQn*qu}Hg_]_I7O%G/7I!ul_t101V]Nd>Dy|Y_-)<}#65~)ol%if%j^d@');
define('SECURE_AUTH_SALT', 'Da|y=Czr?BL->>pzbr:~<6a9SUOKt?c`v4Ko35sr8JyhAzeW;]1>O,zdG=Y!U~{;');
define('LOGGED_IN_SALT', '[%Bz< ^/bBYuIgVg;hFSor3@qw<B:g-:5qWCfA]MV4cfqbVY%)o:{M@1kPiNO; R');
define('NONCE_SALT', 'ITnSJH59Z?kKIcU?KF9gyO1Nv< 4.e=!JUbo;i:TF:b/r;j qELHkNR%{G?hZF-3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ken_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**
 * FORCE SSL
 */
define('FORCE_SSL_ADMIN', true);
