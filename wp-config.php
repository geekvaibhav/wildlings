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
define('DB_NAME', 'wp_travels');

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
define('AUTH_KEY',         'p*Cierj(6kuR{N%RJ|hRMmCOzKM]nA}p#,L3;${>mYwO)ZE;iS@#wWK;~h)Rra>.');
define('SECURE_AUTH_KEY',  'q~vMJRNd7n{<`M|0tycw_]Z]FrUB?.hr/4Jrl)r!rVq5FU%%7 |N>N)I%HGQ(+*[');
define('LOGGED_IN_KEY',    'q=o5fwdDs?uZmM)tYv3`ih,WYr]n==Uid`+r9l~@]5dWtTI0I#BkDM;?Za@TGEj0');
define('NONCE_KEY',        '6Jyju% UT+*uryg:7Qs5dIcV+-}{$%tse2Tr#r/aX[L1$wdT}(pagD~5]53~^|RJ');
define('AUTH_SALT',        'vzg?S|I08<|C%kD$9E+TZ50/GOf3g%tz?|nGou:L3u/}4A$M#AY&Epf9Yy;NRE2M');
define('SECURE_AUTH_SALT', 'rSfh.6o?FeJ, =BR:*z)Y&N/_UU)0w9$N4@f2mya!/-tfNvjdKQqFcDB8:{N7(Sx');
define('LOGGED_IN_SALT',   ',D6_%5(+QV{]t/&E=*oiksJ<33nepZ.R9gY3Kq>bo4j7Ul]zKAGqW&Nfh5!tQ|}$');
define('NONCE_SALT',       'kVlCcq9$)bZeTYX94oxU=LvLg+l{)hada@|!2dJ| ?MhadhW,IBh}-/ig@r)u5fv');

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
