<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']{@9=xcpAn^X5}35mTu:;%VLX0~kiZU3:4:%}%z4>18i~$4BtL4 >G:rW?wP@s.1');
define('SECURE_AUTH_KEY',  'ue~%gkUbJ[*N23r.#Gq)_z%*pk[|3Jl_]~#J;qe@Fcb>+8OK!.l5N(N;l?eMYW/#');
define('LOGGED_IN_KEY',    'yl3t^pGR>BH) }C`}>FLiut1;MM)qasrA%:9@Uk]F0|eN;Dcl?[nWksZm<ti0Q.m');
define('NONCE_KEY',        'b759Vd*jv`92DsA0o]8Ihw0BjC>a0E-]|#Lpy]_{Q|go[E~Qc/^w!]mY +1$E3?j');
define('AUTH_SALT',        'I?D!(b`XzFl$UHZVHYKgF.fycnL3?3g9S]eT6Revr [A=IX##UQlz<UY;Mq>mU9Y');
define('SECURE_AUTH_SALT', 'Gt`Gy{F6aK[N_BX_3faowh=$y|:y=5Cxw6YTyS8Kb(37P3L=$E<sA!KfdXu+!H8?');
define('LOGGED_IN_SALT',   '7l%]zE!7RTU+[Z?>{<0=]sF!lw&$u<S)74 uMiYp8abq)GVJL<QsY&c4R.^o_@3(');
define('NONCE_SALT',       'm7YW&6sSKzm4T(9&u%Sy$3qk|pHl/(bH@/#K/-3l&]AkIyi2BwM+iEOoaW][8uZR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
