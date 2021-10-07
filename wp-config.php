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
define( 'DB_NAME', 'platzi-gift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'u0a~fT.pE-_h~ZnP&~|_&;M*7N Z+m-0+QHmj(2lnobXw|t},3UU$!)R+XmM3}NA');
define('SECURE_AUTH_KEY',  '65%bbQ*{!/)+fd4m}Q9b[6EP%0OTF-ADH_EBmnNMwj pKKF;5|NCE0gUrQbEfNmf');
define('LOGGED_IN_KEY',    ')D=$h|=uqq]zSFDx:aw)^c9`Xc1-g?vhn*oAUc2~~1-Q_4%%+@k8WU88IMM|VKmJ');
define('NONCE_KEY',        '<?]n9t<7GvrT7zM4WObBS{e8 M_Y^`faUdF5kF>MjUP0|]]Qphl4^0+TfrV.![<^');
define('AUTH_SALT',        '0&ROu%R><6pgt.ed789MX:]T+}#8sZk*ib:RI{(]]J}^}Rp`$:uKD$):0r5m,Mkg');
define('SECURE_AUTH_SALT', '0aqDq0g+B]2=<6t{$ZEi(]LjbT+:.@Z_v_WxART&ldqEm|c);=w79M{(Madv3a*:');
define('LOGGED_IN_SALT',   '%q^PjzGmDHhc+-?!KC6%|fJzv:Ft3V,m?m*nBNI.n(kT.rGatytwqng$Seo(?5z7');
define('NONCE_SALT',       'ly)A@@4f0O{^3Z,~u90+kW-M+Cs<5fb)05g_uZnB,{)Yy-vBEc+Z{3-N)CTZ{>dU');

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
