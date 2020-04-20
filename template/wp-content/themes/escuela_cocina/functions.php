<?php

/*funciones que se cargan al cargar temas*/

function edc_setup() {
	//menu de navegacion	
     register_nav_menus( array(
          'menu_principal' => esc_html__('Menu Principal', 'escuelacocina')
     ) );
}

add_action('after_setup_theme', 'edc_setup');


/*agregar la clase nav-link de boostrap en el menu principal*/

function edc_enlace_class($atts, $item, $argr){

	if($args->theme_location == 'menu_principal') {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
add_filter('nav_link_attributes', 'edc_enlace_class', 10, 3);



/*Cargar los scripts y css*/

function edc_scripts(){

wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css',false,'4.1.3');

wp_enqueue_style('style',get_stylesheet_uri(), array('bootstrap-css'));	


/*scripts*/
wp_enqueue_script('jquery');

wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.js','1.0',true);

wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.js',
	array('popper'),'1.0',true);

}

add_action('wp_enqueue_scripts','edc_scripts');












