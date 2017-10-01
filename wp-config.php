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
define('DB_NAME', 'acer_proba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password deki25*/
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
define('AUTH_KEY', 'tL5lIaM^zZT_kxZrIW]RsY55GKCpKs&!*n! $seqF<}p<b3l$%nTRxZV_y9D@Sm|');
define('SECURE_AUTH_KEY', '7Ti&hqTn[cK_oV.IQPJS&,^Lk_-9x#M&:`+_reZ|hz4)cRQg`Ab*%KluPm#K@0~h');
define('LOGGED_IN_KEY', 's*7W>l>f/|^|CM]ZBR};$$)%8232:JUnUUv(=gP:umy2FN9p0&1lkt)3y!+q17`}');
define('NONCE_KEY', '[H_;3oHLchQJ4t3y%Ri:n:KR aKlbV2E#/>m:(,*g>.K&q`Xyc[G`}dpw2Q$Y-0M');
define('AUTH_SALT', '~z>I^ecaX|>y%D-PL}$*eBUsL_(+qHx]c&(>tcEHFuP !*axMm[;LmPY=-$nT<Fh');
define('SECURE_AUTH_SALT', '2j?`Dwr0(2U!Brt=]t-pck,hrcZ({2/%Yk:97,m7l:9mUwCrY-+Mgc:y7+(ob4pC');
define('LOGGED_IN_SALT', 'DC1$;`E(}}^Fo3C%6a|`_s_6y5V}jP,BQ3>en~L<Uqd!*lLzN@/SQ/>WTW<gbvb+');
define('NONCE_SALT', '5ET:gQq.lA8JI:c1D8G(~)45NtzPS@PCDe?^dQ9Fj*%ZA(sr;O/+:} o/3DpzA_^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
