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
define('DB_NAME', 'personalitymaker_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '[3RXv{dN^U5PUC7kl(W7:EXJVU}o:Y,!hIi/I:. QD4z{e3#8V0@jR$R=9}#8H8,');
define('SECURE_AUTH_KEY',  'L[,mMs[s[W,D_EDk*$fg:B+&@D0x0homk=^t:c:,4=BmRQE&XS8LeoLzQKbxII&E');
define('LOGGED_IN_KEY',    '8oGQ]5b]7m2waY.=m]=I{Zj@Ya{fFk``@_|9|KxI68_,[xfW[{_ F<3v[BRSy5&5');
define('NONCE_KEY',        '|@CfWal;S6<HJGW!fxfvo}<&kyea;XI}Yk&G4;;~_BthDuZFPRT4[Ym7LHMa0oe5');
define('AUTH_SALT',        'l73X|[xMHc7nJC^!a!0r+,Zmpff-NzI$9JNvRKCyH)JsEcj7zGGHJb4c3r|`zSRA');
define('SECURE_AUTH_SALT', '{K3n,B]2_a_=7dnT/pjhys.,4XzqW] (vY<2m8G8QfR0Si+B7XOo%1la!MiSUBAo');
define('LOGGED_IN_SALT',   'LMFm 9v|~oif^Nv0t(:o4{3iP-m*H,/*:_1Tq@{G[ePD1DYsPt5 uwdJWrr34*P ');
define('NONCE_SALT',       '*^VV*o(%+oGqz$p}F=wYVbN;6XUj}]JH]56Ub*Id.Am zJbCWQ(LBc<(bfdfYK*q');

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
