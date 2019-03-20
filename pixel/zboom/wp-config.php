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
define('DB_NAME', 'zboom');

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
define('AUTH_KEY',         'ry{?qaV0d-+A+k>MiD+GbD?A]{LRw`%p-NjO&|&Dr1T&u^q;2LT1$3Cns4=3yH,S');
define('SECURE_AUTH_KEY',  'FsB%}@<M|qs#:mG3(i;jJ;#(`IE{;&$n.&7? [SR nz>Q{}M$y5lVyEI4_QO0(V#');
define('LOGGED_IN_KEY',    'hRIl1gm:vG(WAkui[v);Yv0VaeV~kmG%NdDSY]A#lA|Z^5@9r/c&|L9sly[>ADqT');
define('NONCE_KEY',        '*wkX2^:p_E6ioJy_h!7E=(T,.AykqRlp!gA)IRT[PstOd;|3b`*j5/lwd$Rl]xj+');
define('AUTH_SALT',        'Lqfq:DLy>_OrN[}qGdBFnfi3vMjfd9j<g()?n3C:?^oWxQ@(SP_`~S+3N~LaB,+O');
define('SECURE_AUTH_SALT', '3@ma?v;6Zb6:|H4}/)Lo7zqa~><^@ir+w#Bu!L<9x%$Aq-&m<`a%.Yl.C3]Ji%X}');
define('LOGGED_IN_SALT',   'SV|>i%@,zc2GWeN3Vf/:FwTR}V%W/KC)*Pt3VhmVMrQ/[2nTrW ^bV[7/aM)y9C^');
define('NONCE_SALT',       'E&K+Va;8Nz7O|sM|>nSXwLz }My{),nR)G)kC*D3U<NRK4/a~{@$50j&PM+J5f%s');

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
