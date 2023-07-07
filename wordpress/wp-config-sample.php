<?php
/**
 * The base configuration for WordPress
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 * @package WordPress
 */

define( 'DB_NAME', $DB_NAME );
define( 'DB_USER', $DB_USER );
define( 'DB_PASSWORD', $DB_PASSWORD );
define( 'DB_HOST', $DB_HOST );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
# to completed
#define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/path/to/wordpress' );



/**#@+
 * Authentication unique keys and salts.
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 */ define('AUTH_KEY',         'pvDF q*_eev7)n0u6V}<3#{!.B3oRK-{y|-arE7yi<EeC,<P_5](q^j~#vUf1pT4');
    define('SECURE_AUTH_KEY',  'qUJM-q:R-wzPr$VOR<lB&E#fJq[-S@(x-*nB`1~O6GH0ZVh.c^/vnR|~jSJK<?R%');
    define('LOGGED_IN_KEY',    '&7(@wZf/^44Db%Lf]x@l+`e4TBF}7q E e2|vl]>_wb_0NSVGL#Ab[Xo@m_Oz+b$');
    define('NONCE_KEY',        '3bE:Rf,AShq|&KU34*kMF?hiXX y}zy|u4G.++Qzu-k.;%:J1-Esdc[Z xh:a,AA');
    define('AUTH_SALT',        'Dixoli@Nc3$tb:|o}2U&FD~4?I@VgsA}UcXyQy_kCap;;{]O^|5X`!vK#~JmR?`e');
    define('SECURE_AUTH_SALT', '  )cR/-er;&e7Ocom~7Jun<3V7y|+?Cy<]dxcdz)&qDzCICV++a? :*2vzXq1CI2');
    define('LOGGED_IN_SALT',   'f.6$ot2wu)+3`;J=|D%T|4* -:-q+Bt*?t&3J>SPi5WxB/LJ58||9/X3+T;Du<G%');
    define('NONCE_SALT',       '5-:?TUaP4|haz)~@IS~iK)D7.R?awb+ *$G8mER2_dz/T[2%3XlLS~~+2S@/^X.q');
    
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