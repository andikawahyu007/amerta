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
define( 'DB_NAME', 'amertadb' );

/** MySQL database username */
define( 'DB_USER', 'amerta' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Amerta20@)' );

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
define( 'AUTH_KEY',         'L#3{sU[7 %Cl=LXK*LdJg/(=_9R2zMCd5VdxP( s&#?_nxP?5Y:< Sm>~nlr{~H6' );
define( 'SECURE_AUTH_KEY',  'xG+@u/Pld8/6xoGdRfL{k^]|mK3ZM;}nPa@D?>ADgxGW~=vq[J(pM8!^)ka.F`r$' );
define( 'LOGGED_IN_KEY',    'j_c;ma>NBT@h;5AI~%-z];LJfRY_!$sz^Y0N%m.x@.e@7_@8@VzM<d!uVh#Cr?VI' );
define( 'NONCE_KEY',        'M_hA.R:$Mq:EIRS)w](rxPr,>tH3wrs}O^L|ARF?=$40szfNbqc==lsY(W,DK^g7' );
define( 'AUTH_SALT',        'B9W<`52`{4IXof&.([o-DxfZ0M4/atttAF6Uq.p6!ca!W{CP&<|a4%g*hFk}BelW' );
define( 'SECURE_AUTH_SALT', '%BQS#GXld%TAp~@WQwt(C*)(i<pw!$G<zW&R|Bte_xvS#oz+];0u6@.m(N6;=LSA' );
define( 'LOGGED_IN_SALT',   'A&E!=z@pX*c-&:gF#<(-4b9bJ<R7mIv1jyE&?]htY#{6HZZ2y)-@xv(Bbmhp!qy@' );
define( 'NONCE_SALT',       '1[ /@pk5J6F*Adr&r>;|G]aDaXtj:.&*7bsj[+EO0xBqEU547plE_`MDqpR]M6*r' );

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
