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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'FNqjzFa{].%Nx2wM)HxFy!.?Un%U5SFCs;5Z5}f1)&ea/5F#aH~.HM@G7isO!vpF' );
define( 'SECURE_AUTH_KEY',  't/7+z7uZ,5$uQBXae:8R~lpCvuWhc[tQ&LWU#h-kFiR_acw 3WU7DZ|>J:0#K1I{' );
define( 'LOGGED_IN_KEY',    'o2o]^6D~Z,?SrT1IB*<QK95zKYE^]qf{=OpR&WpAsG1EV!<XM8-TgmL1ITE6!n!k' );
define( 'NONCE_KEY',        '7iJ^2wd*o7vqP^uCVwV!a`OAZ(x&xtZY-PzQRus,i+[5,}<eTC4llg,m;ng>H*Dm' );
define( 'AUTH_SALT',        'YSgIN/lU$(l&rb<2^Zwi!M(W!>nh}P?y{ t!*$O.YAG] _cmS&kXB6WPW|/Qf?tw' );
define( 'SECURE_AUTH_SALT', 'Nv2[-]8<ise]G]E[yjJKmvgFYL/~xShynm7Ie*eZS3%W>q2+QzGLmy(I=E|u<R[w' );
define( 'LOGGED_IN_SALT',   'oN8RY.LuvJ3]Bb&%u<~.g>vrIPR2uNaL[&`&|]9^MDocnY7Yu0fT9^bUx%_s-y@u' );
define( 'NONCE_SALT',       '~g]DM#UNEN?]RGLHUn0kM9S *Y_`c`R:|,-21<&_mJY[P<Lq>eb=;o5<}Tn03v81' );

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
