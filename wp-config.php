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
define('DB_NAME', 'sample1');

/** MySQL database username */
define('DB_USER', 'sample1');

/** MySQL database password */
define('DB_PASSWORD', 'P@ssw0rd');

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
define('AUTH_KEY',         '-(f}3~s5t,5>sM%;U0|O[=nqao!^%h!y7_m5{|!j.@zffjW9=Ve0j1IQk@o8)B?:');
define('SECURE_AUTH_KEY',  'tlKAEDwd2sR2!ZJgUZ&SfamWrp,:GgRJQvM1I4=F~4WoeZY~r&B2!;T{~$&?~FR:');
define('LOGGED_IN_KEY',    '$57oi7Sk-MTdk4&C&6/:HTjk>.CCxi{GfS:j;+V|6-Iri7bD~wp?&IXuR$*(cJ0~');
define('NONCE_KEY',        '_{YK~e-3lGu^&;I8;,luD_Y%.nU(L/EL>#d/YW)cBR$?#F+1F(Co(Ch;3gUZ%{V1');
define('AUTH_SALT',        '9YYv?jP$5L]y2:q?w[kus 5V0uT+2!@0 Z)3/{7Je2%Hi8Imce2SC}@/[~U%ojcy');
define('SECURE_AUTH_SALT', 'oD[6DZCli&mCavA}#8hNh8P-:S3?n?b^JbOVA_Tj+n{)eh5/PVALJu?TL=e1Lr_q');
define('LOGGED_IN_SALT',   'J^Rx[CE|p80n9]Za9o>LB{g&(=x~7qKt@Jde.?_Dbr.;tw#AjgHhbnPAb|+3f/o-');
define('NONCE_SALT',       '.]xy?;gkU99}f?XsD( L`rwWpHJi~[Ek]19-Vi!EScLb/{_v3_YZi&@8+P-@-b&T');

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
