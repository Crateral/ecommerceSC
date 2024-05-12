<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ecommerceBD' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

define( 'WP_DEBUG', 'false' );

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
define( 'AUTH_KEY',         'fy]XcWP94{lgs?(:&ru_YRMP;_S13n<id.Wl%HT`y-lo3tE7(]u=OfO3Y>Lou2 F' );
define( 'SECURE_AUTH_KEY',  'hiq,c}jL)ko5hXi}s1O7q) [7?1DRsxk{owsB8{l~.w$8k}-:^o ,{yD=-wWzn:<' );
define( 'LOGGED_IN_KEY',    'ESZhVs{iTiCGun<JrisREtT)u!%<<,YhY*)&p9XN!y=dsy4!wD{?`0C|G*V(%/8c' );
define( 'NONCE_KEY',        'F4/AuZD5!qlmwv=Q(l-Uk5C|BeS:s)AV{hP>LS~){}rB.GJxBvQWqtAt,$:cP}YI' );
define( 'AUTH_SALT',        'ci`HZl9>N~b+FOQqBSpK^k]s,*FG{wqN hu{8NelkP?Pne:f)nx/M2DMor}<%brV' );
define( 'SECURE_AUTH_SALT', ' Aep6|!:mJ|xgF&6*E&a^[oaBI|[w/4amh*U,L;3BV|*D|Ew.-1~RULBK%TR0U4[' );
define( 'LOGGED_IN_SALT',   'X- 6fS6_-Voqprfo]1lXkZgFgqPOS]^oWs*A~&WLc?E30%fB%rMly5eY5FF3hLVV' );
define( 'NONCE_SALT',       'HNO^fZz(c?;KW2WH7v:$<csMQSqQ_dCrjK+YZn`lq?IP$~43#Ap!kPfvvcZr>,:;' );

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
