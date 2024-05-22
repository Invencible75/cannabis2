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
define( 'DB_NAME', 'cannabis' );

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
define( 'AUTH_KEY',         'Cz-m[8|DD*6-qq-Z+T9baxrzM-_,P?;peqa>tw?JfBOZ<OzbmfevqV$Jp>[CP,*=' );
define( 'SECURE_AUTH_KEY',  'XZy7S9yGUMf?aZw*BCP^@dm>xZ6U|oh6TR%xIbVQ{I~*^$dX[hj4kr-Hq@h8B2h[' );
define( 'LOGGED_IN_KEY',    '>jFQO k~X<%+DLq<7<|_k*px3^eo`X]UO~ScoI[<?*-8M}<;K?~dWgZ*(w<[|s2s' );
define( 'NONCE_KEY',        '%ZKuFXaUI1],#pQ.vZ=U kUT3eRu+[:$dIlLycn2z5#xe*#8jSKpQBoU~U!~EiZ~' );
define( 'AUTH_SALT',        '(P:*?dIS4k?qt0qJdrbcR]dz$/E=025)_&6cOhd @&eko`xn6ryR4/K@/c4Csqib' );
define( 'SECURE_AUTH_SALT', '4Ax{=!IK,px@v5i)R5Di<bOGO>Jd@~Ow0t^[vRivST^N7[[qI:RFJ8EY4kVJ0Zh]' );
define( 'LOGGED_IN_SALT',   '}K+]RVoq(]<*XQ$Il8#=N[q/EbSIi I$L2oEL8Q6Xk?$6(5(hj*%)`=lvb8i/_K`' );
define( 'NONCE_SALT',       'V2oW2U@yPN5OW$I }j]oF.6N_TCE7}d(tJch[U>;r >?M]h:<lnb!CM;h<RfKnfQ' );

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
