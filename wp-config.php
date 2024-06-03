<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mmjcards' );

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
define( 'AUTH_KEY',         'A>khT/q-yjGS+.Pu{_*dZ1%#n_m8dIm0Rb4W~$hq4}D[k +jOkw(?ehL-onI<It_' );
define( 'SECURE_AUTH_KEY',  '=cay,T~=11*;8#g:1 28x8!#xP)!=4*Q$v_@zp!a8Kk_KXr6:Q.EqBoe5f/|Y,gM' );
define( 'LOGGED_IN_KEY',    'yk4gD<PM%4.1Ts0EioQYN/kOXA;KqF$9~[H|B]t8H$[f`OTFdAAZ+0%_B9bA/UG4' );
define( 'NONCE_KEY',        'sM_ZMV?~m-YnNPxw23|LtW}t8H>,iQ!Z.k%?V01XfvC2]J6otAn12DzX(1dR2mk]' );
define( 'AUTH_SALT',        'qIQ#_ ._rUJy7uH3wCBFVKNHb$wVle+_)Ep^m-irLlo8T|p8:kyRi0p/SdI9^t0{' );
define( 'SECURE_AUTH_SALT', '.5vh^:290^Z[*F Hf};AlshlQ|C8F&vS$oyq$]CknlOp0ansx=Q5>xft%KHwW8If' );
define( 'LOGGED_IN_SALT',   '.gDhnS:.JF#v4Xfg7Xra@)6L(i&X#{P=$Ws]7Czs*?cub:nQc57~Tf~-T lx>2[l' );
define( 'NONCE_SALT',       'b$`)?I8y+8#5vCB*?GGkO$g*=Wjg!2Id*%_)Mkd>=tV%XsjSfqU<5 1XbL&V z$^' );

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
