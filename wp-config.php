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
define( 'DB_NAME', 'hikkalazzo' );

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
define( 'AUTH_KEY',         '-?NPMcDBem=U0|6dFf%j;^xF>gi8hE_4Nj->raX`X@t!Akx4jSz$6Fx(F>|F09HI' );
define( 'SECURE_AUTH_KEY',  '!}rk0V?_-E~GppWQV6wBYyAW/H0bl:ND*av|5x`M0L/q|l@.:gF,RyzzgE~5f4Ji' );
define( 'LOGGED_IN_KEY',    'kMZ;,$)6Sf^N)zo37qAOG_7-r<Kk/w>LMi51}u5is tDl?r4NupE;E.H*#POgX<+' );
define( 'NONCE_KEY',        'EB}=E-+eq4=PpbZ`^Nbkc.(lHuY!6zJ(-Eifi>n6^/SW28bi2(Pn,Cyf]Kl!91q;' );
define( 'AUTH_SALT',        'v8&>!Agcp)_@Eu8:D 8st*M4Z+8]lZE5<U8TKk$t|nq:[s,C<v/|AqTS$-Q3[#Lt' );
define( 'SECURE_AUTH_SALT', ' Rre&)AJSU,K{t~P>4^(4a:6VsEJmR@65+So.p7|dQ-K%IMBxfMPFwtq/uS<?5LP' );
define( 'LOGGED_IN_SALT',   'u<1o*_A,%|eCcP+QKYtbWzb&0CBM6LrN4$s>e~34{|>9ny6%-;FDw4e%x<j$JT~G' );
define( 'NONCE_SALT',       'os3(DQ4rb;;-22*KW]UR:LV[/LIe(m3P7yR}&3HYKw-qHK|E94E7:88@w$PjHog2' );

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
