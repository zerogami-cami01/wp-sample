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
define('AUTH_KEY',         'K1LiA5M0/F+cAfQTorL/dmQMuDRm8KGws9OambQCf2bIwzqCMFpIFvFKylPViMYkfGvQwKisWJH1HuQiEo2OTw==');
define('SECURE_AUTH_KEY',  'dh+L95G8RY5GN/zgrm2zcELS7RFewc1Z3jC7ls0bsd5QgURHNYh7AQJ0M6DSRbjp+MqR1xZHeEdgmVt30wmKlw==');
define('LOGGED_IN_KEY',    'FtO3C2596ZlqieH1/gypUpwTM+poNfvbYxEl2KMGd9JlZpE4OXQtMhBFXSDHaltn12e6TcMqY9RZxzA1y24eGA==');
define('NONCE_KEY',        'UhAk1+CA7MZDbKryrbi6OfPZp22/Si/gmENIQ+uIvJON8vYNsRLyzPeRVlq4WtZjsIi+d/LLD8snE7Rkasvr3g==');
define('AUTH_SALT',        'NQ/N1fW084+uQVOdxEeNIlIxKOwRPdiV78ytgsLn68Qk7XboLQHuwUOClVtz9NoOXtKnYKAi9saLz1deQeBA5Q==');
define('SECURE_AUTH_SALT', 'fIb6kGOy6T+I0aQyOSXTUg7mzY/7hqsIdI5mU/njObwTPRvRfPp85RXZRUVgo7iGB80vDGLB64WNtS3wTUh4gQ==');
define('LOGGED_IN_SALT',   'yKr0c14Rm4iNTmryW1uUfmfVWRehW3cl2sW0GAg7YlOkdNK5c0LpgHr8+WIBM+j3SMqhZX8Q3+NVm3ZLjHtVsQ==');
define('NONCE_SALT',       'lq0aNLQR87nru5myp15CV92a0mTzoENbP4sJNH2M30MuxZXMZK9E2YHk/0hgAX5m+CivgrgaRCKh0HkxRBrOWw==');

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
