<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'git155_dreamhosters_com');

/** MySQL database username */
define('DB_USER', 'git155dreamhoste');

/** MySQL database password */
define('DB_PASSWORD', 'EuF^ZPi^');

/** MySQL hostname */
define('DB_HOST', 'mysql.git155.dreamhosters.com');

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
define('AUTH_KEY',         'P+UU`J"cGOGZ|:iJ5jjZc(uDk170gY^RtI8s4MGxKul/Zq2:s_(B2Ie7O;vR~4!/');
define('SECURE_AUTH_KEY',  'GpR)acF*z04F68Lw3Hbokn?jD2Y^PM^p9Q0_A4l3gidxYfvjPm1^TBZ|0EL"NEfd');
define('LOGGED_IN_KEY',    '$KZw3H;pgS9Ev7@4bqyfJ8I+Vq"cT#NIWwzQef_|IARRpNKx(0k(?:U@0Sk`QvN:');
define('NONCE_KEY',        '"0z^/6Z;@DXjZcES|cRjh+Oc*FhXMyPN3^v43B8SD95$h~RJCH7V^7ARj+YoI*7t');
define('AUTH_SALT',        'U+jrmBE1VIr8;b5P$UsL@J`rqB#`tjTXd%$%~:ttAYYj#@n|@a)AwB%)!OF!edy9');
define('SECURE_AUTH_SALT', 'W4"9mvA/G;%c):v#F3%K/AMEz&:Iu29tqU|(&BIG?bw@DwqvI7Ro"%Ki9$6&zP:z');
define('LOGGED_IN_SALT',   'CvsHH^~vA~KQpKw|s*5DxOZWhSQU7e;@HQkg3McdDB2!Be%ircnD!|0iLW1OdqYc');
define('NONCE_SALT',       'Dr6l05lw3aCJ@z`zhr)$0v@nk6jUdeVb;:EI0M7%T|aq4UnEeV4?6IwoKWEsEA?M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_n26fuw_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', 'https://git155.dreamhosters.com');
        define('WP_HOME', 'https://git155.dreamhosters.com');
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

