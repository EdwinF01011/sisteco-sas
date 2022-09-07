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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sistecoBD' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Fo2.B%XPfJRXeB4TyO?W1vRaRuY(>&tEb9;)62-W2<9XGEeK=d1HE=0S3Qu~~>v ' );
define( 'SECURE_AUTH_KEY',  '71a6,d]1+=1r#<8(>-]?~lzVhxpId.LTk~cN@#3F<kk|[Fmr`,,D84z:=dI)ub*H' );
define( 'LOGGED_IN_KEY',    '.5Vbdyr=bw1KN0!4{%Cc-!QW/U3Al|9(_!iR&zlFILac=mHQSjK^!d@E+:z!:]/*' );
define( 'NONCE_KEY',        '97AIXIXz_FDqgJ]SLs+}.51%:py)>=J<a0>E 9*B1R&CJ~V7/_0d+]Nt9=$C/fD.' );
define( 'AUTH_SALT',        '?:s;S^StM:iU63v@i{uEKEgLvi^HU)@UjE%|4h5)8G03La~mzTcA]|{GDUyKBeri' );
define( 'SECURE_AUTH_SALT', 'XNd+AW(ekwC{@^mvkX%HwvSCSZ(xcFuTKtF`SHxM~s*83>%OY]o|4L$X@u jn0vH' );
define( 'LOGGED_IN_SALT',   'cva3cUcF%>rY5D~+~V(DDI &_]%e% FfffwYT09sLGKej@KI1JhnZ4Q}AYQpA5)f' );
define( 'NONCE_SALT',       '/Jcn<?dDV[fyH<o2f*&^UCRn&,@>-z kRnb}B@ K-1gn9ALRiA<)U6U4je`A(*xn' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
