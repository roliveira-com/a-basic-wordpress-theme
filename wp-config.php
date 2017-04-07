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
define('DB_NAME', 'wp_triggers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'grumft');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o?-c|d)/v}6-?Tc}$/6tMfx)I8ONePFv#jw-n>+fzN9.rZL>ux_vU{Lb9Rh*JhlZ');
define('SECURE_AUTH_KEY',  '~*w+HPr{AD1W58+Nx^Ulkj/O+x+9BU.8%Dt}p56YrqkE&_pB{bA.|Bg6ZX*<KN`I');
define('LOGGED_IN_KEY',    'h* TsI8t7F%l!B+ZQVI>SX7* nv3O+iu]bchlSKmJXojn,VEanB~5k<,ws,TY: }');
define('NONCE_KEY',        'pYj(MOZ;|Q+d&:^9<B*XV@+FL98Wtl>H^Z?MuIdWym/9Fo%g6AnP[#?+,+=T+YHF');
define('AUTH_SALT',        'Z|{CHm&LA|OqV>?9Ta,3j/K@%noM#: zX6<Vdf>Bt]2dA|5:;$](Tim,>.c?uO*-');
define('SECURE_AUTH_SALT', '|oy(Cz{9xS^PR4dq  ]~36 kanG$lU(]!-fBxb*J|I5-TP}H)RPwE2[uyC%Q9Pd3');
define('LOGGED_IN_SALT',   '+,)+Vo-^0Y}ewp,q|O|ww?_+B=BAI/JLv0=+t5-m?|/za*7< <ciT3|SG?[IVvqE');
define('NONCE_SALT',       'I<At1Da&=Nb 1zuG$]jL:J~!nQ+sYo!6gB/%KsHwtGtyL+?cFB]!g{d37e<JDKyg');

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
