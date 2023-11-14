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
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         '&{[7WdAMBB(Yl%OgsejO,n24 zW}SlBR8YXrG~P5;v?L=)It$e]2;UyQ1fQ%ZkV7' );
define( 'SECURE_AUTH_KEY',  'GL!#HJ@m{(JOki1u&@!t0gcqq[P:eoNS?mp#TBX$~@~}NyF19j!Aux@FZfsb5l`C' );
define( 'LOGGED_IN_KEY',    'X<X>,`3foXcDoO*ve8S;9ufvy>,5^sCwY>)^s4RBG@n(0UXhX<]?=]D+af:&o8D=' );
define( 'NONCE_KEY',        ',Y]z`uMLl--Y<Jy0FJ9P/b>dgbR|%Z+C3agkO?GForg`PxlX`65rxn{SV<H4c3Cw' );
define( 'AUTH_SALT',        'x+enH#BM{BI9vyDkK*`3(sf>`;c<gHC%[%I47&$;rq7EJB|%r/e 0h^v4UK2i#{}' );
define( 'SECURE_AUTH_SALT', 'zz4}1ZP7%FM@8xgJ/t D:1zKywHvALP!Cc5/hoyEeq{K*!&4<7<F._8-a:|jT(hE' );
define( 'LOGGED_IN_SALT',   '$:Chv(dpT|Pm}NSjm@p~BiPcd8GU7q:]_y1rW?1GbiLq)vi/IevO32VKM.6~lHt,' );
define( 'NONCE_SALT',       'nb)!iv(.e:V?(G$V!Q&Q1XBp~6{u- t ||kl1adL5F*/-3i[W!RD$Qk!g>H_DKUO' );

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
