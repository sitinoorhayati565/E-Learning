<?php
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Sinoha565' );

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
define( 'AUTH_KEY',         'LU]x|Rn?x`y}&zn#TUC4v<.J9I0lIP+hf.[;==<GNT)~V~c#SO!Yn2;GVF88B/|B' );
define( 'SECURE_AUTH_KEY',  ')gGzlM`@A*arUVSEsq:;k}(H34DXr<}W9`tPaRIU`)`~BfS{dQ0V9!%jWm,g[JLB' );
define( 'LOGGED_IN_KEY',    'b#+5x6Y`s]5qcE;7UYar5yKm5NKUv2I#Iql>%ZM3-M~_~t1Z77`]3Cq)yr4(y[TU' );
define( 'NONCE_KEY',        '+BMZ1:Y0hxe ]F/wGawR~VQ/J /dKrIbqoh|BG%8y_]&yB<;~:,b3wLh7#K;3p+K' );
define( 'AUTH_SALT',        'N=wNMjo66$wvog7.!$Em8<j3t3FOn<B#GghlGL6LI})9;rHR>,PD_d4GQLbO-]@y' );
define( 'SECURE_AUTH_SALT', ']jH *{bhTv*q$@LLIblrWY8GFr!)f_9dWR-X;JyeB(B_,Mq[x/0gt$5+O:cq9D%l' );
define( 'LOGGED_IN_SALT',   'p?Q{m8WUI6#1v_/(sI(.dO&QU@]D19kwuo~S:S#WRZ}hZK7Vf}5h>mgY$MXFoCE|' );
define( 'NONCE_SALT',       ')gPZ4z9U5Z6:%s+8+SZh/+J7es8j.n>bjMn@Bn:nI.YZAJ}wh#!)1)u4fKIOdX~M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
require_once ABSPATH . 'wp-settings.php';
