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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5.YTA{X|^`WAO8d.zrR,~L8I-9NYXK{.;mr?|ZH.z$~0<#Mnw2T={*uw$A=:ac-u' );
define( 'SECURE_AUTH_KEY',  '+|3iy2+s1=br=-7ut ZCj&XEPdeJ~&:ZO^hK;3v$IE5]EKhh8clUak<m)&tgh<Id' );
define( 'LOGGED_IN_KEY',    'ETPMC/Daa%tGYQXTRYZy6LprNKeR`DQX6Mf?kV UH}d}@{|h[]d=|T6%2@KDv9-`' );
define( 'NONCE_KEY',        'x4%9:^0kLa!NzfjAgd{zT@a(*Fk}OWP;PAeb]h!y$xb+ #YBT9{L .]!/-sFw$_u' );
define( 'AUTH_SALT',        '{,`hbS-cfCVWt7}HH-^K{Ss;Ffy_mwnl*:~.hLrtZ; +gE<}?Z;JC*iHQ^fGvIHk' );
define( 'SECURE_AUTH_SALT', 'aT:XeZC[@zch{kp{q*2?+b`Ct$9@qd!oyi*2!_egkeRJ0!,|X%a6qmkU*602jtfU' );
define( 'LOGGED_IN_SALT',   '//Lm,*EjGm+m.rZC3Ds%GjWD#@g_3;Y,a>w>Hps}#H^8]XxAwi,?!`a_5V#,^t}_' );
define( 'NONCE_SALT',       'A3^18wrq}vdn,cv9.J#MTaK34_dgZsL~nx2m{*M1y[1&@nKRMbp+5XCOXrnH.-{3' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
