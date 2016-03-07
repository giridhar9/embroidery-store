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
define('DB_NAME', 'embroidery');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'T+40#n9GtJW{DVj(fs aKPJ&i#)qN4nxhp?D!|gD|239n1MA&-/.uy+c`7y.^$Un');
define('SECURE_AUTH_KEY',  '+9)o!Fr1EdLKr#y>HNlQ5W$|K2Y|@+fS.%`&*F3S3x`#)A`jtFXh%Vuy8MIvHQ0v');
define('LOGGED_IN_KEY',    'U&iCTc75+tarH5c_@Zsv4| %^lVzLACS|S*:Cz!5o/F*F+V-xZ0Yy:zq-_*w;|m^');
define('NONCE_KEY',        'YR*1A0S<QGd#<6WY;$Q0COb!/])O;{d/+/AJ$>n<S$ODkr`Y|-9JP-FX0wV>K3S&');
define('AUTH_SALT',        '&f^;qaBb=4wzf.)!|lkFbd@71l(*8DnNvrVL~e-sjB-W_S}8<yR?]iq8 i/kI9h ');
define('SECURE_AUTH_SALT', '5s9X~z+<w*^8/F/VLWHiDGjU5i8A6k7Z&kQy<+.)je>-Z]9EdUEsO?N:QhiJqjam');
define('LOGGED_IN_SALT',   'z|F-^Tk.jfie}-Q]8bk|>]2.b-;{r<T7DX5:y{,7RMwHZ_P l2o)n[(8o*{]jutM');
define('NONCE_SALT',       'Q7alq.z.6|}:n2e-**$:U}J)BI~`C$$Hx xk+z[a:~[d{~_P|OT+[B;S]#K:/!vk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sr_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
