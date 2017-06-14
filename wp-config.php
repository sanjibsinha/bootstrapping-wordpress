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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laura');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

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
define('AUTH_KEY',         'pj&(P@5<d}Wn[vVzA!Taq4F+!N!!x?pJH;:agK m!gMzfv*M!5]x+%zix~@+#kD(');
define('SECURE_AUTH_KEY',  '$vh1[}$;?;.gAE!{@+q0~f]<!VZ$!Z{k3l33AwfiQz4nPNwduzjgYJqaZ9XRG=ys');
define('LOGGED_IN_KEY',    ')!a+RM_b1^DX-sg:iN_?zIBxm$)w!]n+1;AC8XEyQA||]yY?}Ch0cyT0Odp7%tGw');
define('NONCE_KEY',        'zwN!!))>#0qZ28e$2+)F:tEX_:rsx$fFlKsaW3>H4]/BI%`~L#Es6|JsU<E4oG(X');
define('AUTH_SALT',        '&iO>7DvL.?`cD#8p8rTlK_FPQd,{ETy(QRQ*!,tIH%()i7e.5le6jJuJ}/06]oVy');
define('SECURE_AUTH_SALT', '1#Z rgydtY3<NtUR$+;yJsculXx-:zjN#[vh;P[!@1IvC4|Q7.xeqXj (,%4r75N');
define('LOGGED_IN_SALT',   'U[^(W(mZY6}Ny=_)Io-*6#P1h(lB8?BvE#PH,B|{u`oQ.k!*+<H&!?/`Z#(bby4|');
define('NONCE_SALT',       'VHF3c~wDXK#|W+OLbiUxfV>2)o,N,%s&&/ZA6|owdRZP/:Vig*n(7,R9T&pf,r6g');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
