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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '($6K0?qa*yn(QHm#SRc/=N1:T%sHA pyNuP)#BOo{q3]*5sUG,6].G<u>r2}JJCQ' );
define( 'SECURE_AUTH_KEY',  'O[^!-}Qtlb2t[$0)orL-(J$J^M22QXay0M7A}5qVWs.@hj1]f#5y-tgV=N9+45 3' );
define( 'LOGGED_IN_KEY',    '|1B&sPJ7b6wU3)L{?Np=nh(A,8XQv+Rb6/!{NjzTk8[G+$Ci}~124z==;<5b<hhQ' );
define( 'NONCE_KEY',        '<grHTA1D[kTbOtBKq:E)`$*:9n1e>HQE!Qh?;QxR%hq.$WoYzy~e`g$,m&4X(GNZ' );
define( 'AUTH_SALT',        'W.X,R{:g[{tKu09KpqRbo Ci;C4bOQ*jO3[BuXF!a%bO9A(J5ZlNeopUC$XjLCeF' );
define( 'SECURE_AUTH_SALT', 'SWB;RUVs,O0LXNw_84t%0MW2kGYfk&L>EPjzOgiMA*O,pD,)B*QWR=fl4?L4q_=a' );
define( 'LOGGED_IN_SALT',   '-^yiDKJtqd)M6FI[<IY)u=>n=l+Es^T9pO;b;Y#[=}|$SdPALjC;G%_<4*By.6ih' );
define( 'NONCE_SALT',       'jnM)S|Q#O*xkog_?@(yT|QP=)6pv4b aT]`m(M/4)4H{Vu4:^mOeh))xktR?o;lO' );

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
