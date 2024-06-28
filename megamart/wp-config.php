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
define( 'DB_NAME', 'if0_35691031_wp91' );

/** Database username */
define( 'DB_USER', '35691031_5' );

/** Database password */
define( 'DB_PASSWORD', 'M2.UC1p.2S' );

/** Database hostname */
define( 'DB_HOST', 'sql203.byetcluster.com' );

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
define( 'AUTH_KEY',         'cqfc6eddaywmmhbwf7xc16nvfrfsotrcff2ibnwgo0tgp1v5hwdfze2s9blmfyo3' );
define( 'SECURE_AUTH_KEY',  'q0t27bgk4b0wocut8d5uy6nqpsb1ajo5zsfpvcot3jewfdguxf8ondzjmeqnbhg9' );
define( 'LOGGED_IN_KEY',    'hynt0g2nlgb88xgdwjohevlpdibdm5mpi42y4l1vvbmu8wi66moqvsisfvmsufgk' );
define( 'NONCE_KEY',        '0hsdp62xk1wrps6ifjwcnf02zcud8lpmyklsig1zibdevlarsjvct5hdxwfbsmk4' );
define( 'AUTH_SALT',        'hqxcq0iii6hyklmzm1hjijgedmj7a5khwzvc4igvkcgxti1t3piuyorc5d2pc5ve' );
define( 'SECURE_AUTH_SALT', 'ejufekloyisbglc7ooerkzcfvaybrcypkp3jvygvgvtrdsir8xbokutrrbhamj30' );
define( 'LOGGED_IN_SALT',   'st9mfvqkdo0rjoyjnozb5834qvjdmymgel3apfvrr7irucmr1zwycbh7ftzxfeai' );
define( 'NONCE_SALT',       'wz49qioxylgidgsynwkxm3285uwk7cmuw3iwlfhmgqkbn1lr9ykzgt3nhy7msmbs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbd_';

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
