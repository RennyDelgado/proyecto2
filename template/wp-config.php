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
define( 'DB_NAME', 'escuella_cocina' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'd^F^d:oE0u@HZ=Q6m*dPWnSwyG0 x.}dC2-iPVtbnZbhERUHkv+C/eqkxlkcRElS' );
define( 'SECURE_AUTH_KEY', 'JZ(-(t/8u&u=7MlPuMfip %i+.}4gWaLl8]u@BisFJ|u>$BsoA@BPN q1u8Ou:2=' );
define( 'LOGGED_IN_KEY', 'T^gL7bF{O[#D9b_<_ohg*~[t9rr;,3CT=TNNOB-kJ5Dof;+Kr%ab3uxW,5d*i=~3' );
define( 'NONCE_KEY', 'kpMsG./3Cu6-v8-lNK!HJoV_)yOiswx!u127mSwhHbjk0sq#YTIt~^;FQv;X%i7-' );
define( 'AUTH_SALT', 'Jfv^47]_mwx8+_d14#oxJi!Bd2JgSJ,1L$}&0wEx@N86}r[`Eg^q{w?leV`=;V6F' );
define( 'SECURE_AUTH_SALT', 'm;;*vuoC>Bh2 9,V~u^F:<C?6p c:=[KUL=zeZKAYl3T%<.{[[3qo_aJ$/h[So[J' );
define( 'LOGGED_IN_SALT', 'w)C47E~l>7YU)otUsX2>Mq~zD0/;@@x*#IO)|@|{vWEL/wE[urHkKr:9,06y*KR>' );
define( 'NONCE_SALT', 'KE<b&O[az^d]DIe-a]5q]4}W9d31O`/2$*+(YY1>qFJn[%p3?]UMr6KGvXG<`=Sa' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

