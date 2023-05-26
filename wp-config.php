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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cbst' );

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
define( 'AUTH_KEY',         'J?1; ]A5{^hxdnyu.at{n2I1wph~F)s1CN$C9k<E1W)=<rQFfoH$1P0&f7[;UutZ' );
define( 'SECURE_AUTH_KEY',  'sg?_|zg* wo[i!-o@,dcvKmk8r Gm (y_z.WN!z4b3XeV0,@16(_i>Q{VH&AUEJ<' );
define( 'LOGGED_IN_KEY',    'WNJ1K?uYAJq?] aF#$p!{`fW>R3-IEh0=gK3S=mliATuiZ9,IvML0>}9)^?CquUV' );
define( 'NONCE_KEY',        '#_^zad(BjhE=oW9G$F0QrouTVZnghZaoR9BW$E])/5;P(TSuDdH-#2(={tH,B[JM' );
define( 'AUTH_SALT',        'Y#H`#B}D35<N)I^OS[{N0+OUni40w*s1,LnTPbXDCh X{72V<$S=J(LqN4kalmC{' );
define( 'SECURE_AUTH_SALT', '_9n+IJ/xx*pSX=Mg+Seyjkz>.IjCa]!DP)kMal@N~Bu(kLv/19dx_:Q4j?dg((R$' );
define( 'LOGGED_IN_SALT',   'O|irL:Pi%M?vtvG{2GyjG]8<]YsR=}NWKKk`b9EueQOE0aPl*.PW S9Mx&(T3o-V' );
define( 'NONCE_SALT',       'rbA3}piK6fQiS+ebr7r8}6acR qkSD6YqWZK@Tk1gV4_V42;#]9(Dk<MmvrvjV>9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
