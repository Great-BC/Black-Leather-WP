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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

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
define( 'AUTH_KEY',          '__GY$hEDKCBlNZS6~B@jp~b/I;4?[x5W&%O/$<DyXZQQmvV(!`s[vztr&M*30r8v' );
define( 'SECURE_AUTH_KEY',   '35Rt$29UrR7MqJK344Rr}QoEtlPx$?YIwgH&n+I5yA i.S^K^O%#q;`3+u2(edY5' );
define( 'LOGGED_IN_KEY',     'mRt81}wZ$KW]3*rl+pTr]YTeyXxWj@Oi*3zB<^p_GJj`iFeQ[+A,Xb8;x/<pcHvk' );
define( 'NONCE_KEY',         'b3DoTZUAShd(q3^D?%<&-*eiPV,;m}[4wKHs{qnYS+>m:(ty{rNS.*fgjYSbzat)' );
define( 'AUTH_SALT',         ',[USjRd<d:|<(G`(|BN_8n8`kc]zc.lH(cPfOurArRY=Ie1J8pZjSHms]2yE@#!F' );
define( 'SECURE_AUTH_SALT',  '>)25*Pq]:^$mRvQycj%};8K_,-;L3w2iwvM]PO0dcf3ERF@s(1/k1mKOwjA:3bw$' );
define( 'LOGGED_IN_SALT',    '+)6sx;$NvyyxiA|mF&L8CC79vO}17)EQYd,sqbUVm-KiV5A,r _cp63;Z-H%Tm O' );
define( 'NONCE_SALT',        ';4;p_Mp?5Ev)+RJO`WO_Pqhgl,BMj_]h{3Kxldq<f`U>>+qL&0giu.N:$sU3jm-]' );
define( 'WP_CACHE_KEY_SALT', '13#}GT7Ax3+0UQhJcB^q?M|!e)BfPmwN!|Cvsx2{Kr<UgJ^;YX@z0Al{vS`f!SBq' );


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
