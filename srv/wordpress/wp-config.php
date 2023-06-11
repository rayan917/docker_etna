
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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'srv_mariadb_1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WPSITEURL','http://monsite.etna');

define( 'WP_HOME', 'http://monsite.etna' );
/**#@+
 * Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.or$ * You can change these at any point in time to invalidate all existing cookies. This will force all u$ *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rb$~tx-8P?Ly]SlykQM)V^j=Q+whj5[<w@/bzz&9U70<-SyBNnih<~X/p~-LKIWM');
define('SECURE_AUTH_KEY',  ')s.ezC^O_KQkqt!4_MW2&{Db g1.q2/bo.=(yAnKOE`[])s --Z!o*~xzN+u`9_1');
define('LOGGED_IN_KEY',    '942izV(#Mh6R;}pk-/<<U5jStG3+6{4pj_yJ7[f+Og82g^Jj! ~%ZjQ|?HG`,bdI');
define('NONCE_KEY',        '1-sn(IdqlR n|+[(XCv=MtOe:S@uyqXL.|d`6R0Ol |.dr<fKLBwX-uStk;70,, ');
define('AUTH_SALT',        'Yw`{eer(C)m-/H#=NSJ7LI}f|[=[g2A$`JZ}AyZP)+]o,~JpPeubv5]):Xd2r,;F');
define('SECURE_AUTH_SALT', '(W|Yw 4v Y>7bzEy,bt{wG|3]fS)_;_Y_)7IDf-eLM;h$X*{|,q^!Lz(d]%(G?T+');
define('LOGGED_IN_SALT',   'DN]rJ~hTX^Gj:nW&`NI!JC7A&6]5~-QF9zI@JBorTv{&K&a2hsutT.;(O!*v>,hW');
define('NONCE_SALT',       's7hVmU^|?=gR](R/:#&_P-rF6K)PPhPmge!U)+J@_Fp.%;z7o&,mQR9P3f|2z7/K');

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

