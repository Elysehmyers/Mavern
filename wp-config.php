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
define( 'DB_NAME', 'mavern' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xZ7jaJc>g}57BA(Ui3`C48YT|zdeU>}.hwc0fl.]ri^85%r.7RKDw92<;3BYo<% ' );
define( 'SECURE_AUTH_KEY',  'a/8]qpT!%Thbk+>]~>)E@&3SEe~/.(nw!vo1vS.7vHK!Oz4XU77}Sattay>0u6As' );
define( 'LOGGED_IN_KEY',    'ppRhy+|Mv@8H4RGhA(3vET[ksx[n:5CQsvC[@b[]]uO/](;<ZkHCN)%p:DUsKeLX' );
define( 'NONCE_KEY',        '^jBs7$?X)WO+JMlY@XXMwz{aF4g}>rsuWt&Fb9P4;U0wi+>Vgapm=tMh:W*3uN$-' );
define( 'AUTH_SALT',        'pB^0KH~uCqMvmd<C$$gZPO|/G)]o8@0[]:N1||&bT4uv@32lO2eJ;P(7D;LZC5is' );
define( 'SECURE_AUTH_SALT', 'pdBDg47o-U2.@;K8)^L4<^-)w><z=[|H,purmTAcC[2C5/j) ypJ>gH>[/U@7upM' );
define( 'LOGGED_IN_SALT',   'alZJq.D}fk>p%1qB&75w~|A|Fq@N[_$oPv^a0Cn:R+;K$fbx7dJ-oN8Ac}x6b;<$' );
define( 'NONCE_SALT',       'T@^,bC~/j+7(<(,uCzL07??)r)8_JGo6;,H?qx]mq]1Ao6#wD@/mq#gz;yFc78e^' );

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

@ini_set( 'upload_max_filesize' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'memory_limit', '500M' );
@ini_set( 'max_execution_time', '1800' );
@ini_set( 'max_input_time', '1800' );
