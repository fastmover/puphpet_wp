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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '-.OF{w`UV_pZsuByk1miGs6]+QDgs45[y_yS%kJ-(hyr[K_|[i_88gBr/woFC0:I');
define('SECURE_AUTH_KEY',  'ZI]R+K%q3y(y|KM}%6l)V@0?96+|_BRC5IvdTT9`]P.RBBN_mo{URf+#<8v_9e8|');
define('LOGGED_IN_KEY',    'P|b+-}Ltx2rPSLAJgm@hb1y+!+VmH*0!M}$X:r@k!%NnFQ6=!|U~^kGb*xk:+c9J');
define('NONCE_KEY',        'ybk7/zWU+^-&3/dPP)&p,~VvTHQn9$ZJmY4hN6WfEbpdh?,<Se+Xs`(XtXsP9zI&');
define('AUTH_SALT',        '2ptx4F`[u[P14`  CT.0,%kmP|1I9qo*QJrfUgWON+y(30E.Rumj+$Sr{Z|^K1%<');
define('SECURE_AUTH_SALT', 'Uj,|J_Sr|+;,!=W- 71@Sk#BG%<V<G4{4qw=.{g2;%5+[{yj]D!AgR|D-l<V)|YZ');
define('LOGGED_IN_SALT',   'g?h-BW+-4sPurP}SniJeX?]DL5Q{FwO<|yI7f??Ch~rOn3;J_y|Z{j?/LV@jh=TK');
define('NONCE_SALT',       'HDV-7*cp3/P`4.8+@JN--}v ,Y%9K-x[!Z4hzo)4Qk/XS-GJr6%XB0}Wq?s`X{M ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
