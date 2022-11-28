<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define('ENVIRONMENT', 'dist');
/** The name of the database for WordPress */
define( 'DB_NAME', 'ewelina' );

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
define( 'AUTH_KEY',         'rU-fd,c`-`b:p6be)7hL9l+G=re[fQApIym.<ii=F>h~nhYlo3px&~|-&&-B{NC@' );
define( 'SECURE_AUTH_KEY',  'Y@zp>cI5eYw].H{x:dh%,6!t<NTolT.|<%XuB/,lD:pk#3NeG/z:hs6MtW0EDem_' );
define( 'LOGGED_IN_KEY',    'c~d*?S~IqKX|ZRYG~eyWKobt@x#f p|e-T*=;_SMJShs0F|y7SI3M,VX+zP&_W_5' );
define( 'NONCE_KEY',        'r_~WT,m`8mB=x(QLeX]mwU;$_f8bXIoVDy&1BQo.Pk?eX[_RZW,wJJty92U4/K_U' );
define( 'AUTH_SALT',        '}ADu^h(j67d<xLJOMHA3DZR{/M9nWMgoDwM5:/>J5k^@z!;LzCbKR-`3*Ex7!pU6' );
define( 'SECURE_AUTH_SALT', '^(Z,*d lV5C}wslYt#rXN &.+#l|vEmcW3qeIV3g&g.iNg#U9[;IS5[;U+cxuHD1' );
define( 'LOGGED_IN_SALT',   'k[-h`FTtFh<.~2BuXt>@k<HsF+o_&fUq`!6x5qrtH@E3*_4H=7HQ}$`U|2[7];f[' );
define( 'NONCE_SALT',       'Xm.nNlF($AU[}o[fNueLgV0,0w6Iw1*5)m8T=wfs:0~f)gg `dCz<QlQVMwusa`U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'devmn_';

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
