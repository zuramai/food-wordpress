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
define( 'DB_NAME', 'wordpress_food' );

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
define( 'AUTH_KEY',         '`I*FHj@K]51::Ojl#Z&^zsK`v4mnc/vMj,X&IhOEBq/yWMc>r7xOl5M06fB8AzS#' );
define( 'SECURE_AUTH_KEY',  '`3uCf0nGl*ld7U<u,E;8;M1iF,lZ,*|9>dF2VD~k<:f 7TGz2:2uF(I=pv5]?~Km' );
define( 'LOGGED_IN_KEY',    'y}#xPT6yt]y6R1W>%`X{say8}iQ?xE*>n=>/wJW]/d.&>*U+p=MWtL.oEfV8uG3n' );
define( 'NONCE_KEY',        '5K?1P~z6[/Z[rRPmJ-xU.h4eY2h[fbO[#>g7w#J~;M0ZVHLC1HzL*m2nUD.];Cgi' );
define( 'AUTH_SALT',        'bDDP1mpM/Qls_wqak/p9FkQ!Yt9|jYfH}NM;?T}ZVGNd)6dO0*Gj^Z0pd#=o@2_P' );
define( 'SECURE_AUTH_SALT', '*r%]rUTlXNSPB=c%/mB956wiJ+ +h.TI6UfsS$xkq<!NF}tilbHl ?v4m4fPiAxE' );
define( 'LOGGED_IN_SALT',   's-#!82%TK<d*Yh/4yY&6c[8B }q.a1JdS%}%d|Kc2b3a6k}[a:XUwrM]FamLp]lK' );
define( 'NONCE_SALT',       'gYx+J#aOjk%#8b3&Cy,4m%%_5.hE:?Zbz>T);>+<ay@b#pD.?DJ)LbHyAs|-~G&u' );

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
