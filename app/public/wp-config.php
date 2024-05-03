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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/mattkim/Local Sites/team-tech/app/public/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^LJechU_21xx3_YPwJiB f/Q53yj,sd~x1diA3~82k_>/1g.~H9E=3S4ann8K)=(' );
define( 'SECURE_AUTH_KEY',   'I(umk::oBQoi~W]D8-:WP~`e)a.d!d6Y0?Myai3L=vx=>/1$}R-Z4q!V5?UCk_Uk' );
define( 'LOGGED_IN_KEY',     'q}F(&z$U1.XX(i2@g$g6aF=H ~sdJV0YLGK;ExqoS?^=dPSvQ#c9?L,1M}?|$n&!' );
define( 'NONCE_KEY',         't{wMW]mMXqF0!`G^#zBd,6-r.u xchA9?U2YLVHAp:kkyVC?3S}^4=TzI8^CEP[H' );
define( 'AUTH_SALT',         'P):=eW-IHm6/_Ia u=#4PHuh|z/{^sjP(3(]%u /_r_|IftLZ4(WE65uUo%01%,f' );
define( 'SECURE_AUTH_SALT',  '2ND$c/|kPJ#m>HN7!wq+fs6tXhR2uZAA|%r{hM*F)EoDy|qI6,yyUHmj~|D*(95B' );
define( 'LOGGED_IN_SALT',    'k*n%uyDO~woT:tC8ODk.i}MCym|0IAj=j7x@t[$_u^UqF5|}_|Cy:.B7,@qir=SL' );
define( 'NONCE_SALT',        'm?gRAJZDm(_)FB*<j=I)jYs0&8Kb&sr5NK0XS-uy]4]aNv,G]+EKvp e<ZTbo&b`' );
define( 'WP_CACHE_KEY_SALT', '~__qiU->?#FV%>p~b};2gvwL!g:.)?%Oen=:1T~TxbDta!/_}),7MH^]~yx,BHwF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
