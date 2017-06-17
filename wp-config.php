<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
require_once(dirname( __FILE__ ) .'/require_config.php');

// define('WP_HOME', $_ng_param['path']['full_url']);
// define('WP_SITEURL', $_ng_param['path']['full_url']);
define('WP_HOME', 'http://portfolio.nicolasgillespie.home');
define('WP_SITEURL', 'http://portfolio.nicolasgillespie.home');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', $_ng_param['database']['database']);

/** MySQL database username */
define('DB_USER', $_ng_param['database']['username']);

/** MySQL database password */
define('DB_PASSWORD', $_ng_param['database']['password']);

/** MySQL hostname */
define('DB_HOST', $_ng_param['database']['hostname']);

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
define('AUTH_KEY',         'eV,/S|&o@2$yK6]{r+2zwzDN++34CTeFW_M=-|WXa-<E1i:5& xhP,l<}N?y~uf0');
define('SECURE_AUTH_KEY',  'Ktjvk`+[-05gi$9|LVgMBR+i|azl(M J#`}J|;7s6)=wt`TgLs[VmbNb}Jz-J<S>');
define('LOGGED_IN_KEY',    '?JmVh~~-j:cfxy+sEB5rOsAqBy,WW]`6AKl%K<-W+f~-)-6lT1<@DbBi9h#cjUNU');
define('NONCE_KEY',        'y7v# fodL@{@.|K<#sOI8SXRDg29&WKqaR+}}eP:VJ{r3B|GUj-&2ch-ufwJy`_m');
define('AUTH_SALT',        ':[dN?eeoMGs:T<[9jEJuO^yfI=v0xH@y!}:%|=x(pnU/<G5U@)<ZgSJ (D|f_eu]');
define('SECURE_AUTH_SALT', ')/@y!,W*^|J+$~wcp^Q(C|cuBUuwfS&(NMHG!,B.E8@TLv%W</OgIe^4-$VKBt4^');
define('LOGGED_IN_SALT',   '$=t,s#Ylsb#,SFfqmWrJV-%_:!vEXEf~0GPGQ?V|(#QNUF<oEBed?^ddqa[,w0VY');
define('NONCE_SALT',       'g4mdexotyzyjdhzmizntyzm2y0mzcwmwrinmvjmdbiztgwyzbmyjdjnjgyyja4zj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ng_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');
define('WP_ALLOW_REPAIR', true);
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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
