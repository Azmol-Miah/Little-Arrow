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
define('DB_NAME', 'littlearrow_wp');

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
define('AUTH_KEY',         'SZS!vgmxT&)l?pObdZTu:O4p=zl}{I0frWf;*SrV%]].0zwu9e}~V9:CJeL]S7m/');
define('SECURE_AUTH_KEY',  'c<N~8]qC-:/]Y0r%/F_KO)D^oGG1SL2Bo5U-X&b@K+o1Np}m1=NhLaC`w#R.;8Hu');
define('LOGGED_IN_KEY',    'wqOh,,fuU,@:c1C.b9u}; ~GAiZjd<k_l2y0G?I{^VGe})H9tSxvPKuv#og$LE}3');
define('NONCE_KEY',        'dgza]V e.c`>xqP_vf5g9N$tWQfK+>VvTZ{{_E~~/5*l@ #[T4&0an6~=:yk]I+;');
define('AUTH_SALT',        '93E3uNf@^et%)fn{Iz)ykGZ;pg+Y={B1z1v_V-wHMu`SYA2+Bq005#4*[sC5]+:&');
define('SECURE_AUTH_SALT', 'f96Hzu$I{]i@0BwY%BR8eckL~a= ;>U{?/1eSguuu^B Sb0K`7CV:x=1bpzpKT#m');
define('LOGGED_IN_SALT',   '|%*3<TL?? Moo.S`X2_{6{F_<( Y=9Ja1/2I9y9hypF_B~/~`j,jt<0.KP@k$d1A');
define('NONCE_SALT',       'aEa)B.hA9PNFgWmPE.X3Hd$},Q{Plg`##*mCU|=ub!KtD3`I=E>BpE;yd=?^Hn ,');

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
