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
define( 'DB_NAME', 'tmwf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root123' );

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
define( 'AUTH_KEY',         'LtMs$7%4KrUOeYcl%J!@$g?oQ+y{hTo8:_t&1G0B.Na-y |N(2 TR1s^th?}qa[J' );
define( 'SECURE_AUTH_KEY',  '5;}w2-7z(&y)dM~vP4%z?!pww6KB.cDuK9`-H9Ru-!-m(.u_m7Dfc^O_lZ[>Q.8W' );
define( 'LOGGED_IN_KEY',    '(nS?`lxVMx0GZV5Kk.~Z!t`-+l_b53J+=Lee:0n9Bc3G4ZIWMQy>f<?Nc/m{x7$W' );
define( 'NONCE_KEY',        'Y2#^j3F:?H0_R_Dn;7i&z55917}9<oVt[}E,WH?/8fD4RX8mRxDB~oHyu5+*EgVV' );
define( 'AUTH_SALT',        '{;z6t_JlEK03V>|(*Xu(J=PZB4SQRTvJZIXAeRNdl`TmMz5qiukPukkOdk;W3Dyh' );
define( 'SECURE_AUTH_SALT', 'tzX<+3_[t@ijq7N?M5$EZ6A^Hy6W-HlgwmC[,+1Uq}Rq`/V-vf(9/k/E1.h}-1#i' );
define( 'LOGGED_IN_SALT',   '#ewVYg{r0A7t!e;=+u&Q#Xe{alb!vr6EQ^@?lOz1*i8$-tra#mk1KAReUlRJ;7I*' );
define( 'NONCE_SALT',       'RZ;c]`CiY:pGDe>XVE>RdYj~:!BMHhk|]g${KQ.$4SFHl$l8`;$IcBQzI{KQy3{r' );

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

define( 'WPCF7_AUTOP', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
