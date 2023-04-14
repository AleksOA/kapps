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
define( 'DB_NAME', 'wp_kapps' );

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
define( 'AUTH_KEY',         'Y~2M/{t}oBqG#Q<rzMcsza.L&Q>L!^*=JY6cWnw,Q$wq[znL|?Am81C6h/g<{l^R' );
define( 'SECURE_AUTH_KEY',  'c9?]nP((/BL4]}7%p}cu6C,:(<whVeiW8(^^x?`PUP.6^uWl?i=,iwcr:B9Wz?>S' );
define( 'LOGGED_IN_KEY',    'oGs%Q(5tcyX<0p3woYEZ[aLv(y|%O4oJ D__@C[u7vRl_mck&= _|_7]%NFbQ#XP' );
define( 'NONCE_KEY',        '[p6Wwq1Z4[[{7!LEbzb6l6BO:&rVgt83d`X>uoWi9V>3})<Q!2%8EhVuQ!/2N~8 ' );
define( 'AUTH_SALT',        'JdI[ba8aqJXd!u3 _U)33s}Sa;*9w$Z<87OWtLTFJ1B./s;TE+{9,1YuT%1s(V!>' );
define( 'SECURE_AUTH_SALT', ',*rt2@cP9OHPhNpgF3!%x)o(HvK!sw32#S)}y`;>&pXMQ17^`(B#&PAmF_ 2L3xD' );
define( 'LOGGED_IN_SALT',   'EuN!W/-[M3~v@!{;3x+QFR==M7[M@OKJj;vs.!fRUO}dV$]$>E?)i1o`?kWNwQTc' );
define( 'NONCE_SALT',       '?I(z(3hE6}}=@7pkus.d-Wt8jGH#u-}p+1))zms 5@2MmP0wKd``juRYc4iJKMEz' );

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
