<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newsite');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'Mf|:si .@&^%@_a`|R:`)Fqb4>R2=_Y+{HWV~:o$RV87!qu]?mH~Jxvue/B>;q]-');
define('SECURE_AUTH_KEY',  'w}1:)/)ev|Yv8`+ckJ-(ye+T^XF.HSibeDI:Tv}MOjP} $OR8md`GfVUV{[+-B/-');
define('LOGGED_IN_KEY',    'sm/N2QAxqGvE1O_F/(J_q*MoG>|[BHkkCQIl@Mu9I|`S$=56-J}jObM75{CwrqUg');
define('NONCE_KEY',        'k3(mhh=%6##Uj2LextZkF|t.E+tK$D1oZGV&TO>F=TAMLht4R#/jXwV<=.]Zb)lo');
define('AUTH_SALT',        'ovcU,7.ZK-pLa:;xVQ0JCdQ[ch4Jm=+a!WTp8xBog,h:Chk7We-?Iqyp^|L|Y)_R');
define('SECURE_AUTH_SALT', '{ P.-31Lp+VgMu<)BsSqTtnUy98.;vCKRnrST(Rf,^v+n]Z58cB3PCKw->&F^@*0');
define('LOGGED_IN_SALT',   'D2(mY)xy$G17?,t7Id]Y4zi-]-:-|KUf}7a+ vKlPI.}kYO(Qp}-+Esx5WKa2c`!');
define('NONCE_SALT',       '%F;JaD$F6/HhY)#w+Hr2vwm+l9 iWlezC;yJEcrRD*&mJYb/3^>`[IMy5vs[z|JI');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
