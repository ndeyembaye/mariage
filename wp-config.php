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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mariage' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' S=JN:],QL18k#tegO79,*BvN%guACDDtD-=3Gq/TdkKLCUs{={B*c*8A>^VE]^w' );
define( 'SECURE_AUTH_KEY',  '@GpGp+84kZ=zFkE~`Fn(L{%6(MBC-ZD;Aw@$t@7GliFBy$TL_9@(PQ5HnJFys/{<' );
define( 'LOGGED_IN_KEY',    'U?nj;Q-[Za/3:B0K_${G{.#;fZ}XwX]Oc@:A8E(&qg5Q-ub&G vfRs8`5S 7[XF)' );
define( 'NONCE_KEY',        'n2jZ,=Eu8CK0g>&CW;k<GTZ`3-|cU,&.s}ZW> wFdd;G~ekP./QXN[DnF(1!Esz0' );
define( 'AUTH_SALT',        'SI(j S:k:3@!$)BR|(@%d{{yu<WQ5Q2a[{)WOq{_.Kjw_Me(d#c(Vj51E.&mZI&.' );
define( 'SECURE_AUTH_SALT', 'm`VAY,gsMU90m0{$15[:(dNA%[EB3<sbdr%fHM@$GvfeC2n3;Bzk8^j|r`|>bpJf' );
define( 'LOGGED_IN_SALT',   'v12l3hfr!TolPi,A[4yLs6X<q}0;5fTEg2RSL&X?WETj^V&<NkO?(Y,etI*:Rs(e' );
define( 'NONCE_SALT',       '<8b7UDiS+((2NV.+mUkYFNI4tG4@*GltJ+L18P.g<Q=0c[}3r:C4#RqMUYDuE34[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
