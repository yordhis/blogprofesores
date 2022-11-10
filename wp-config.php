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
define( 'DB_NAME', 'blogprofesores' );

/** Database username */
define( 'DB_USER', 'root@unellez' );

/** Database password */
define( 'DB_PASSWORD', '24823972' );

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
define( 'AUTH_KEY',         '9g{@&gfA*Y^:Bwl3Krh54xc`)1 g7IpXGRU^0TDboIF7sRi^RPX1<wQRbUXBz-Oa' );
define( 'SECURE_AUTH_KEY',  ']Ao)L&V<#@4O`H|dK8b@5tK8CAs|tl)1}![R>pX*:dAPC~+JJK1V^(o$NYNYpah ' );
define( 'LOGGED_IN_KEY',    '%-1~l*Y#/)B&7;>J0mVCks~w!x-~c/n*#!$a) --d;rQ*NA1$@z)!,?zCpxd/c.A' );
define( 'NONCE_KEY',        'm=ddE:Zl<hdMlMT[3eB$au{rs!2hyi,%xZzE@:B~0~6gE<{fza_tB oV-YRhE3?h' );
define( 'AUTH_SALT',        ']+;+C)@[K7-2UMntvEXPZ%@qJ{P,=OrEf4kjeC.[NCPJ%K(r],g7Ga/Fq?(n|TR$' );
define( 'SECURE_AUTH_SALT', 'glL&Zg<] &C/[qw!ZK0)Y2E,.ef~J*Qg.Pr=.=IWR`+Hzf$pgydEh~vN&;bFLD6F' );
define( 'LOGGED_IN_SALT',   'b&i1 o^M*9>88P]iKB`KN.xUlFm8ltjg<KepxAgI^Bko|H{ub4Hp,N7A 4/?~loq' );
define( 'NONCE_SALT',       'Dr0D?jPRn/sTP]=~,yD82I.!mi[/_cwRN@his[%R:,m)h57m&/h^bk>E+EcOxlla' );

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
