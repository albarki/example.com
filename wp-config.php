<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'example2_com');

/** MySQL database username */
define('DB_USER', 'example2_com');

/** MySQL database password */
define('DB_PASSWORD', 'K8JjPelx4EBWhsZ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'lU+YvDs;M|^j<awq;*NA0I;Vj-p a}g|X8[k?xm-: 7F@/N8-b(j-E.z@A3Gy?Cy');
define('SECURE_AUTH_KEY',  'BwwGzEyx+PQ&eUJ{t/ ?$w+E`s` :*Rp@aD-aXrAW5+><~1crJ>f~3=4ILn&::#E');
define('LOGGED_IN_KEY',    '6;  S8`N%DVSA*[i{R;!Fkh0+BgFmopW!^--HHKuDM%Iz5ReO4&F@$vneCYM@lZc');
define('NONCE_KEY',        '?-p~?@Zr5c0^0VD!2IP$f&{SM%z-U[V_d~j**6+mMYj)3;:wvM7m+FW9- STM7-,');
define('AUTH_SALT',        '9,0Unok+6++ Th&V`pBq8UVFzJaJY$>K6J[I.xp/ZH*u{pXFRv=3C p%bv)FEF(;');
define('SECURE_AUTH_SALT', '7nN.qQ+q5sJ&<}){||ZO<oX*@EM-ER~8Cxa<6Td/@+j|Ge(]E!n=H/%H|MuS0^sR');
define('LOGGED_IN_SALT',   '`.kMYO5FLhkk[Dq<du1ipMA G7^+%702]9(#C772HU-p3]X|4E!++M&GVJ-Yo[F,');
define('NONCE_SALT',       'xP?4JB>w|W sC|Y!EGbFYq/z#J3q95CjVo+rwvQjlLmKH:cmBz`B)B#wMn`$QEn2');


$table_prefix = 'wp_';


 

define('WP_DEBUG', false); 



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
