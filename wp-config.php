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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcsvan2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NAulmm?48-nw4HE|^7<@1m[aF .k3j-f-T8lu.zE|.``AMzpP-!d0Jeu} rkS=9D');
define('SECURE_AUTH_KEY',  '|81LN@=|EL1-&wF+>Sq?KZRA89bLB_0DS1rr5,t?|5g#n>_6Fb|19jM[`nMX,37x');
define('LOGGED_IN_KEY',    'i{3#^`+>AOfx6~`zgu]`~zAM.DxbK$Q-iyFpjM> q,=(zWc}%;Fi]cm/A{PlJLz=');
define('NONCE_KEY',        '-L2E+WfugV,c+y Y`@)Ey@#<AlwU<]f8D~He)lD~<wVH8dt_2*P+1!&sGFSb|-qG');
define('AUTH_SALT',        'E~tx!S94[eF_^UlYE=;_RcxdKV?a-m(z]b&o+WCEk0 MP%),+%X(Q@W=+5#o;{Ge');
define('SECURE_AUTH_SALT', '+%`/JtHW+reM!yWT=Mdwnd6+&.Z8zC(]XR2^E68Q-6$+hq0]h<u(LLY{4^(V89=p');
define('LOGGED_IN_SALT',   'l*M~]ftPNF.]Y#(mhfR[ QdE7,: ?`Itq ?d2 g^{Kz,u3Tes6%?R`iP@qyDmrYl');
define('NONCE_SALT',       'yi8Z,^anWn(;me-qcW +4kJf%Rq6=%- Mt)qyARL m#gKLeIk|LQ)+ck.:jiAw|D');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_MEMORY_LIMIT', '256M');
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
