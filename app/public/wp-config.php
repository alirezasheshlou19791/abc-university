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
define( 'AUTH_KEY',          'm:?UcOw2JHiTLu+KLQ4sB}l(Sz8P1|}$,Cs(w#Qqr^T|>]m.Wea*;rS_@^rWhb|s' );
define( 'SECURE_AUTH_KEY',   '{mPY$gAXol@xJfxs]{?%*1*:janfyXvzz5eps+McOSq4.f:ALhS?Dguen{9.#y,c' );
define( 'LOGGED_IN_KEY',     't7RQA!b^#3u=iw.D~!C[{Qg u%eI]<SEO./{VtATC?v#wfIlC/@[#62ToUg^{LcU' );
define( 'NONCE_KEY',         '=gZ#6%<;q-kCL{9+(2D]|Pi?-L4O#aC9lW*a(_6Rmja@T7c/7([n$],cv1%]hij]' );
define( 'AUTH_SALT',         '>Y^bCP[8P<ImL}nm*?-dLAy<L,rEB@!,Ulh3/anZaj~{U/Ob|3bLZ7KpT}}>#f^r' );
define( 'SECURE_AUTH_SALT',  'Q&[*@HK^[;Cm75~7q[vq[k92o3ReI`%g#Do>7kG+>UfH:m*]^>hnXN%S)Fhp|Y^{' );
define( 'LOGGED_IN_SALT',    'Kw 8Ne-|cRj-)j.a$,x1e<P-6qLvBzoXLv>6@*^E_TpuyTbbg)UmEazyuW#FFF58' );
define( 'NONCE_SALT',        '2H%RqMjk ~z0!c&g#=l:8E.G+@m{9Sdjl(UEfHH&*c$XoO^2,V4>M0$ZWM<NbB|L' );
define( 'WP_CACHE_KEY_SALT', '0y{#QAY1Mqn/EnN<l05HCu(&M}.KeWkEKD+wWME*)=4#V4Efp[fDgN`(M,2/X]Xf' );


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
