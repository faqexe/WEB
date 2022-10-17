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
define( 'DB_NAME', 'wp_01' );

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
define( 'AUTH_KEY',         'NLvN)g^yC.|YZkr<g.?66Ya[xT:,|Teb;tH?B>+N,8uUP<j|O;TyX5wIA8YRF*I3' );
define( 'SECURE_AUTH_KEY',  'TC[a{8$fAC(UITqNcrKex9$qUwMxpcccAVYT?mavO^1`J&`SSk?n9rxSKGi1mT1U' );
define( 'LOGGED_IN_KEY',    '`-FRZoBB}= 14XS?XRNLMJ)[Q}UD?  kFH~q^a:P)efhRb!!_-Nb=:=Cc,pQ]c|z' );
define( 'NONCE_KEY',        'S9Xa3c[~J:<bg3dQ/3?vw}.0PidKMd[y% ;4PIF~o*$-) `WLN0Tq@Vsk|o_:]H6' );
define( 'AUTH_SALT',        'fD(5A5g[+aNT@!0]p90B++*Gaf=L~XbT At[5b`?(we+8PMa6:7&%e/[h:c22<v*' );
define( 'SECURE_AUTH_SALT', '#V!BgD7TMy=|{/ARg$D75ko$4n5u5}{P]XH `_tB1oVy!P<uh$z@0m#IzuWwT48x' );
define( 'LOGGED_IN_SALT',   'P& TP.8h{o[MK@-:~&eSlaB9;W18/4 <bn<)iBbGEZO{( G!`CjZ%v*5eWo1omj}' );
define( 'NONCE_SALT',       'Q, 4Qs0Ucv}x{vs /ZA&VEG_D?EF/#+w=d=XFi&,/|7RXT#8:<iC)Y*>RXkZ2T1K' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
