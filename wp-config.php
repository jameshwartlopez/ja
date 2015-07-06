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
define('DB_NAME', 'ja');

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
define('AUTH_KEY',         ':L$_/ka`W+UiEio`oKAz7Py []pay{z{jS.{6R?UN^vAZOj-r*1cozS&i1vzjTzo');
define('SECURE_AUTH_KEY',  '5U^9}+0q77Indmo0EXF^h|S>ySYaZEwn89x +58%}f}XsR)=t+7G+WKSQX-3Y#(<');
define('LOGGED_IN_KEY',    '`Uqb.+|k,ILe|l+QJL9,x=wasK3GwA;=5[A>}cPfhKJbK$?`r[J Z+[@_D[zX`am');
define('NONCE_KEY',        '_O-dNP V|[.|884L3XHOW@##s,WytLBU6@NF&[hUUFU|]%#;4B:+3_OATRML3FdT');
define('AUTH_SALT',        ';k}{xNsOA*%m-Db|sdaB?,pGO Ff#V|.-?qvc!o%NX|E^hcK/sd+pS=Rn(lf0cs:');
define('SECURE_AUTH_SALT', 'L&Hs]v]=?#fT7jjt(u0H_mZoBO>T;X~F^-NF~1)|Jh6g*{im<>z`:|=h{1kb:4Te');
define('LOGGED_IN_SALT',   '0`ykG*w>vY9KzFBa|-gVyo$3~g7f]fjB~fN>4BkFx[Ipog!,4C%::.q#XAO=WOv|');
define('NONCE_SALT',       'R66jXMU^napa%A|e+Dpd(~tSD<zzy38YYZ|rXmlf>b#rfI,0bnqY~ka*r|a-?iay');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ja';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
