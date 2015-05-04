<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'u194010094_cc84');

/** MySQL database username */
define('DB_USER', 'u194010094_cc84');

/** MySQL database password */
define('DB_PASSWORD', 'admin2015');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.vn');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(1j|s,DadOTxH$&,+x38(-7yhw-VZUu*^.]t%J7@Q:NLV<mR:L LIRQ>,vl6/v9A');
define('SECURE_AUTH_KEY',  'x~<IPxvm=J8Q*YTJ-Dj+^&Z etfM+e&8]}h-,_{E0dhi@-nO-sJ[P90.g}I d@Lv');
define('LOGGED_IN_KEY',    'H?9|d|%kCQr#I~^L!,-9h.dsuT%dPQD!e^*[nXLRl1-kti4eF&@6WozD`|xruJF]');
define('NONCE_KEY',        '6Z:e6->Xs9*I)2jW#Z8Sa%UH@d0~!~IL9F,<qu~*rH5tkg(5bC*no)58BXS8uo:I');
define('AUTH_SALT',        'Y+k-[WT> %<3f.Z3 <_rb?i*-w~B7sqe,p:bYVMW5*5kS.d]H.@w[j6-}J[i*_<W');
define('SECURE_AUTH_SALT', 'x>qk<~~{!#($5 O8eh{_>3A!R%n6=M8O5A@wy%sM[8ytznI0BciG>+4T)}b)(|-`');
define('LOGGED_IN_SALT',   '$Rqg`h_s2A|a.jM1Rv?k)JYb|lUJ>r+|}+O2{%Bzw+KFL$QL1t[uFh:E|I>LFSoX');
define('NONCE_SALT',       '1l|wLPA9ntW Mt|yAxhf9u}tP6Pb3E6dI)8j-r}Q1U[(>GZqsMksJt}#5&,- D{)');

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
