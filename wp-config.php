<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J&u)A7QG_;]J:4$kBngUvo^1RP!ue<Y}:W#c6<MsN}~HN!$RL%N,1vMQ*Jc.ka||');
define('SECURE_AUTH_KEY',  'Kx7SAl-52^%Cz:W3yRnlWd1n9~x GYmyM@oNE&rFJqgh27|)%M P+OHc8XbB/RSb');
define('LOGGED_IN_KEY',    'OW:f+hTA(e|ZH46y0xJZa5OT$^0OdG%Fq!dDhrhoceSz[a+(7)A`sJ@}ZgOo*{kn');
define('NONCE_KEY',        'NNtepV}w$}BNYT9toO.meZ8Q2qAg:;Bgv6HLz[zMx_Ouiym!h$oB1Xg2Q|18U.27');
define('AUTH_SALT',        'e/{0uB:Q29`HvVY~-@$HNFFb}<GyW-rnsfK}M`~]?`lVh2ybAJ[O0rJL;c{2QfCl');
define('SECURE_AUTH_SALT', 'PTH3`jUblEe)`dxBDI4uJXgp.bSZWCFh>mN8Z/1Ld<d5z$N!^^_=$c9kc:,_vZ=Q');
define('LOGGED_IN_SALT',   '}SjAG6]I]4WrI*Q3H!uBO[$#}DpOTs^ WK~>R%%TD644OK7T!HP{ 1aLA`pd`.hv');
define('NONCE_SALT',       'Hd~t^EF<[c3.k!8Qxv!oR>Ig1)~?](>>Yrh@9W~yOM|mv=[MSDn4*PZ>-qvcR#l4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
