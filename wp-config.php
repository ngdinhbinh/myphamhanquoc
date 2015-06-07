<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'woo_');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

define( 'WP_MEMORY_LIMIT', '64M' );
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
define('AUTH_KEY',         'vj!_SG/c}DIE88.~d&>pI3/B50/)z)n?-6heM05qp=c/:)>hR6!&t.MB>Cx67c:,');
define('SECURE_AUTH_KEY',  '9-<xQQ2|)MS&BJ<)=kkZ-#e#N)|MgV ?3kt^,6f&SMI(oc--upV+u/l:{7M8q6m=');
define('LOGGED_IN_KEY',    '|$E&S?U+Rp4}mht&j5oi/FU/Ar}R*CBwp@`+0jur(G.Vc6qu[Q~v5BM4;V~RFthH');
define('NONCE_KEY',        'yg82+x|q,#d`m=+QvmlF4D~c;%#_cz?*Napl+-0CgDm?97w;BqHoKi[U|+/-jfz6');
define('AUTH_SALT',        'd$Ybw9e{Hn=<[E&!1(D-}#&`kXq{jo>Tve-Ey/oE|0shlHy_/yOTZt!=;6[83)Zf');
define('SECURE_AUTH_SALT', 'Y64?.4[_Kz]Y%VV9d[xdASK6[(NQ5IL]V$E>~OZQvRk&D@zm3h,~)pmr|ka.OHoR');
define('LOGGED_IN_SALT',   '?F=;UyA*LG{k^>/7Mqks88z?]z`92kNa-KTLqcX{>b?vshpcMb$5;]p<Zm%N,CO+');
define('NONCE_SALT',       'W^1gaXluN;u{|T+lG?h`wrBYJp4,iY@!mhICN_2=&=a4E;mMM8=>7{F8SAyI1`?v');

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
