<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a=<dUq&#`>f~-6m}Ys$~VpEH|Qj4hU/DRv>X+H@dZ0k2M@:>^./wsH4}$=Trqe&R' );
define( 'SECURE_AUTH_KEY',  'm,(Tpb5hf4uI ]n6~L+5:k@ng/ora(!AMvxY/leL1;tTT,>J^m5x23zqi)eZW(B?' );
define( 'LOGGED_IN_KEY',    'j|qiyg]s^vz}}9@;^%**=@PyC37}:+!K9b967Yk9Ey7n*{78t62Gr K4hV48uy3:' );
define( 'NONCE_KEY',        '/~8lyt@CdwHTc9^zW[3PdnP,b+oZGY>-^x28%klv&24YK~09o-)tO]R.Q7oO]/rt' );
define( 'AUTH_SALT',        'ND/ g +6{K*E@.aMZoExfnJ}|4_,M{)P^j:gm]i1Y_NBtL5J[o;(l.jQzd9ci?q#' );
define( 'SECURE_AUTH_SALT', ',o/5C[@]<m}/q%JILxIC^5@P~By)-$_KGS:1HlQOTnp!aUr9$MylGVEu7#9dHthY' );
define( 'LOGGED_IN_SALT',   '#<g7f|/J6r{>&1CI+mM^u!C;C5{zUHSCVH+0%^Aw9]4KAJHjPUWDPjjq|s{AkVDu' );
define( 'NONCE_SALT',       'MctzKxYle_jcA:}T)33`]h8fLig:(n?6iiKA(yG*^+wC#dbeOP8W7$F#^Wt5f*yy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
