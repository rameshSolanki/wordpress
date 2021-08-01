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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EGS<31TlE#1DbYLEfXMIM&X:3/SBfl`#}iq.G#3>=hRxG6{{NjdgK! qK[jvtJWp' );
define( 'SECURE_AUTH_KEY',  'l_H<le[egCfE)8J4BGojv>t(qL;ogP{$|3&f$NRG;ayU7paKh+Z_iw$3yY^ <GI;' );
define( 'LOGGED_IN_KEY',    '/Sdqo$Exgy)2F@3EZ:#_X%?mOO+Sd2;<2M4z+vT8[H24^9er:y;`s4_~ZH+{IeY8' );
define( 'NONCE_KEY',        '@j>t!,%UA$OkuHeuO$H=AUt^xpv)scR2N_I43f<ZHQ1.]S9]MIPnB4cQqdt7a,_r' );
define( 'AUTH_SALT',        'zBKs ?h4?7G]d^2Vh;2Onp|EBu3hMdjsJ4,W_4!<}$h{=0onLZ1]4smi;Sbh0[=~' );
define( 'SECURE_AUTH_SALT', ';Pd}}5@E)i3M|gQ|gfdq.SRO1[q)grb]Vj^> fw0ReC/ou1zBMNI920@Jqa8sg4B' );
define( 'LOGGED_IN_SALT',   '_jFjjB3==#$3>t^bD5<eS;>v55E~Z_F:czif@)pYI@.k4!Cml68duS:0N{<>(ZLq' );
define( 'NONCE_SALT',       '%VVp1KyBj5WZGfpb$vOB<8f|@w#l+MCC`mx6kgWIreQ^5i[PY}a4MK+A -yV%=gU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
