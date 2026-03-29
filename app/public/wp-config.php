<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'AU*edf9ixRhlRcnd~N.0+w@T~:!~?iI|eI=7wqSk5`Uj+Qt0vR1k=3]>j6H&Fo&u' );
define( 'SECURE_AUTH_KEY',   'SJ#%V3@1 e__~uK4x_W9R]*me 6;}aq(gH_m.c6[LUr}[$l6{4P$KQzXvB.G)4J1' );
define( 'LOGGED_IN_KEY',     'z6vZ=[Y~]QC}]pYC:gEJJj6}=-JMgrE`I|z 2zC;*;q#K*9nRcJYF:q&HP$`h-h{' );
define( 'NONCE_KEY',         'qU:5v]6b>G2*3dZCQ]t!&(jafR@p9NBpJ7L3ta|2tq5r/J=$dR.87ReO;YZ7x-{a' );
define( 'AUTH_SALT',         'Ytr(>7%n~*E(1&]S_=*,o=<V[xj+4EN-d2g1c(KMv5~rP?IPo4I]~bD(#VSQRF-@' );
define( 'SECURE_AUTH_SALT',  '%A{bH}FAiBgZ&xs;RR)X,7r8W0<+uWLSTQc+#RP60JD96_y%a$):&E9B}!_<~;e4' );
define( 'LOGGED_IN_SALT',    'y6$@5TGtP(ZNQ5J@[Pwya&[bmk&E?;*|cpeE}!ux]ng1MU;i%7cD;{W$_S+Vn`iC' );
define( 'NONCE_SALT',        'j,AUK6>,TiyjV6PX2G3y`oh^ZtN%uu2c&H{qHy=}Qp$ZjM->>h9jus@xT2,i_4e(' );
define( 'WP_CACHE_KEY_SALT', '$#`~UxW^#HL$L|JUiM(z0o% V]{#TcJOQl/&c$-?8v|/GVj|=z$=;%0_e&T?.=Q}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
