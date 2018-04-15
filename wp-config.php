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
define('DB_NAME', 'champion');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$1nt:b=tEdQy8qmR$O02(/3!}z?(Y_C:;:I#0>J}-@{Oe3P=1x}h3)kgy|%;atd?');
define('SECURE_AUTH_KEY',  'Nxbm<z+%r=_q~A:v%{AT)JQy_>PV`E!eL.$r.mwKpag>?;|lL-0NR=we~$;m94yF');
define('LOGGED_IN_KEY',    '2]!x>r6w+~3enXe;WJ`1Ei8pPhcj>e^<!BO25Z;VAWw-`i]EGWNl5> k3e!^7%{!');
define('NONCE_KEY',        'q1|uw-15nT_24(Y3l)xnB!8k+%R.482]mru$lgav/Xs~EygcN K)xt&NNlyo 5A^');
define('AUTH_SALT',        'S3[:Ws[LOe8]{{-p;h,;_SGJ;34XbRCK.:.&GceRJX?![psPSG8=&;?*13~2o_xJ');
define('SECURE_AUTH_SALT', '?usl5m&`0EcM:wKKS.7(s;##lM~YHrJ;UNAZ#<Q`#|JDN-kox([<5AGvpx   a(V');
define('LOGGED_IN_SALT',   '$,Z65D9WeSs+@$A=?}LAG~p]6K,.lXSb1(vXpg7ZY?%s-XRh0>/Yr4E?Dgw30t}%');
define('NONCE_SALT',       '9<1k_]7^z98IxflHlg-obz-6cv%k1JPR%Lc*P^V^u3MF!).L<a{XP m]%:^N};Zl');

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

define('WP_ALLOW_REPAIR', true);

