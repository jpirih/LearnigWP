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
define('DB_NAME', 'jpirih_wrdp1');

/** MySQL database username */
define('DB_USER', 'jpirih_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'skmmAS3Tj1rIY');

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
define('AUTH_KEY',         ',W>A>+HHzo*TBy6cBy69TKS0}@X^B5=zncKNwYZ:BG~eV[+QlSWn|fvW=gs5%k&+');
define('SECURE_AUTH_KEY',  '{tNb0Wp]K<>mwyP }}~z<EvPr)`HL:)aHW>_Nl(O?%->;Y^8AjI+9.g/}Dg86R.>');
define('LOGGED_IN_KEY',    'Oq~>j.p]uY`Nzl=mxdb*[SK;Th,2uqPeAPe~?Ht1#H`/Cno#y<C}zT#*V-J<|k:w');
define('NONCE_KEY',        'M@]2f-}0ORhwu>RJmjW!$.4TH[X6!!AEpQq/E}c*-GxI=9-&iWLpV{WZis}/@0!s');
define('AUTH_SALT',        ';/w7iSEZn1-h{(G3Lzz0|b7nMFf^9V!D, (-z&,/)XUXkOf00vRj{gY`wm[^r[Mg');
define('SECURE_AUTH_SALT', 'ob2xkNE,|DeGwG4w:Z@.k,O~/zPOH/Y~+L2`CVqh,]n,?C[*I%#&OGUh`uJZ/sq7');
define('LOGGED_IN_SALT',   '?W~X}%xy2ci& =<q&JFgyne=>:6J@36;Qq!)<-b4&Gh~WLGZX5x?0Ga$LwFjb%q?');
define('NONCE_SALT',       '.48j5c>af%p%4ye<{=Zy6F,i;FSl,5N-SqEBGDXxf:}gvnaF{#$Bs,(U;>ot.;k+');

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
