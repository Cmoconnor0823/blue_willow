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
define( 'DB_NAME', 'db368954808' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*PHQEP+*/HTg%c!(i=P{Ed~)sAK6HjW#B?{:Eark4^^38AZR3X%p1!N1C,`yTzfH' );
define( 'SECURE_AUTH_KEY',  'tOMeSYmbcd5<6-CTEr~3X{IFaHq4*m7s|YxWo9X`h^K:U?2D#Hv)5_3.2utu=nB=' );
define( 'LOGGED_IN_KEY',    ' yqM/X1O:<[1rjJ&OX~8/{rwwq&^[a%$ts$91,O0BxzZJGn*v)5+~Qgjb398;PcB' );
define( 'NONCE_KEY',        'Tyh.x>n;w#6i`s5NO(.:c/`7:5e?aR;Q9t,~n]c=+[np6Eqp%=XKww*%F)*vSC.9' );
define( 'AUTH_SALT',        'ln6znfB?~&Gz7wu8J~.,Qd uI]nDTsznj*(eGNJv8m<(8]vEDxVz=$K(F&N<OB[2' );
define( 'SECURE_AUTH_SALT', '.1 gEX#t0Zd(:l234;0`S+/@m$B&OKP uJ%:.f+_=kdlYbp2}S6AXFdNK<9g8_Dc' );
define( 'LOGGED_IN_SALT',   'PTOh:!GBO[LA5OIj;muJ+VzWLCfRmAYq`]i&#!Peq|:T-s[)4f1DE}>EC1=  (bs' );
define( 'NONCE_SALT',       'l2boeX,7jf`^/`MJoLZj9;HqmG#_WJCbwJOf#PO ud4X/cbz/be9K*8-5yAt;@w ' );

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
