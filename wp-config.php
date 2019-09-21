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
define( 'DB_NAME', 'the_app' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'boinet1234' );

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
define( 'AUTH_KEY',         'JiF1j[jFWIhgZ,)hq)u:W>X1Jvdkmktv[4nZAKX_4w:GAg8^YmVWHo,CEfZc{@&z' );
define( 'SECURE_AUTH_KEY',  'IL0VM64DA,#?AqQCmd3l-(#.:>v)`x1/Foq |TRxyOM6Qh>uDe)Yv3H>HY3$wKRR' );
define( 'LOGGED_IN_KEY',    'ZBXF(nh`)]0 =-`T7NI~o!C3[DD]f>OvRK78dRATu18`RF|s:}Q>q@i<~C11HosV' );
define( 'NONCE_KEY',        '}=,@hZ87>i=T9XQ;5dnk X-|wJLf7?!{&_y4g_&wOJ(=Spq;}9znZzE1W:cIqc,&' );
define( 'AUTH_SALT',        '24@}Gg94RGV31HhW3N%rlWYzdEXHc4y5c3P-w~v`-xy`b%Le3lK=PgM@0h2)+IMt' );
define( 'SECURE_AUTH_SALT', 'db(PHN=p^*E/9]xuq+-5L0};R3-8ZPmk%O7*@HzIUVbHfU&z~09uOU1keb@4}jsp' );
define( 'LOGGED_IN_SALT',   '9-6i+CM XU5qGJ]oJu$GUkyEkC`L[IVl|/anb]h/*7ldsu=fnck{*YznVO5Z>xkF' );
define( 'NONCE_SALT',       'd@~>FqP vj=e$y}vIZFmYja+8P`/g1*,+urK%NS}w1N!ee%-*p4`=E9Z]Wb>LQEQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
