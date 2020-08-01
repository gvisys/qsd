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
define( 'DB_NAME', 'wp_qsd' );

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
define( 'AUTH_KEY',         '5%;&` ?(&$2u}H?!e_;8Z.)6Y6W=9Ey2.n2j3J[O%.ms<y(>Y}QmI7VhAX6D*j?0' );
define( 'SECURE_AUTH_KEY',  'B%gR:&z~vTE!v-42R ?oG2>f:QJz@vV$cU6>F40DSdy7:z}7[l:YXiGZj$i+/(5r' );
define( 'LOGGED_IN_KEY',    '0&mZIP9&UrYy1A/P&hV;2f-(A&!!,wp$JoXAq@+xJUSS^ICU70WB^]5mytY^pm{(' );
define( 'NONCE_KEY',        '4%rufuiU?aNy)-r57hj5PMUNb33X<~|*Dv%T7UHQQE,}`T%<9^CP,$EnEradK.,z' );
define( 'AUTH_SALT',        'x327O6@p+meWRj#WH)<)pqOe|*BuP}88$V79-xToFtajY{p+TQn~ AB6,|p$|D!1' );
define( 'SECURE_AUTH_SALT', 'HfpkJtAF.p[B!gTrJc;^[Dy.[ZUNAxGJFSuNHpL<>wE48|IuTVY`b;F$DJ2K]ZJf' );
define( 'LOGGED_IN_SALT',   'VFBnsp0oM0>i{1p2B8EbGeZ+QL5-]aXhk2EVz}k9T0/(8JK2[+;;ZCXYdRTg`[:v' );
define( 'NONCE_SALT',       'D=Kc/pNUK[(yTTy:lM2[!1qNMunzNsUrA}8BEw{_drTq.@nI8!^s7RJ~B8UNZ:l+' );

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
