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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '{Vh4eC(KG,(~j)WGoN)9xQ_VKO8QU-bVP%ywEO^|rGP )D?hYVi+3&LN|ejn@r]8' );
define( 'SECURE_AUTH_KEY',  '<Qgr/wtZmT#bfB.6r>@LdZ~KO]eG-,r-W$fV!8vV=;9bMF30Am&@N0Rt6co5AX2j' );
define( 'LOGGED_IN_KEY',    '@@E`PI7o1~+AuD5y7|iUF/ Or&b#Da%c[GJb(_TZCR(TK$bjm}Z5`C^cM 0Lvq>e' );
define( 'NONCE_KEY',        '>9G;;_?JWiFB`:1K.ek;.nqo?_nc_vQ)~#}wmKS_147>C~9_p/kIar?vl.O[w&?_' );
define( 'AUTH_SALT',        '+egU&Er5^~w5Elp3/uQjP:w0^j<8w>]D)N:%>1SNU9EpG=2U7U,a|O5V)Jn>Y9{(' );
define( 'SECURE_AUTH_SALT', '8nfGkT2LS,*Z@Xtb3b[v^)1,~^ xkIa5]`+K(I0w6t ~FuK)q!;oYGyNf%nQSl}_' );
define( 'LOGGED_IN_SALT',   's[[fF71w]!8sEcTok{uPH.Mxxj[T$GW+MRAsx1Vm}u?#y?|uywf9t*mb}r1u/$`]' );
define( 'NONCE_SALT',       '1s[@+L9fWsgC`Q/[I4%(mC>v@ICS{P$e{%51+eApw+jBySEf;,.CmqR V-5Z:UJ_' );

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
