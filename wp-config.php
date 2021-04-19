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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '~LI1WW7dNkL]T_9W(PI[_dT@*Vfc5f%ngs)I~in:!ld[?=fb@-F+/&7a,VyCkBx<' );
define( 'SECURE_AUTH_KEY',  'W<ymK6Qcjb;aMO,-fQ%r8Ez]_-(u;F9x$CEzS :Y=!9|ZO2..c$0z.v]n}PO2;/Q' );
define( 'LOGGED_IN_KEY',    'ezU]64?8cYzJrI?W[-8*L;vz!hJtBYtIvD;yT]Sn~;Qj6Ko[YbBjF*jk)Uth3TW3' );
define( 'NONCE_KEY',        'Pn@s_061#JQCH:Xyfd@mgr?}>Eix~_= z4>; Qqu uS@Jkn}x+6XUt#0Sr),yrYK' );
define( 'AUTH_SALT',        'mly|#Pk/}.:Q/c(1?cE4}tYlg^WCn1J=sp<|g4jmiE?f|BA~j<N7b7);_D;4N=4,' );
define( 'SECURE_AUTH_SALT', '/l?t^cqV09U-+k.qn@+X:F!d:{.+Eo5,3$aw5X#BszpqB1[I{y?yY3W i`m](O}N' );
define( 'LOGGED_IN_SALT',   'zpYqcoil`]v+sbbx(%*ZFwyQYC#{n&.N4#:B<(_.i;q?G{TF7XB}oiq2Ar%0m8l.' );
define( 'NONCE_SALT',       'X.50Na1mjt_YAeMAS?).`,SN[-?u{11f@h} +~TES~!KA0Ny5jQ=TQ9+VUl,C]EX' );

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
