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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@,*PbHt#S7I6yyTA.qSesm.[6q#W|<m#8O;yu]&ZfZa%-pE3i[*6BxYp5iUQ)n5v' );
define( 'SECURE_AUTH_KEY',  'NyqnG,Kqd}~+6iG]md,>)Vs=q_TmJfTPT-%IC#1.aU`DeN%Zx!mcNxum03OT:Pwm' );
define( 'LOGGED_IN_KEY',    '1+gh:zUi/M)G^T`pSzL!Qs2X?GY6]u2L 6.b2Ka%;_NyB_1X?/]C;VjP?tViYZ.<' );
define( 'NONCE_KEY',        'v?I=WZHv]1LQ@NGl.`?PwAmeA[y.wohgL~{^Dfypz(R_q472^ffK@!7j%2m0GFCV' );
define( 'AUTH_SALT',        'PCR&?QR-Ne`zyT9a]+6i,.k_P>5=m%-@Bm)r4q-L=Yin8l670:qb#6%YH$7E%<Vj' );
define( 'SECURE_AUTH_SALT', 'K@ZmP1GD.Muzr`MwHOXHR%5Is]K&clQ6{TBY7dwaK2R.HgoMS{D_6=k45?xYq,si' );
define( 'LOGGED_IN_SALT',   'RbK21m*WZ(`Tm_a_-3_x(c-?_v06+3cMK6:u3W9%wUfU[*vHGlrbv1n&U.QP_|>[' );
define( 'NONCE_SALT',       'Y~rP+(1v<MEfh$6v{=ZTXAhc)n7,*K~7cmun`.)W-9b>BAG.p+S]V;j;^/Cv2udF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
