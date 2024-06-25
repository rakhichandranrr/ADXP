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
define( 'DB_NAME', 'adxpcons_live_upgraded' );

/** Database username */
define( 'DB_USER', 'adxpcons_liveusr' );

/** Database password */
define( 'DB_PASSWORD', 'D2~*FH25gu.O' );

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
define( 'AUTH_KEY',         'x3R?Y:;= OY80S92^e^~2OG)i)TV@hdZ;OV^l/XJwHqc`Vf!?zxKZHWSfVSKp_&!' );
define( 'SECURE_AUTH_KEY',  'Pfrm++fw*1M[c-!=G*i(N5=Ghb-]ldv&y+$%Et43j92ONN*,753UMO%@9Pg7@nrG' );
define( 'LOGGED_IN_KEY',    '1@ kWy95WtHXUQJV*^6<yfVTiIN2BJ1PP{cnwyjrzJfB4E`caH>nY|4r%N@Uz8iM' );
define( 'NONCE_KEY',        'XZ:XCJp uc-(@mS?$@}|Ok65?vq;.eI/k`pHj+3Sk0trlL,NAWdV2z61}wwBVwWW' );
define( 'AUTH_SALT',        ';NHPD4y_s6G|1~ bT kQr}Cos:AIGYpJe_j%qiW=lPuyW.AygOa(wWzjy$=>REl{' );
define( 'SECURE_AUTH_SALT', 'ftnIwG}mq<&T5f}#>G.vl4UuOm1ng0(9|xFtgvX?D#X5:;R+pLtqwNi%wGMai/%S' );
define( 'LOGGED_IN_SALT',   'todvQ;<,:V3=JZ4$M=bz2UAYnWq.VFhu7u5`1sSJ$K3@ ciCE@@R%sruzb&4gx9#' );
define( 'NONCE_SALT',       'h2Zzk(gkP})Xu(5_s2~F>V=Ncd:OeC3`q:Dopw?gp<}hP)nX.fay*[]^Hl!q$Wt~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'adxp_';

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
ini_set('display_errors','off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
