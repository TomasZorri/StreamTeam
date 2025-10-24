<?php

// Registrar menús
function tema_menus() {
    register_nav_menus([
        'main_menu' => __('Menú Principal', 'mi-tema'),
    ]);
}
add_action('after_setup_theme', 'tema_menus');


// Cargar Widget de Header y Footer
function mi_tema_registrar_widgets() {
    register_sidebar(array(
        'name'          => __('Header Widget', 'mi-tema'),
        'id'            => 'header-widget',
        'description'   => __('Widget para el logo y menú en el header.', 'mi-tema'),
        'before_widget' => '<div class="widget-header %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget', 'mi-tema'),
        'id'            => 'footer-widget',
        'description'   => __('Widget para email, teléfono y redes sociales en el footer.', 'mi-tema'),
        'before_widget' => '<div class="widget-footer %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mi_tema_registrar_widgets');



// Cargar todos los templates
function registrar_plantillas_personalizadas($templates) {
    $ruta_templates = get_template_directory() . '/templates/';

    foreach (glob($ruta_templates . '*.php') as $archivo) {
        $nombre_archivo = basename($archivo, '.php'); // Obtiene el nombre sin extensión
        
        // Genera un nombre a partir del nombre del archivo
        $nombre_plantilla = ucwords(str_replace('_', ' ', $nombre_archivo));

        // Registrar plantilla en WordPress
        $templates['templates/' . $nombre_archivo . '.php'] = $nombre_plantilla;
    }

    return $templates;
}
add_filter('theme_page_templates', 'registrar_plantillas_personalizadas');



function cargar_plantillas_personalizadas($template) {
    if (is_page()) {
        $template_seleccionado = get_page_template_slug();
        
        if ($template_seleccionado && file_exists(get_template_directory() . '/' . $template_seleccionado)) {
            return get_template_directory() . '/' . $template_seleccionado;
        }
    }
    return $template;
}
add_filter('template_include', 'cargar_plantillas_personalizadas');