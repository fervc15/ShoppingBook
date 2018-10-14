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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '^toFheXQWZ;1Jct7V`c;.>wdb,NB`nVmC0xN2b~G_SJ<6hG^KpDUT_&Xb^wb#AKv');
define('SECURE_AUTH_KEY',  '/4-s~]Cr/4S:.[%PIzY&~5v@?Uy._bT~d_ujev&d~4a-ROZE)#s4>>8^P+WC1Wsb');
define('LOGGED_IN_KEY',    'y);eK0K/W]UQ}hp# eL-??c.#68aGgU@-$J+y!R%X3kDS$nU5<N?(/0.%.1KEvzd');
define('NONCE_KEY',        'NCByGqA7`BgrVq/x&--a?%:rma|]-J;*tagvtNT`=X9fb7fB*R+f!a!-]0`0lt/Q');
define('AUTH_SALT',        'XxyB){|D=oLxX2 XqKWv3lmgZiA7MY9_V-P~+AltF=WjM(#3<NRcWfy{4O8 |yb,');
define('SECURE_AUTH_SALT', 'tH^Zn?9LB`(gV#l|P3-lQH1mHS^wBp;dmxrVXDe.P!3FIUo>JhR7p;L@zfMx?Lgh');
define('LOGGED_IN_SALT',   'Nb3[X]+ImS)h{0GuCkH#D^lrBwA(C%&Ca)I)t9l*Vb2L;|;Eg`#^/gD[2Ax}]>Cj');
define('NONCE_SALT',       '1+@nOsIkmyp6xM0ltsOTT[iw<!#!]_^e&|#S`x7(|b^Z-[S/*zyKjU2!sgTs5r#%');

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
