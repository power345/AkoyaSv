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
define('DB_NAME', 'AkoyaSv');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'akoya');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '@@Support##');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mundocontables.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'aX}-I+^lL[IB[.-)qz`qtb)x lNaqUBR*@-t3k+dK|DwL1~i&d},4-v+X<FF&*1A');
define('SECURE_AUTH_KEY', 'mt5t2&8g:I(rN#--j 4O9g_Yqa+X]hJ!xtJgz d` N{W&^v4M++Z=hHTjM%ihMK`');
define('LOGGED_IN_KEY', 'jjk8WPPGa]bk/( Yw(FD@!4AmSt`NFlL&}BC|bYUWJer3m!;v*7i|:/zsQfv:p.Z');
define('NONCE_KEY', '3=(^d7~~8aU.&/34-Zla}<(U+SuLc16LRYxVO1_()5huO+S3 6;[L8t!rRm^Xl|%');
define('AUTH_SALT', '?6%$Q-n`USeL 0 t% 1=m:EUs`3?5[kTI>6Mo8:Ig=9o8%Pk3c+tQF6h69!)_WKR');
define('SECURE_AUTH_SALT', 'n4}ln.7/.$;?&~A-Pe{Km||WBSx+]?$zh9q-i>WMTAf3jC]w5a|h*~ i=Z(=YjHI');
define('LOGGED_IN_SALT', 'GW(+OO.r|fPfQ[acN.Rh/MF;iZOiC_9M3#<Et3#by*)CfP^l8>H1.pH(/dT&Vg){');
define('NONCE_SALT', '$#hDlo(mv+8{JzcByNQ61}R{F`7+wIOtZh,3s#/t:1nu+Nw+J}mr_j|lv@Qn{|r}');

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

