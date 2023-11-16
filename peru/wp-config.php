<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '' ); //Added by WP-Cache Manager
define('DB_NAME', 'meyzjcmc_ozadbpe');

/** MySQL database username */
define('DB_USER', 'meyzjcmc_ozadupe');

/** MySQL database password */
define('DB_PASSWORD', 'ozad2017.');

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
define('AUTH_KEY',         'g#>0cz9wsa<WHEbk>mnWO=%yQPhhB$$14,&yZT=0+MNtYe05^ZMI9e/9YIgYUkEi');
define('SECURE_AUTH_KEY',  'wY67YQ(#(*#svinoM.HCJ&{@gLzr^sxMa4*Aag<#F8)Xa06]5j}V,Tp7s3,ye1v<');
define('LOGGED_IN_KEY',    't4NqgH17] &<]Q8&YHy>@kB2%kU=U%Hw$$V.43FKCI7a0NJF8kV/YG)ev6{d1J*V');
define('NONCE_KEY',        'pss:Bh/K]W=h|!:j]!9P8(Rueq _j<K++Zf>.bH:)kWgu-}O#?J#+5EJ?wwazf0w');
define('AUTH_SALT',        'ie%MQ:GK)7NFo+_1y`I,F!yb)d%Y^c ?&g2Io0 G4WZKt$[&}>cRWn@pIWIV-OL7');
define('SECURE_AUTH_SALT', '?yCy!^wN*|BQ;!ht}J[5m;Zy:3nh0JO/sY&W9NQ#XLqonqTQ/:G};&4:I&x=l*&D');
define('LOGGED_IN_SALT',   'K+9r52dWI~!#V1OD)dhhR2ElDLiNH({$*y|uLBpwP vB9G8Q!y]K8GUEp*unjnYE');
define('NONCE_SALT',       ',:R*v.Cd,<QT*u+O;}rVrlnh!mH2h<9eQ_2r=OmTl_~<p0?[c.RPxAxrtFy7gZ?$');

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
