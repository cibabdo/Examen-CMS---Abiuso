<?php
function wp_base_theme_theme_setup(){

/*
* Ajout du champs "Image à la Une" dans les articles
*/
add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wp_base_theme_theme_setup' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'main-menu'    => __( 'Description du menu' ),
    'footer-menu' => __( 'Description du menu footer' ),
    'sider-bar' => __( 'Description du menu sidebar' ),
) );

//Active le menu de config de navigation
function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');

// Vérification si y a pas double chargement du jquery
if (!function_exists('base_theme_enqueue_styles')) {

    function base_theme_enqueue_styles()
    {
        wp_deregister_script('jquery');

    }

    add_action('wp_enqueue_scripts', 'base_theme_enqueue_styles');
}

// Verification si fichier de traduction
add_action( 'after_setup_theme', 'pdw_theme_setup' );

function pdw_theme_setup(){
    load_theme_textdomain( 'wp-theme-base-translate', get_template_directory() . '/languages' );
}

//defini google map api
function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyBapouOrfm2jTaSd98T1CoI6zfNj93yke8');
}

add_action('acf/init', 'my_acf_init');


//defini les widget

//widget
function wp_base_theme_widgets_init() {
    for ($i = 1; $i <= 10; $i++) {
        register_sidebar( array(
            'name'          => __( 'sidebar'.$i, 'wp-theme-base-translate' ),
            'id'            => 'sidebar'.$i,
            'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
}

add_action( 'widgets_init', 'wp_base_theme_widgets_init' );

// pagination


