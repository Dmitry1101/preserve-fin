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
define('DB_NAME', 'belugadev_preserve');

/** MySQL database username */
define('DB_USER', 'belugadev_dmitr');

/** MySQL database password */
define('DB_PASSWORD', 'pGgJ4L15bp');

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
define('AUTH_KEY',         ']>h^dqM@$ghFb>A,df!m%aMbvV <<15Oz?/=`cZb.[p4t&t^, 6CuDN*MIf45Dl7');
define('SECURE_AUTH_KEY',  '}iXSA5g_`niFYA_eLZ2~:^Yw;k}t0m>yic)x5OwSzp[pV/3t2v/#(NI/KKtrV1(*');
define('LOGGED_IN_KEY',    'dPeR/kAff];QvB2U7A+{KJm#= [R:o(>Rm?r-E26jDO+G_b8DxmA7paOfN&*h_l}');
define('NONCE_KEY',        'P`BbO;W9{o`+6qE$B_7OO^cws;HI([>.M!Jp;I@qnW4Phf#u!s%oRH,)G(tooOj$');
define('AUTH_SALT',        'cAj2Gu)vN<yqh#u<PH]ia#Y;BK7cQ~+H;4=`]3V#4d|-MS(Z2&{crj566j-xxwk@');
define('SECURE_AUTH_SALT', 'l%Wz>tP}Ci>K+nuDd~u4V%JSy$Im92XZGpDK>b!2pfQQ]GJ5hXn1&].53jg05q=U');
define('LOGGED_IN_SALT',   'j^4bA&j0{Jy][lAxzK5mZ&[w<._jeoEXW0+)`>&(bq57;km$$~xyPR$<(1- k^Qd');
define('NONCE_SALT',       'B}`aHu2|!AkasCtc-%84$A)@2 |8,nGsw&(*jAqQRu*ELiX_x&_7NR;8m2^n#jl}');

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
