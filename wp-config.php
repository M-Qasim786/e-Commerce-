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
define( 'DB_NAME', 'eCom' );

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
define( 'AUTH_KEY',         'O7RfUS55sME2BD<&?]&RTVJ0n*gVVz|Bu WV<1gqy=WT9C:3C=9cB_kGJ|m*!QGw' );
define( 'SECURE_AUTH_KEY',  '~ukX9VkC[y=qr*Qme tFyY2<(QeNgw{4#T@Eg*M}f.9=1Zqa</|/9BdO+5Bdu#fR' );
define( 'LOGGED_IN_KEY',    'Rd-F%{xz+j^F$Nt*X>8]BFb{?{P<?xM)1VqDkyZ~C{J$GVUiM6A)Ljt[%;1QRASU' );
define( 'NONCE_KEY',        'Hp=2HQbvt_/Q=*f8qd0_^UL5z=CceUiyc-1}D4r}+!z!3G$f]nXbWbAk&1[k>7|o' );
define( 'AUTH_SALT',        'yMJ]UDQ^u.eF;Sb72s3X)S?S[86=[J-4zRbL#l<K00T],{I?WUV(-ha,!.*0}D$>' );
define( 'SECURE_AUTH_SALT', 'zIH|hPEh8IGX/J(362-qCN<Zh)3J94^`_{Sy}PRR@W^U@>kbuW5cvvb;6DYGz=}f' );
define( 'LOGGED_IN_SALT',   '-gTT+I3P6;O  ;<&OPLpD9qMFbX/WE9*GGw0ZqSf5*ZH#LMK>)KrMjt&x6peQ9`B' );
define( 'NONCE_SALT',       'X*z`DwW}_e.J,IYouO{/!:X/QM2<VpC2WwE^Z/{}(Z[%P9azcrxoKX8*g1X8<%BI' );

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
