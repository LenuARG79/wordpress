<?php
function mitienda_setup() {
    // Soporte para el título dinámico
    add_theme_support('title-tag');
    // Soporte para imágenes destacadas (opcional)
    add_theme_support('post-thumbnails');
    // Registrar menús
    register_nav_menus(array(
       'menu_categorias' => __('Menú Categorías', 'mitienda'),
    ));
}
add_action('after_setup_theme', 'mitienda_setup');

function mitienda_enqueue_scripts() {
    // Estilos
    wp_enqueue_style('mitienda-style', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), null);

    // Scripts
    wp_enqueue_script('mitienda-main', get_template_directory_uri() . '/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mitienda_enqueue_scripts');
