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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'databaseDB0k3nk');

/** MySQL database username */
define('DB_USER', 'databaseDB0k3nk');

/** MySQL database password */
define('DB_PASSWORD', 'D8jrobvpEe');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FM3,E{yfvgN7VF0!F0zj,zncNdN8[G0!s0!o|vgRhSC:K5|w4|-kVwhO8O95_xl:');
define('SECURE_AUTH_KEY',  'z-kZNodRG4dRG4|C0!sgthWKlaSG5[SG8:_w1|-tiWLDeWL92#OH5:_x1#+thWqeX');
define('LOGGED_IN_KEY',    '>}v}@kUOC:-1|sd|wg:1_w1#-pdS-pdSKlZOD1#92#+p]*tiWLthWKDeSH5]~2<+q');
define('NONCE_KEY',        'ccRC0N8[z8>@rg!vkYNBZOC1|G5:!w-odVwkdRK8SK9:#-5:_wpd|-shVKpdSK9:L');
define('AUTH_SALT',        ']p#-pT+5#xe+maL8|-o[~shVKsgVJCdRG4[5[-lZpdSGpdSG8:OC1#-;_xtiWPDle');
define('SECURE_AUTH_SALT', 'HPD2#+D2#xl]*tiWLeTLA;PE2<+q6]*ti.xLfTMA<I7{,yn<$uiX$qfTMA7},zn');
define('LOGGED_IN_SALT',   'FYJ7}NB0,z}!wkZ-odRG4cRF4}JC0|zo!wlZOpdSG5:RK8:!C1|~sh-pdSGhWK9:W');
define('NONCE_SALT',       'P]+6{*ui]*tiWxmaPH6QE3<$7{^ujb.ymbPqfTMAI7{,yn>$rfU$rfXMAbQE3<B0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
