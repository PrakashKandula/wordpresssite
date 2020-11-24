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
define( 'DB_NAME', 'wpdatabase' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'wpdatabase-1.cb8hucz8glzv.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '+5R8jx>ZfIVtEf(sQI&nUs:Kte~>r=|<#E?;i*HgHhs#?8rNc~,rfcg+J+DuZd`b' );
define( 'SECURE_AUTH_KEY',  '^=vWP*d_+}*c`LZ)ML+h`%%}7q OZr^@9@^s!i6/A5HU+mC%;yEsPLQA)+P|SbR!' );
define( 'LOGGED_IN_KEY',    '<4MW^!-plS(Tu~niSWg|?KjX7daca2yD--JycAzckOfm`OWE+4*L6nW.: EE{Qv0' );
define( 'NONCE_KEY',        'vfO[/E|TXb>6g|Qn/][RN&A]y.$DC-a14%O^}f~RY<HdY%!B4>u<1cH8-5%JHHl|' );
define( 'AUTH_SALT',        'H.mv+6/u-d];T+jN;xWbsAbnJmZ|s/1y4.-+W&<,To+wSPcY cl<TFG^l1Ps9.`N' );
define( 'SECURE_AUTH_SALT', 'E.kL(1OYP]hq~h*69#|*N9-@Q_~O7EiM &U#{+Q@P-aO^ffB2v5*INg9Q1jE61/`' );
define( 'LOGGED_IN_SALT',   'n<Nn)hJ7}<l!G>*U]^Smpbe3fmb;#a*wmG-`5XEXDxzp>C%(ZDOG!^(w^[({^!za' );
define( 'NONCE_SALT',       '`_HYj%mih=[R8+5~aR?w0pZ$).6~%k4JtmZ/a&3&NPM@^#DrvAcF(<xs7Fj[!TT&' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
