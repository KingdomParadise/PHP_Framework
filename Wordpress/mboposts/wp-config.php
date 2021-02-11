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
define( 'DB_NAME', 'mboposts_wp235' );

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
define( 'AUTH_KEY',         'dicjv1zihyhbfbjjjuupmktifjamkdsxar7vd63wqocnwv4nkp1qo7b80uuxcgud' );
define( 'SECURE_AUTH_KEY',  'yfv2iqchaff4ncvngsbcria7myvctqycaxujc2fgxp5oxv4ri39aiu4qkrda3ayi' );
define( 'LOGGED_IN_KEY',    'ypdpzkgkqmcwmzhwjuzxjmvdfkwyzvkvvqnn2znrwc0vuz6kxiqu5hbwc86axy49' );
define( 'NONCE_KEY',        'puhuzoo0pissse276udmdhkbpwncy6fyxamqdal5ca8d14lwher4h4lfkja9xhpt' );
define( 'AUTH_SALT',        'ujpdyuzd5sc3ak6ordi9eqoufizicvfza0wknpkfuj1slykaowoubwwjzss5iiv8' );
define( 'SECURE_AUTH_SALT', 's8okuwijrf82trflv989jha2w1eq3umgrwvlezszgak6zbjotoktg1z68umbvchq' );
define( 'LOGGED_IN_SALT',   'dtw1ujtpywlylnpxvnycopyl5hrtmzlds9j1r28flbul3zflgxoguh7ro5k6vm79' );
define( 'NONCE_SALT',       'h00mn7nobmj2df4blkfpj6ewa5topmatbggq3jtwv5xyhr4i7nxgdbvbbqo1lqvl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfy_';

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
