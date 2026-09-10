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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LAA0938815-imawap' );

/** Database username */
define( 'DB_USER', 'LAA0938815' );

/** Database password */
define( 'DB_PASSWORD', 'Guinsaga098' );

/** Database hostname */
define( 'DB_HOST', 'mysql303.phy.lolipop.lan' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ri+dEtY^{<M2Kf:NKo.n!Rd&=l47kDiboj_wQ1<h5>-Pol]Nyi79uxIZKE?1h0:~' );
define( 'SECURE_AUTH_KEY',   '=#$/ojl.LNCB/I`i~yaI=kv+5.g(8fF0Z /R2h6-09Q[$KO*kd1G#?Yq1I[9&O.F' );
define( 'LOGGED_IN_KEY',     'FgT_/8KT1V]5yK/lKuXI)V#>Ad;#m_:W:DZAJjN>DfN(^ iks=jB=$?|Dt@ZsJ.}' );
define( 'NONCE_KEY',         ',3`MY;~,pK$]PBjUF+H1<-:?&SiOp)iK`/R5)rwc,kK8c5f#r!cYjcQ2GK$MU}w1' );
define( 'AUTH_SALT',         '@h<.eurs1}9`cuamT^oz3[&zW^F(i}4DIN)f#Dx0)z;h+BFzntEMsnKP[MABJMrC' );
define( 'SECURE_AUTH_SALT',  'c&#FE>ovI35TCJ+SW~r.;xR?/f4.`yZD7_ZS?~k~j{VD !BI`J1g_rdJ=j?1#&*2' );
define( 'LOGGED_IN_SALT',    '7S8E!``^3$?9Tt VV$1oH`L;Zw1h>ng?7xulB.1MSZX!>(N,`F:^EO14(IW.[)r0' );
define( 'NONCE_SALT',        'eB~}1h.DP?dCc*.|6w-|e6BNU(Nj%q0cw/pLyUBO2~o*9a_EA;Vucg`1O%-@9oV?' );
define( 'WP_CACHE_KEY_SALT', 'F%?{iCU%!4q-GOG$t>,0$9)r3*Q9?|Da8Eq~^G8(=MCnVQb@twnUl:Nux=A;~u; ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp20240407224817_';

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
