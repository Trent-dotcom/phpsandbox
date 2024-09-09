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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'lRB]^C;A}!l,pFS:a!@`O!!%~$,/~80+_oX5@4IpG;U|apXm<HGMP,Oro6_M}Yd+' );
define( 'SECURE_AUTH_KEY',   '_[2IeeElVzUI_+>1vq&qDF)wQ /VNJrBmX|2{BQnA*D{U@nAJ[FCgqq1@e/jQyRE' );
define( 'LOGGED_IN_KEY',     'U:9(ZsSsuIX,zknCuMxX#:-?V_f_?=aNRE(([SSdMi,*b(%/he)nX,dB4S!sKz/}' );
define( 'NONCE_KEY',         'aDYk`$yU!nM`Wx~9841tXM _faB+lJ}k$?b5A!VCA$C_>n*,0z!:leuom&`r/>RL' );
define( 'AUTH_SALT',         'e$dHt<x^/z0-98QJ7005e@Ub:[>w$&{?hd)^j%+5Zc/ov+LC4de|0YcAjM)6,q`T' );
define( 'SECURE_AUTH_SALT',  'MlF~=$0Gbrc}u)c.iQ6wW QtGB65ZRNk]h{BWg=]-gf1;<:_>TndYr,X)(6ulQ6M' );
define( 'LOGGED_IN_SALT',    'RP-X)jZz!kD;UtF$dh[q=|g5[DTR9-t3gx8adi5hI ,^OjA(V.H+Ro0AbO*5XO5+' );
define( 'NONCE_SALT',        'RC2p6c~3R^#$(ERoE#~%+S}?r}AdifWiZr7e,4~D].RVwMV=2~_Iq7$R4ix!L :;' );
define( 'WP_CACHE_KEY_SALT', 'd<rhKR+S.| #/1-V@HK`W9y*8g+{|=IqrC<~b6BE2c43%)zbyKFR;.7.T1^?ER_3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
