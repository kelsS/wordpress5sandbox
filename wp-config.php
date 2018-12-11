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
define('DB_NAME', 'db_wp5sandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'db_wp');

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
define('AUTH_KEY',         'X*`)C<mpzH[L0Vxr!gS i,2Yxq$An_lIBbOffAKV8BX-3s^[P^<A1aX3!)b1Flnm');
define('SECURE_AUTH_KEY',  '8mM@4x![^$W6f/V{S:LK/I?):LeqR?HrQ4%*Jo(/7p_Ro=Dq0:e6#ku37=zF^7SH');
define('LOGGED_IN_KEY',    '@{`:BR|]W%@@Yyp}VBd1 Wsf0f,nc>5X.BG#d(x`0&%Z=JTopgUP=%v%@~&@^)]*');
define('NONCE_KEY',        'N,,;XzSHe1~Oahr<Lu.KMQ_bx*E:f#DPD1YDAyOm2CuBE5&3&|7h,3c+H]Y-#gc3');
define('AUTH_SALT',        'C}%H*PrK>E)L%sLen:5#5mP[F :UON.X/_y.I[e;RKT/wq;i*!b?lsb;E}:8|yxK');
define('SECURE_AUTH_SALT', 't]/{YN^qIjYM>r&@zX Q;2gFL}`csH:U/>.v<CYm}!8Lh.p4i<Wu=JF>euL4NrG6');
define('LOGGED_IN_SALT',   '0o#irB|BfS[FnKGX9YX`vWSG)O7Y:_YLTr4JnJQAlv1uU*^_,:ae#Mc%B6Yu99{D');
define('NONCE_SALT',       '/]Q6JexfE+|x=v7^T!`1gL!z.d<ipTd/CN+F _H?&wN]u3o(Wpq}zCHn6D`QdhG&');

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
