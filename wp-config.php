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
define( 'DB_NAME', 'pauzzi_pets_db' );

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
define( 'AUTH_KEY',         'oD5?b.6/cRP;!?e]``Z*=+<%O8^zlXoO&hHL%@lhvLd&*`4Y[>3rUeH}5FKj?DDX' );
define( 'SECURE_AUTH_KEY',  '/cNhaP-gD@!W;&&+aX d/3yTQ4zLNDlIIxRDC4#yt)(N$Wvc@F?jzhn0>NSPOTMi' );
define( 'LOGGED_IN_KEY',    '7x54L)+ipWW2_jy#5J}~MadsTmqG|]`h(%Gxo8O?cdglSD,=yN:c -x$J0La2}OD' );
define( 'NONCE_KEY',        'SuV80pjIFO%V1lhcUs 5<UBB11Vo|e1)H 0cb|ly@LH8FPY7NKie?j=p%?HqPeAD' );
define( 'AUTH_SALT',        'r-I]2WT-^)q0mLYRxF7@85_A:1CVzMAxUVw|3L_u43TsHH12-lh98#B,Ib6Tg`Rv' );
define( 'SECURE_AUTH_SALT', '}riZ8As:`{88*rQ>1MIWj>Zk&:,(DN[|r4xxBTM,mqz4$$z[pue-ahM0*Q8JO%pW' );
define( 'LOGGED_IN_SALT',   'szuVoYF`d$Z377m@<J09B[;SS%(O^B=|I0DMb6;W2r]9yF^J&$[hK>tDoX$Lco{p' );
define( 'NONCE_SALT',       'qY1wMc{ea.{;>H%GK&.{}wbMfA`wf[YUA7dZF-z[?5$>k|Yc]: t$8Du/^F#:5|$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pauzzi_pets_';

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
