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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define('AUTH_KEY',         '`1l>;t_z.m:;4p-%PdOL(*WuJ|K6JjUNs`OWTX#oi|Mmv|H*< >7YE(-p.,yMh(+');
define('SECURE_AUTH_KEY',  'N($7!5C pqx5.gie{B1Dx8`r&L,)9k~Y`8lSs}rS=g$$}tz ,A%fM!|j</@3J`CM');
define('LOGGED_IN_KEY',    'I!2uvT`DL/oKP`DCNB:@k/?MnO%]|&@!H@yN Qmxd>}f-N@^8is(m3H&)%^5tJ?#');
define('NONCE_KEY',        '0M4CjM0M>7];T[O`aC9!^C+VFkAvg/V~#@OX%>lE;z f(;<3)2+rsOFj8H&r5S|Z');
define('AUTH_SALT',        'l/Tu?{_vDM2+]ctd=6`=JWMnF3HD1Bc2G(EHi;e<$2e+>m+mt-&a=;s,.kQruqRB');
define('SECURE_AUTH_SALT', '!lC.K=ULOvtQkycVRm!KVfq([gi{$I+vd{oxZ<*a,`i2h-)g)*!z>>#D lw^Waok');
define('LOGGED_IN_SALT',   'h9J6OW![TyuQpkuMfj!Lpg*H3GwdsX5w.RvGXH:HpQ4#!v~?Iq2b~$EC#^eNJ9CN');
define('NONCE_SALT',       'lnTn4IH;i|}L7))S#*-^k ).&z3-]$DHy}iJ[!%(#9NKIaTuFrzkae^4O.PsKrH^');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Addtional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place addtional PHP code here!


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
