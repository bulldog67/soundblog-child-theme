<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'soundblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'uNP`e7cx>eR@sBi|$Hy,@iAS--R?Z4:d<.H/ICJiIK]~9B;wo `!-W.RWVkS?x^w');
define('SECURE_AUTH_KEY',  ':]Ed_)=e2illD>#gyQB)I6-sduUeGb&TmF!0AkRqVs)dsJz>}Q!q]4i < Jd&xPk');
define('LOGGED_IN_KEY',    'xf4~kb$]=Xy>fw`hI6BVb>i4omOgBtgs|r#pX2=0+l@nFB3406V0,)ON^ToU0Cdo');
define('NONCE_KEY',        'p!smQvnD?BzM&xj1$q^?3EQ$=KKR({ZpXEV;2L@ikZy&M&xg4`D=jaAkJMr;2Fu)');
define('AUTH_SALT',        '%`eLg*A/J!deN;GDOC{DCFsIAh9GVEN_DDA4;8609&~LXegSWp9bcvQ>C5h_Eqg&');
define('SECURE_AUTH_SALT', 'M12SC=%D@kuW+Mip7Bi+RKMK8UzHnR]]#MbaQ7gM{DAha{&jZq`1#@3hW26Wp/A:');
define('LOGGED_IN_SALT',   '/PUGF<s,gg]OBjej!jx~%6l*S)pFF0e#@D@dn`0[G~0;*i%,pVaGQnlKaIQrPEaU');
define('NONCE_SALT',       '4M01|iSvu46+<^YP4K(X8hV{nkz21,Xoa$nm[G+~:nV?yzp6|<#l`0~Sdzc@Ti~F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//Enable WP_DEBUG mode 
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
