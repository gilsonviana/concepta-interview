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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'concepta_test' );

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
define( 'AUTH_KEY',         'g@|cam*PTtop:]O_ Z`{WZu1TriA>ZTCZFlgwx/eE+]2S!tdAWznQ~_*4&V@:]@p' );
define( 'SECURE_AUTH_KEY',  '07!KM;FK*As&jVt 6zK2(3r_Ab0=]@XS&(SzN?<($no-k$sV@77s/zDQB_YKDMUi' );
define( 'LOGGED_IN_KEY',    '$hP}!8j5qvCPV.0|<UG#|krW.@uD1)/Zg<{oABrnIV:SXA_%v!(,2~Y?R`p$mS7Z' );
define( 'NONCE_KEY',        ';d(BwFVV>i*~N/eyV_CY}XE:2`x;BRSe,1sva;EiQ,fBkSXB21gELJ<op~)b}:%Q' );
define( 'AUTH_SALT',        'd$8;xRa[iQj_DiY)$_1$k;Q+IcRIzEnFr2a:q`[/3H4LG}(TZJ{^xNG}53z(bN!-' );
define( 'SECURE_AUTH_SALT', 's73rqz:G5+C4&:zj-++m{^;~O>||6(tB! }mpf${D u6QYw5v }ZHV2B[Hu_odVJ' );
define( 'LOGGED_IN_SALT',   'uL,7Ri0wvW:Q>Z<Pf5|XS]Oi_%O8EIA7R!/Ao9PO+ZD@i-HDp6O,L#O7G@r`+zw[' );
define( 'NONCE_SALT',       's[B4ImD7Vz~mFK6+~gj>$Tc.N=lz~5a}2&Hg<0ztgM2m}XpXK33Fg+fpFwlpypyE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
