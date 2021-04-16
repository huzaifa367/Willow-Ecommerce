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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

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
define( 'AUTH_KEY',         'nIK:0QnrY!qVG:UeMMv.UT0}i(HuW=/t&Ls-}@t&83Bg^hvT&f!>+lkDm9?2srfG' );
define( 'SECURE_AUTH_KEY',  'M>V3/,?K^9xI:J,zOS`Z=:kbK9<}kZr6mtb]JHbu?$7]hy<`.rbY>|%-gV<k5*x<' );
define( 'LOGGED_IN_KEY',    '*$@ _J4ZB,WJ/@+cup%v`{&Oy.{H]4dLWnPiQT*X24,N?PMG&@ikZxjXj%oEQ65.' );
define( 'NONCE_KEY',        'Tr9(G`}(VaCn2f8kcHzby+L1~iN=c^^a]nO[W2=Jf0[ 8&e:t+lW%*A7$vL m./]' );
define( 'AUTH_SALT',        'b;<CAO?zgnk/je-aG^v*PRT<_<M !oq/;j%KI?R?VIW!{m#P}r}WiTlfK680K-JM' );
define( 'SECURE_AUTH_SALT', 'st_p/{uG[P+f3A=5O/4#Dib=,O/xqvY9o4]eYOZyhcqrsI[G2tsSRY$X?_R}YLRu' );
define( 'LOGGED_IN_SALT',   '#L>onbF+}eE2}7M@bf[e](A&/(}9fY:l!kmY97ZrX~(78]5U6[:Vt<^,TF[Pn2#_' );
define( 'NONCE_SALT',       '$)c5%9PYa|FG=2|g@bnDy-q+p$/Ghqi(L;v-63Phu`#)E . %iib?QHsEJdhrO45' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpecommerce_';

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
