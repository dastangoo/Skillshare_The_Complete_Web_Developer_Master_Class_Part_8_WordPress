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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'y%Vs)vS9@dgPbQ%ziqw+4~% 9*F)C&D Nqu!PG*xk!i>20W/Zn.|*n%gA(G^0H)c');
define('SECURE_AUTH_KEY',  'ks;99l}Q{(pti`7wjQy6FCc_8Y5][FRBKBZg[]Te)v&%w43oYj?n<0*&:x;,HhG_');
define('LOGGED_IN_KEY',    'e<tTwRJ*4X85y+6E@PoE@O._,Z]3*OiyiYrL~^=^7Z_%0:0@,6(6ubm-e.OH5Xf#');
define('NONCE_KEY',        '`lsar)ft.hC^bZ*V:Ll^py4amW4wrb9c;e$K,B_^{HXdUk9a/ups3:E /%JbG(;?');
define('AUTH_SALT',        'FiFn}#+/}aDoJzv(I#c%nfR .A?nvy(3NP:y^m{H6-p^h7 )ud;r~a3I_/q4}R#C');
define('SECURE_AUTH_SALT', 'RiejV9K.Am^DEG/|-:=i^&^DD/)*wG:E|+GU%g!FNiKT6|`Y^-] <}p1M2)gZNJ7');
define('LOGGED_IN_SALT',   '@$Hq1/(B-`+*v2dra:ctTC{;No*d~8<tRX7^Z?#@sC3OdqO;e= &4{@/w[@~N3:m');
define('NONCE_SALT',       'UQz-Vim)3#U5unPY{.kZ[F_46qtnZKT$vxUe&Y6Vy&iNcRWR+aB=VY_iB+u)]Jy;');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
