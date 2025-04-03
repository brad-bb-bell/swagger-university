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
define( 'AUTH_KEY',          'roL%Zm!5@h&t QyL)W MGSqQp9``su4s]EI=;[Y+h=P*W;GgGMi7YZ`jw<bmn;X_' );
define( 'SECURE_AUTH_KEY',   'abRZx6$:nVy4Mw(U Aw/LmB$}z0lw.=t,V[6)SA<DXpIq<Tq$t2N4tHEo[QFGT|A' );
define( 'LOGGED_IN_KEY',     '~L/(?ZbWR>ltAOIcX.}EF+hF(/,t9my+(cymb*b,$Y]O2)j##4DjoWH]A#knKWc(' );
define( 'NONCE_KEY',         '(MNH.=A//f3KHONDp)_$Fgj+D,20,f%I]qf  _t44<mz`Ap0kmDg=XV.oR$ZS[}?' );
define( 'AUTH_SALT',         'cBD@JP+]N(12}L4L{x-RP4w@ P@W ^{R}[W;g8Q/[3,|]muZ)$&|%L]6NT}VVP*4' );
define( 'SECURE_AUTH_SALT',  ':%ul3ip2qa3BVlw$k~dMTP<MTW_cKyaH?gt,~Y I/8]Z;[i@HT}=xK]4@fsIxW7K' );
define( 'LOGGED_IN_SALT',    'd>_}L9[BRnRDV;EH/6}(`L:5=e{p~x;zO=l_s5fAA}Gbr.Op~,,bZZ~v*5lH0gRO' );
define( 'NONCE_SALT',        'W7Cu(`)py4*;,4@ v}=0L-|)l0N0EJ[fS5av.x{^%IMgH])Z92CBb;g/%?:j,z<F' );
define( 'WP_CACHE_KEY_SALT', 'i5C> 1$-LN<60m/ 5rXv5:3&cdXb6m,pPr+VZ P,Y7JnCGT`V,a~8&o`j#uc5%Qk' );


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
