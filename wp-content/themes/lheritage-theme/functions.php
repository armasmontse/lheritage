<?php
/** ==============================================================================================================
 *                                       Constantes y variables Globales
 *  ==============================================================================================================
 */
define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' ); // css para el adimin
define( 'BLOGURL', get_home_url('/') );
define( 'THEMEURL', get_bloginfo('template_url').'/' );

// inicializacion de la traduccion
define( 'TRANSDOMAIN', wp_get_theme()->template );


// ---------------- paginas especiales
// Hook que crea las paginas especificas o especiales de manera automatica

include_once('functions/special_pages.php');

/** ==============================================================================================================
 *                                       Inluye los archivos generarles
 *  ==============================================================================================================
 */
// ---------------- scripts
// Contiene la llamada de los archivos functions.js y admin/functions.js asi como inclucion de valiables java

include_once('functions/general/scripts_js.php');

// ---------------- funciones cltvo
// Contiene las funciones generales del cultivo que son independeites de cada proyecto

include_once('functions/general/functions_cltvo.php');

// ---------------- flitros cltvo
// Contiene los filtros generales del cultivo que son independeites de cada proyecto

include_once('functions/general/filters_cltvo.php');




/** ==============================================================================================================
 *                                       Inluye los archivos de admin
 *  ==============================================================================================================
 */

// ---------------- personaizacion del menu
// Contiene las funciones para personalizar el menu del admin

include_once('functions/admin/menu.php');

// ---------------- imagenes de tamaños y opcciones personalizadas
// Contiene la funciones para personalizar los tamaños de la imagenes

include_once('functions/admin/images.php');

// ---------------- post type y taxonimias
// Contiene el registro de tipos de post persializados y configuracion del editor de los mismos

include_once('functions/admin/post_type.php');

// Contiene el registro de taxonomias personalizadas

include_once('functions/admin/taxonomies.php');

// ---------------- meta boxes y save post
// Contiene la inclucion de las metaboxes asi como las funciones del save post

include_once('functions/admin/metabox.php');

// ---------------- ajax del admin
// Contiene los funciones ajax  del admin

include_once('functions/admin/ajax.php');

/** ==============================================================================================================
 *                                         Inluye los archivos del tema
 *  ==============================================================================================================
 */

// ---------------- funciones del menu
// Contiene el menú del sitio y sus funciones

include_once('functions/theme/menu.php');

// ---------------- filtros del tema
// Contiene los filtros específicos del tema

include_once('functions/theme/filters.php');

// ---------------- funciones del tema
// Contiene los funciones específicas del tema

include_once('functions/theme/functions.php');

// ---------------- ajax del tema
// Contiene los funciones ajax especificas del tema

include_once('functions/theme/ajax.php');



//Add Header menu
register_nav_menus( array(
    'header_menu' => 'Header Menu',
) );


//Registrar Options Page - ACF
$cpt_acf_page = array(
	'page_title' => 'Opciones generales',
	'menu_title' => 'Opciones generales',
	'capability' => 'edit_posts',
	'position'   => false,
	'icon_url'   => false,
	'redirect'   => false,
	'post_id'    => 'general-options_'.ICL_LANGUAGE_CODE,
	'autoload'   => false
);

acf_add_options_page( $cpt_acf_page );




?>
