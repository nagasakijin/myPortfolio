<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAA1548644-arklzx' );

/** Database username */
define( 'DB_USER', 'LAA1548644' );

/** Database password */
define( 'DB_PASSWORD', 'EUeI6ejlJB6D1ApM' );

/** Database hostname */
define( 'DB_HOST', 'mysql218.phy.lolipop.lan' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ih%#>GNU$Sk?AiwN]]anjPh{tHbp-J=2.1KR?kqVty.d_z:O@z%j9[t6zv*JTNkm' );
define( 'SECURE_AUTH_KEY',   'U7c5gia)C2[:Mbr~9G~,)(12YOvp/<x+M{gKU]46&p59qvU-Dn:K~m:m 4hJh5DO' );
define( 'LOGGED_IN_KEY',     'hhsvv%U-}.Sk94OBeeBJU:/N[_3:tV4-7-R3U~b e>EtDMhKq~}c)Ir<n6k&4=-7' );
define( 'NONCE_KEY',         ':?+Q!rYAPuG>,1rY.2Tg=#bQGQeH7{F6fV;,9qgLyd?Z U(=544kdlLI}acNQhuV' );
define( 'AUTH_SALT',         '}5oG;[rjqd9n3Z]sk#Ct}fjxeArARyw13opx*v)nA(Wi,l*%enua?pxE>e?0)A1 ' );
define( 'SECURE_AUTH_SALT',  'Tqzd~b>|F<E[D[UP]59|%M?2DA-x`9k:}vp3}Bgd*9yS<lrurvr%_Gt/y=!NlOkJ' );
define( 'LOGGED_IN_SALT',    '0GL/lIPQki,6-4c)3qa}%E`Ld~@m{a$({Ate%5?wq.aoBCga*!KsD^q[f68r`+>;' );
define( 'NONCE_SALT',        'gorVoUnAE)-Z)[0ve EXJNP3G$s[F]|TrE)%pzVK)#-}{*4Ue]BA!,:io03iiy.L' );
define( 'WP_CACHE_KEY_SALT', ')QEHy>Td`qkjBc9zZZ.B/wLNQ9ZeQ$^NQ-cb},P5}vi8%[K<l76NJ)U:fo*jzCp5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20231001120420_';

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
