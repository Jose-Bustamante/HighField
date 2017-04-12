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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'highfi01_wp1');

/** MySQL database username */
define('DB_USER', 'highfi01_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'A^Y8K)g0]ifBu2AJAG&87^]2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OznpErOKxSL6UWB9vJMRq9I37jesoWBPCkOf5icmiMKUgHHyas1ghs5Hae13J39x');
define('SECURE_AUTH_KEY',  'eXT7g9RcIgjRml0Uiy9iMi3cCxxvKiR4dGcoDHLqrDXb3CBkO4EQkjFlZtdEYUuY');
define('LOGGED_IN_KEY',    'JLL0qPiSpGiE83dyGl6EUtRhhrLcxGVgVlre6MVm2fMqY68R5crH3GWp9d53Nxu7');
define('NONCE_KEY',        '2JNlUDKSDvCHaInVtvykHukaEBNu6K7F2mb9kKsXSHMAxE5z735DELwP9zPHFEC4');
define('AUTH_SALT',        'SzC4gGcnRB2ZsP3LOnY2vKfOIeezWRKZECVhugu34nFnt7Lo2tTHGKD2hLK8pgMu');
define('SECURE_AUTH_SALT', 'SpY3by3WV3G6nfYZQnK0XaB7Jqj6HK2u3koAJd7KP6Yg9Ld030jaLUM90dLU2R80');
define('LOGGED_IN_SALT',   'NEAzHUF6GvVyWqqVrtjTeLYxoHEl7bx4IEJ9feUDGoOroOPgpIZNG53OdRhHbzbO');
define('NONCE_SALT',       '55RhpInNK54kKiJLd5N7RBjXhUVkfSo2WT3lOEsavePEgCQcg76gyIbvYJKeg2R6');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
