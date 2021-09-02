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
define( 'DB_NAME', 'wp340' );

/** MySQL database username */
define( 'DB_USER', 'wp340' );

/** MySQL database password */
define( 'DB_PASSWORD', '.Dqrp7S-69' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9uzd5etmye9kjow3sradnk4justzz76qvzcnxahxnkekqvxgsaukgblmi7jpkjfn' );
define( 'SECURE_AUTH_KEY',  'axo35zoldkrroeuuleeybpaoxrbdyscbfxy6ovmnzcyvwk6qsjqeumcpm60gej7x' );
define( 'LOGGED_IN_KEY',    'p4y3epvvxcb91wrfxokwm9y4kpnzh2wqah1wlinbzu1f2nj8mm1i1ksmgwjzufqd' );
define( 'NONCE_KEY',        'wx1jiye4kgvevfxisibt1f5lg4tfjogmkyghubkgd3q6y5stgjbawmb1goqltyy0' );
define( 'AUTH_SALT',        '3erbv3uppmzqprluyhpc15jxekuflvdksdmtjcyl5f4vame6jelkxmekisf2uyqo' );
define( 'SECURE_AUTH_SALT', 'paryhs6kjdfusobehmyaookixvyjdv8st31sxmbgu6zgg5zjogzl3afxqsmeye6s' );
define( 'LOGGED_IN_SALT',   'ao3tzy6vzlrs66dmk99afxp6vycwzyfnq6l9rifshwvusnd88jmhjcuint4cj68s' );
define( 'NONCE_SALT',       'bgnzfwfofehpwi6lptyglxpnzgmvmkn5g6twwkxycj8e6khcxhrvbis1tceofquc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdm_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
