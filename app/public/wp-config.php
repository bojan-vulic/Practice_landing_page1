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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UgFSOf9db/oWqP46JGxuK+IqIIoPX1N2LpY538iK3Cd36f2ZxCUlwxKKGgwOah5vLkYtyAtddNPAerFTUlEhMg==');
define('SECURE_AUTH_KEY',  'b04MNcbrGAGtCN7DqQYY9cygRr39x7EdgnZBGw+K1s6jmgBt0exUsg5CLmPd9pV4Onn5r8H9UUtgbI0bTjcRNw==');
define('LOGGED_IN_KEY',    'r1xLnl5YymTYPm6kQfDLRgPIjzdAtcvAzDmdsUi+WQhhPJgVm1flu+o4mN4PtL7nP5BDCxuJj+duq2C+q1N/OA==');
define('NONCE_KEY',        '9NaU97ncUf8uD8YYn2xVqrqWcEu0RMPuBnGRvqUjeBPJeBuZB1nXFbLYOv1qgrMN75dpZtAFXmbcZ882jVD0RA==');
define('AUTH_SALT',        'gJcsPAWSDUa9raM0BH+okYaTa7Zmlb+LiCop/L6pQ+lHteqyBojtzvIDfVmCwV4r0AdACkJiSshS1ozYKqrNMA==');
define('SECURE_AUTH_SALT', 'Aet5C+ZYH7W+796xTh6t+dQEjlPLEQYyYpgP6IGW0TdvoGtmLSXSESZ1Lh7qbqIUnqxYSQeyTRvTY9xPyijAiQ==');
define('LOGGED_IN_SALT',   'h1pAcy1YSFDbGS2XPCq5PRwzrSpsG/Z8w7moRhvAR6sHp0EJae9S5Y1rHCL5iEzPthFryQg0f080uXpnAbKZUQ==');
define('NONCE_SALT',       'Xsg5iNenP8Sr7PVhWdZJb3DuudY6BWHb7P+ZyPdznV9c6l72r4sVxtytIRWPqwCZaYAUiIF3nlfPOjAeQtrfMw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
