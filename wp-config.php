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
define('DB_NAME', 'biogame');

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
define('AUTH_KEY', 'pw0W?2I2{c?I-dqblSXpS{=%Ipqb_b8p$;ZW83wD.%G>r_@sQ_4u<xpW:^%`f#f6');
define('SECURE_AUTH_KEY', '83Cv?,F-@aw3Pvu <{T^s^oiBaw9%f:B_KH-`-Q30lnnaS;wUoTt#tUgrQ-r~?d7');
define('LOGGED_IN_KEY', 'KD6c4rl,C6VaR?[`{.*I]zlqf<sko(^62D;{5NuGrw@&F9B^_Kt0Wz6:.+RnkG(p');
define('NONCE_KEY', 'H Xwl{$n?5C&/N/m@B]1tYj?tixk%69-:XYPn9j;gVtXW6s|)&JnEp_8qUN)^>u6');
define('AUTH_SALT', '4d&Z&/NWZiUp|dQU_o~l]e%Fy#d}YcDZ-9/M `{1}`>lR3Y[o)MfUzw|4;zzfXNe');
define('SECURE_AUTH_SALT', 'p_SOCo1UldiySo<}^L.Q2%qr+*,UzlUW/$0<.<3)h_L6IiK3-|pje)Uu|VG,CU~-');
define('LOGGED_IN_SALT', 'IH#)I?iu:7`ORs3|[T_XPA|rr4?.6p-rlc:Iz4(9$=w^98Q{q4V&KYI?[.=}ex98');
define('NONCE_SALT', '=ou^$/04D/I{N8(j@5{:n^aR9<]OskSw8/QL(przDw^aDpCy+bkX[qmi>`&jjU :');

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

