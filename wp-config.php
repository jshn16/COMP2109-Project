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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myWebsite' );

/** Database username */
define( 'DB_USER', 'jashannoor2001@gmail.com' );

/** Database password */
define( 'DB_PASSWORD', 'Jashan@5677' );

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
define( 'AUTH_KEY',         '/&b_V<@DSuLSu0%ct_NF9}1`,L}FsO>NW:WFoSoMWJ`)C09d4Bd.>aa(_{_pB*N,' );
define( 'SECURE_AUTH_KEY',  '?vcjXi>9[`xzZ;)Pkp=LM/S%|#b8fi0pV<ut(V7E)2)ApD(eUg9.C{$gQO=*O}`r' );
define( 'LOGGED_IN_KEY',    '*91!qOb<(u8%[$pCm(h<Y#H#&C{;M;uCXFc}0|C&Z|iuU1kh_-%>}?.qzD{!cYBW' );
define( 'NONCE_KEY',        'E*K1J-!yY3 {x7B-28{Qshs@RJULB!VPSP{j&T@eG`DWf]ozwz($sG/2Esn)cjt[' );
define( 'AUTH_SALT',        '8n KU>=2.lQfod@v]W5>yR=I&Jp4pGuVwsMy)x~J,j`IrvFK|1.o%R*O]*Vi/Q=m' );
define( 'SECURE_AUTH_SALT', 'UfRKsnv Paa^Zk2*WtDosuDrTH=8v)QG=rS8M`2#qa>u =?*V:!y @mH,2k@&!|A' );
define( 'LOGGED_IN_SALT',   'Qb&V}S$O^ygPz&uvD3<lS^r6+}lG)e ?opC*}oC)FfhcA$e#Uz3[=MjrJIug-|z3' );
define( 'NONCE_SALT',       'bev}p82F,>A|~.F8_sjsq};Q yYI}0`:S1JAK<Eh;,D+}<:n9U~Gy2;wTC!Onf+&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
