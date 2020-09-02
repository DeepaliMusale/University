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
define('AUTH_KEY',         'EspPBk6bxntcjGCqLiKdp0+RY6wmktKyTGZpTRFE5Vbw1BTt9pKJhi9/BxHiaKfruzL90pE0fpHWedIoskMGwQ==');
define('SECURE_AUTH_KEY',  '81WLK4ptfHoSSXrjTpsEqxZBH4XXh4TBAiHLOUZce5u5TBF1+57bgJdMTg1sfaF2uB19kiGff2XCDdxxJNrFSw==');
define('LOGGED_IN_KEY',    'I05nlnwR141i/ggwpF/b8fLF691raHifvdHyyXXMW0wAc3jGWBn1RieS31wCJS69DUa8qkX3CtZGXx/u3D861g==');
define('NONCE_KEY',        'jpoE6jdtDXTY4qG+WXlkW1u81hVfJVrokCyC01QsD95K9mT3rTDjHBpLNWOEW2oop8+Yoipv0hcS65Z3wLEuBQ==');
define('AUTH_SALT',        'u+TDn2ecFo/1Bvj3LN8gFN3hrTN6qgwKEnVBij7C1uH/XD9emAt/UKdIbP5TEszj9ADcimqm5fllDOKIy5rKNA==');
define('SECURE_AUTH_SALT', 'NqeZyqIi/t346tTlA4/D2hh8kyv+TiswXtqyz7XZHZjQJpH1WeE9HyYt53Q7t2GplZQt30M0orrcTsPzSwiOfw==');
define('LOGGED_IN_SALT',   '7ibC/Jya9pwnTB4eQofRdn6mhf3LOfvph5I1DTiY3rZy3jJFVyDTUDzt0VkyqLZTWqPAKBjBoV0KRpe6Vrj6OQ==');
define('NONCE_SALT',       'Gj3DUC+xQEmKuqB6wjiebVJWYEl2hh7f6xXhvMkdWqbfTbh57MHlArIv/zufrR3wtKZ/lEmTi9i76zeWdFXF1A==');

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
