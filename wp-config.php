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
define( 'DB_NAME', 'wp_practice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2#^JA}F.{0|3;r k@7|(:>:L~z}r(g_])=S-O0<}dbRE^?3IBC$|qp8#- BO^3WB' );
define( 'SECURE_AUTH_KEY',  'k[I&M6.T/0Sl@?[(A^Zm`jF]&K5:}@wi[&Bu?|@~HP0|QTS,9lP^{7~UP4040Qmf' );
define( 'LOGGED_IN_KEY',    ':lpVgw7<9$kbIfemz0]f>C2cv({mZ&Ik+o<4JKK>Dm3Ovunz:5_oNInanZk1gc?+' );
define( 'NONCE_KEY',        '?w[Ra%V/@7#fhNLkW&HAWGl:_Q3WPdy^9Bl(kQXR,,vsRVTJtj0EGEt,C7?Kh!Oh' );
define( 'AUTH_SALT',        'xM;p;eA*u6Q.&u,+Auhv2$a.$e6t?zC6xL?Z$:3.&|[hu(-MXE8:=lR^Dg3a!z]|' );
define( 'SECURE_AUTH_SALT', '@r/.;*B75|jh|z}.4(w`3h8kKY-M[RQmLb)17!UZW@M`s~X^~!jT(BYpPZOGdd&C' );
define( 'LOGGED_IN_SALT',   'K%bw8zo|E,,.|S$v$&Mh{{;9*yQNQZmnoEgJvb00?/%e{( 8-oba&YcgP.30+` R' );
define( 'NONCE_SALT',       '0jvkFwcSc<{y]ZPY({3l]77]O@bs=&HxCh]segbFXR9b4#;Hw:zn^]x:41;G!&FR' );

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
