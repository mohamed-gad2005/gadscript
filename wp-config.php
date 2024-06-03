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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gadscript_db' );

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
define( 'AUTH_KEY',         '>kqMC|[OUe2{()XT_J#0s*i4J_%rnVNR7|:9SJ(S.3Q=~YXeA/]da=_#MmT{N^G%' );
define( 'SECURE_AUTH_KEY',  'fh2(!YL3SNVw^${Kd_Ff&EwAXily;Pxczh_}RLZ:jx:2.$2(v(@ZH-75M3WV3(}Z' );
define( 'LOGGED_IN_KEY',    'r;9==5xA5.VT]dgUJTakmN0sf^UF/07bd^&Gg=s+B0~d*<nfee9Q)gO;8s-i`CoK' );
define( 'NONCE_KEY',        '=*zX&rEg;b%RX_/;IP7kYKl+lS-&QnkuP}(>7Yt(`xuQKT(.TqoBV8[UEfES-M33' );
define( 'AUTH_SALT',        'X>.Y2Qwit0S]9a;!gO9YEKgX&Uf0a@g=eOu,mNpSoUkki+xmeU7OS^K8x^<zU{<V' );
define( 'SECURE_AUTH_SALT', '#&r:M9i}Q>gn@i_+X|fW_E351w]NU}yw5/%nU;Oiy,/yTB+V#ts*DBH-adGd/o;8' );
define( 'LOGGED_IN_SALT',   'Y#f~.o$4/g)@d -KLeR /P5so!o1Ms8L^)C}E121)qI:bA/v).x0/5b=[5@V5MAu' );
define( 'NONCE_SALT',       'o.@.@dq;%.M$x&#ZnYwesrkfwc0gz.C};kzSX/p8w]W|G0M_hA&q_Fq>=VM$ylXx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
