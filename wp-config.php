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
define( 'DB_NAME', 'yeminitiontv_db' );

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
define( 'AUTH_KEY',         '~Rv*po3<A.Kjn<7=GS@dtT0s7PtuGW7xgl*RlM;D8n4%WpIh6aIiq1gmSVdyOors' );
define( 'SECURE_AUTH_KEY',  'zTvj0(Wuj.S[J,8 #1vzkgAcZ^}_]k_qU,1+Go1b*4>%dO4Cv`k}_]^y}y=4rf-o' );
define( 'LOGGED_IN_KEY',    'OuKO#sKNYJ{nz5k,[sK6)G<M`*!}t/WO;`j`tU1;pr`DdlR-Za1Krdg@CZPK_ZnS' );
define( 'NONCE_KEY',        'Yr!xSAaD*8oD`31Wx9o`OH}i1=Yx/wXn@P]Tamz4C=C&&Q%T7T9Dwgkiao5n{gHx' );
define( 'AUTH_SALT',        '273Fos~u__4{x:P#K#N+vF(LGpeCC}EK!z(1<3OVDHHew]XLl#UbgZ9H??[QC< $' );
define( 'SECURE_AUTH_SALT', '&n-ik`8Ux5aGp~NUo-j+G8MV*l$jwrP4#->I,(r Cn(&fNM<g.HLBu$[)Gj^CZ|%' );
define( 'LOGGED_IN_SALT',   '7H7^K6c9>aoM=a|WDU~CTWl0M2&fb6WGVpbxF2p{$8}Df(q5d%Is.VcKa#2yy}Cs' );
define( 'NONCE_SALT',       '.`^7u69*?6)85J:_bkUREzRQSc6H`|MU^|upJN%{3lxdK&1M{KRaWW|G+%5bXDNP' );

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
