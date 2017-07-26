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
define('DB_NAME', 'meca');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '.Z0u#A.i-<qD;H)Dr&eYbc/C^Id4UD:8HRnx`v0xp%$./Dfg|WG(c2hvbX/zB30T');
define('SECURE_AUTH_KEY', '/IMQoHhB*1Rq)].=M$]&?m*/i)xA@1wCc ufzKR0FYy><(/I`MfU,bX/7]~E[3^<');
define('LOGGED_IN_KEY', '@0p&=_Ih`2H1$J@]_~BeU_eO3t2[+1#ib/TpV!iS`W{N%x;8w^o})&jfG+&i5oSf');
define('NONCE_KEY', '8cAW-/-+rKqMs|dvo[QnT.pcD7LoCe!PsvUUFc}Sr >!r*OQd,aARJ}LOX=exXc~');
define('AUTH_SALT', '_/HD!=2.J6S:ZDY;?{P.+*6_,Wwbnn]^F.$5sWCbe<.1hu3<bwXY<0gM/b1mc^Uj');
define('SECURE_AUTH_SALT', 'nPUXt]|$G6h^k_C98@lq1^W,VW5%<o^yLEVhe]dJ4HN$M (F3PmX-1ZRS7Z9i+?R');
define('LOGGED_IN_SALT', 'MWIviY:C^0_mM7C}q~oN a]0!BH_b ^mUin>g<0Rgkc`q-,r]KaDO+.RMEOOn.nH');
define('NONCE_SALT', '({s+VU%I<}08(/v(8+]sP.pq;mQ%{D#,BJ,6p?RUqoE^.{`Zu^Th[_3SNFNk hy[');

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

