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
define( 'DB_NAME', 'sixrio' );

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
define( 'AUTH_KEY',         '#2n#K.?ajgyPCpK<TMXF^`^I6ead#997[!vV,0Mc9Ih(ewXFMe =z{:<5!ZPb6pP' );
define( 'SECURE_AUTH_KEY',  'cer~j=OQ(,eyr]X*b_[D}L?oK1jzoV i&7MN+M~W<%A96+=IZ<Hg~/t6Yc%?B#2y' );
define( 'LOGGED_IN_KEY',    '])|g%QT)kvGI+Dk1MYe-jJPrAQur19qi9O&!ANI/)J(q=+m  uE6hx5;k/MB`@U8' );
define( 'NONCE_KEY',        '5>h^*7Qn1NClh?jEvU]ADzfEQ5XxFP#31f]jMcaQVkA)+y5_}Drd!&TR-^u028{*' );
define( 'AUTH_SALT',        ',C;c]mT5{>0Ac?(}Cfr]<3jH!wZd,F4SEbs$5%]!E_[O(@Slxvu3y/|qDA~XmoR5' );
define( 'SECURE_AUTH_SALT', 'y^t?h&uR|Z4gY<3F^1(KipnU~2oQ-|pwnL(Zh*8@ qwQ:Z}Vuzmf4%N%=gnNWpxT' );
define( 'LOGGED_IN_SALT',   'N*Tc:* wl+ht=9*92_^D.MjrzRso#Id6.h(H1#0DZ<OaZTOM,&4}iau[7;NA7lU*' );
define( 'NONCE_SALT',       'Ski[WVML#=H!.^46#xTc|jny>Z|?sMWA!I>FE5Yf3a^<Q#N=V4aDtaTG:#mf!GY7' );

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
