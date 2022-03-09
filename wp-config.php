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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '00a3b3dc46294ff151cea4842aaac2e4');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ':JK*ES2H;zy$h;{/=MB<piJ ;kZAPLhY Xxf7aux-3O2rjl3/hYCP#0~I.Z%N:mg' );
define( 'SECURE_AUTH_KEY',   'Hn o&JQJF@*l[<<|u959n/UFY=PadLvweO&ARD`tS8)>z=,Pve9_`?*u%c3Gw`4^' );
define( 'LOGGED_IN_KEY',     '5f|L[#Je@g]vSPYJ]<603nTkxy 9!QKY=Pk?IDNMdMG^ESAq-^~X#-8OA;uBZGI+' );
define( 'NONCE_KEY',         '`/v!J(/tG,$KU;-1sKR)7(#`8/$W:u,TUaI(bC[bLe:Id+<t]e)ccEb~Z[ByL1/^' );
define( 'AUTH_SALT',         '!TnK]I:!=*U6:J9KX3D0LuZL#Y#_@J`Xvch0 0[7$LW1OyrCK;LL%Y#v5tE>;4)@' );
define( 'SECURE_AUTH_SALT',  'ky:/lL~X!v5 Cu;1JG3<Nh<e+]TtJb8-Tg!E6]Hmrh,#>yJ2pOPO tf?Q}9@_o8X' );
define( 'LOGGED_IN_SALT',    'oDN;2/tQ|~{fDf8`djWf6c{D]cT{W1L|6WfQ}zK`)ntB=4&PE~Y`@ANJvZ:%Bz[2' );
define( 'NONCE_SALT',        '#b:0<?KQ(9_KDxrOR4tbJ;HO#-jRlCo6#OdtD9!J[Ry/0dZ{}.B>Z<roVkhP,~E' );
define( 'WP_CACHE_KEY_SALT', '6|$xzqZ1vnZm?jqM# j||/ yCl].u*6yid<|wARArG/ZO;QSv)/fg6F6sSG&vEU(' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_CACHE', true);
define('DISABLE_WP_CRON', true);

// WordPress debugging mode (for developers).
define('WP_DEBUG', false);

// WordPress update method
define('FS_METHOD', 'direct');

// WordPress update policy
define('AUTOMATIC_UPDATER_DISABLED', false);
define('WP_AUTO_UPDATE_CORE', 'minor');

// Workaround wp-cli issue with unset HTTP_HOST
// For more info  see https://github.com/wp-cli/wp-cli/issues/2431 &/or
// https://make.wordpress.org/cli/handbook/common-issues/#php-notice-undefined-index-on-_server-superglobal
if ( defined( 'WP_CLI' ) && WP_CLI && ! isset( $_SERVER['HTTP_HOST'] ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}

// Single-Site (serves any hostname)
// For Multi-Site, see: https://www.turnkeylinux.org/docs/wordpress/multisite
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
