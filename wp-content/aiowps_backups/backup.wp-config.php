<?php
define( 'WP_CACHE', true );
 // Boost Cache Plugin



/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'HEpoMfV2pIiKnK2Uuq5Blw==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u298644974_ainalarrab2000' );

/** Database username */
define( 'DB_USER', 'u298644974_root_2000' );

/** Database password */
define( 'DB_PASSWORD', 'V1Kr$&^iZJOHBm6POeHj5I$v' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Z48x_SrzEwPS?AM-;{C {Z4Lv~#j%|O8dw8nA<4>uGHy%+_#u6/9Rf{ O~e#!!4Q' );
define( 'SECURE_AUTH_KEY',  'kSP_f63g`PCUn}I^tV|BChOz9KRD)^iEHA1kdl#])-Gtama$c$@;tGf6#N^i VMr' );
define( 'LOGGED_IN_KEY',    'nxxoIwyKIP`Y,jJl:5Jb?w_q[w4UAqKl=dhs64|vnPOD(AkN@l*{`uc}YBmUuRN+' );
define( 'NONCE_KEY',        ']Y2L6-lk>YgH)1!Ft*&qJI%<mu]~dn~,|MgM/E3`ZMM&kVRI?}q<3)gU4#ScrT:*' );
define( 'AUTH_SALT',        '^#yKjJvp-=MLIMQ|(per^.9CI)eV6p>`,#Sz~6+v&JAGs{8?pi,Nr6cfy.^uc{~`' );
define( 'SECURE_AUTH_SALT', 'S8mWFfT+ v6R?0A)1+7 H`X-RRAVGo?{o`[+WG;-ZVOWU[Grkm[z.vE&X$~Q-1f*' );
define( 'LOGGED_IN_SALT',   'L?$VvfxUK0<QE$Q$!8zb3#U2!w7NP=G6ERr-.CFrg k9Y&w=z?;%QJ`=-eSCJ`%E' );
define( 'NONCE_SALT',       'eT#KNTnMrZ:Inx~7PT=8l(OzK $GPsy0]Jze].$G>m]z)2KU|/h^*32KuXyGflL}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bwhwa_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';//Disable File Edits
if (!defined('DISALLOW_FILE_EDIT')) { define('DISALLOW_FILE_EDIT', true); }