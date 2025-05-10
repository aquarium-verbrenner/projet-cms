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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dbaake' );

/** Database password */
define( 'DB_PASSWORD', 'WFgQd&IUXwcQyBN&Dw' );

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
define( 'AUTH_KEY',         '<H1[$YaKlH:>o]9Mg}($<?u?yU$8S8|)UK<5}*jxq{}D{K3b;L4l/Ou=7QqS|h(H' );
define( 'SECURE_AUTH_KEY',  'XUAkpH#J#xtoa1V8?6apwPQ-HXU_j(e*P_;G$ok-aHs2O2DIp-NX2EXl+31dJWN,' );
define( 'LOGGED_IN_KEY',    'RxoUn`=iMVIRqN9: NnQqmJFs%O<|ZVS-1%e.$ *2T?A/3Am~dWB6mg1<5UUuy7F' );
define( 'NONCE_KEY',        'j{h-4&I+GSp9zFW%[RfV@/%}xWFpHL{fA!E4H`!HYl^Tl:tZKBrknr!rl]%O%J=f' );
define( 'AUTH_SALT',        ')KlKF{,IX+.t9V9txKXP?RmB&fkZi.>UKUsJPcQ2d>pw,7d>bD#?Q]Y7Cj~<8?uu' );
define( 'SECURE_AUTH_SALT', 'N9t`eh41 OOP|~.a&3 ]st?VsLVwE6CFoJd6GSX23]K_oa0T8B/qVLw51#XOf0B5' );
define( 'LOGGED_IN_SALT',   'z +&s,Q-ZL~OssaS*`(Bx/+*@8,Oa+Rh*X;mn: Je>a(YUR%)Exgq9$cAMQB0*@R' );
define( 'NONCE_SALT',       '1? hBFN.Y@Xu8::qo1(=g&Hz@$[}in*/Py+Q6m4v-kQM!*DMEM0 Ht^D/wM$U0aS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
