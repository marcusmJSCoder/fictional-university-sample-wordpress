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

if(file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'udemy_university_project' );
	/** MySQL database username */
	define( 'DB_USER', 'marcusm50' );
	/** MySQL database password */
	define( 'DB_PASSWORD', 'D!al3ct!cal150' );
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'asdfasf' );
	/** MySQL database username */
	define( 'DB_USER', 'marcusm50' );
	/** MySQL database password */
	define( 'DB_PASSWORD', 'D!al3ct!cal150' );
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}



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
define( 'AUTH_KEY',         'z/Y7P#9BSYZ}v=Ag:.2%A&i;m;s9z5V7vHOc>G|v$MZQUJ2i3]/[Jhr|_8hWQI9>' );
define( 'SECURE_AUTH_KEY',  'k4;2Ld{waT!Z,-0GkfXXHX(7A>B{c4iLxX[Sb2#+2X,UUuq7+>RXjLWr@Sk%o^LW' );
define( 'LOGGED_IN_KEY',    ' XGqpMu6!E{Rpwh&DR9*4^x}0x5o,T9 0TvU-x((0y:hOq:<+ME}>/z6B-b89V11' );
define( 'NONCE_KEY',        'Fn8{>w x/nXx2:0zOJr+y,;it;Zr.tyVa0[C}b_IHhi@vS&*w) wn96({F,yFizc' );
define( 'AUTH_SALT',        '#L>Iiii_ S%l6= UqH}81U#SVU?j7dv;99q5G^b[sjc_^1EiUXB|G^Z)4!L=+L(S' );
define( 'SECURE_AUTH_SALT', 'd7q%10R~ .@_vPvM*##Wi75%E[%^0SQ_Up[P)P{Q;l{g:e^N,NdAwZ)sO>xM@*uw' );
define( 'LOGGED_IN_SALT',   '&k&k!/,`gIP^} @)n;r[ZHESNAq+hR+oL~fbS#@{a: r,Njng8;A(7gA?jH`TGrC' );
define( 'NONCE_SALT',       'pUlk+HDGs{DxvR}]_pdB>R25uuD(kw@)?M05.W],wtkmE~,s{1E-z(K4f+T$<-m@' );

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
