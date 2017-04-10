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
define('DB_NAME', 'wordpress225');

/** MySQL database username */
define('DB_USER', 'wordpressuser225');

/** MySQL database password */
define('DB_PASSWORD', 'iAq5]#F-Cw[B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=iYz^w@F~x^oh|@_P3.fJW)I]sBMC+_CpMVC/?FE4274||j+|?<0SC:sJvq=1=gp');
define('SECURE_AUTH_KEY',  '4MExK5ASCw.DaEoNr/{e.!Ro+y^i7w{dMF^j~dtx[a,^JL)K|aiXON0TOAijdKL+');
define('LOGGED_IN_KEY',    'xH#=Y78k4,-&G*AiU.U=cWME?rg.sfKgy3^hiLw:_`Kp.Nk32DdRLZh:IaQ{Xe=G');
define('NONCE_KEY',        'l+Tfm~~0=me+9^_m;:w7cBBv0Z/&#o+)_dN{8z3l?9Le%F4fN9JZx`MmN%rjQ7=>');
define('AUTH_SALT',        'R%r<A)wi;)tRF<fE>&|<9#%-{5#*),u-R)QI}b0,<nWtc(%)PZ;Xf5S!31|5BQ,%');
define('SECURE_AUTH_SALT', '[tm7{4ezwN-^G%j<lCXR)HR3uk5bx*y6i66{7=]&]c|jz)/Jq%iQS~x.3t|#m/r^');
define('LOGGED_IN_SALT',   '}cU}{e/8h.=Vb|FG0YI?U][6UvA&**AsdlN}|eUG?`PJmS{]q>R80Up<daWF8nLD');
define('NONCE_SALT',       'fE^9!JrbCQJ^4+{}Z`sA{~p`!vx)Cxgh)RS0e7~@tSt2@&v`mwI.c:Sw7M;l}pn_');

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
