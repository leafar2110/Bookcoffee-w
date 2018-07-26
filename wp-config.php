<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bookcoffee');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'victor123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'l)TH>-[F9TMk>^B{G}/+*Q|rMq)0;grfj8` 6*B~a5!A-ir-ybq|2_E x7?X@Z|@');
define('SECURE_AUTH_KEY', 'K(Ti|>WRas%F}1eIz3R)#iXPu8wy|h^8-B!RRq>gw3^4{o_Kyjd03s}4GR8j@DAU');
define('LOGGED_IN_KEY', 'W#nD<+%^60qc2!p}6%Zl.okH_tgJ7LmRC$*@nZZrO-P`y2&IDkI1<doL7iHm9+(J');
define('NONCE_KEY', 'Oe~HlGU=nCq$[^P=BlOJ/(8gI#d8H[Jk_a^bvWm qb pu!OB[5BK(zK`c;)u>05~');
define('AUTH_SALT', 'nMQaUOAJQ]-NAKv5X)EGW(4[ej`J=?pL6|c(0rI~JUn_]Iw 2m_ (&lDp>^Jr/I;');
define('SECURE_AUTH_SALT', '_S;p~O}Kz&+? K c>DDGM0Hoh/5iw*0TDT~+g.{GA5YC.-m#<A9q(A.:@$zvn/Mp');
define('LOGGED_IN_SALT', 'Nvk5daozA[*+6)811 xN0)FM&+Ljj*=8bijhvrpgk4j)!59HZwT3@pSE12/h(O#s');
define('NONCE_SALT', 'MC]}oV^!Q{Xva?RO{lU,S^Xm>h*S@*M2kNyDdTwMvgeW~}?f.|Kh=aTbdPktY=ex');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

