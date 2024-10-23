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
define( 'DB_NAME', 'mysite2' );

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
define( 'AUTH_KEY',         'SZU+K~jVK]{$/pfkGI@DFS%2 44v605x UttlW*g9j-w<nQ)kV+K)$k%uM1^T@UR' );
define( 'SECURE_AUTH_KEY',  'vj9xW/ P|GSB@<bhv$293d2+?zjN,UDP>ap_GT7@;l:h_dU/y^{t;1J,L*A>I=2u' );
define( 'LOGGED_IN_KEY',    'sTOM0&B(25Av8OvlF$&^/P-367[~JY!>:ESRgeuuiQU8S|8f[zJvb`8,Z~Gfg`V6' );
define( 'NONCE_KEY',        '9RGfhqz{84Bl`$ls2?P;ddl&(PpgvNrfCfY5#J,M;*v}JueI(5b1ukE)$MJ6/v0h' );
define( 'AUTH_SALT',        'xm@Q:zp_[VKEa~_`ely^*jwe0|/Eq#B[{~NO7Z.yMe+,Arg[];wt=G=-;=xt9nA1' );
define( 'SECURE_AUTH_SALT', 'xcZulSYB,1*.?U*&&.lR2`o,/F?z`yP0pK5zjM{Gf/H4Ci>k3YK@k6TQxd|J_)|v' );
define( 'LOGGED_IN_SALT',   'c|o$h10$Ntjrpj3@ewDVC~ _~Kj`Zg4fuw!.7d/;!AUe|8cf4@VYROM@WY/?u`<s' );
define( 'NONCE_SALT',       '+HR<W@`dydjvFL[r*W<&42~9d5yznz[RqRt]%F3Dmk87a`{rciX8O7D/]WOyR~UO' );

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
