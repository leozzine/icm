<?php

// Evita acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Desativar XML-RPC
 */
add_filter('xmlrpc_enabled', function () {
    return false;
}, PHP_INT_MAX);
add_filter('xmlrpc_methods', function () {
    return [];
}, PHP_INT_MAX);
add_filter('xmlrpc_element_limit', function () {
    return (int) 1;
}, PHP_INT_MAX);

/**
 * Ocultando versões
 */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', function () {
    return '';
});
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);

function remove_css_js_version($src)
{
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}

/**
 * Funcionalidades do tema
 */
add_theme_support('title-tag');
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('responsive-embeds');
add_theme_support('widgets');

/**
 * Scripts do cabeçalho
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', [], false, 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/styles.css');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], false, false);

    wp_enqueue_script('jquery-inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js', ['jquery'], false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/scripts/main.js', ['jquery'], false, true);
    // wp_localize_script('main', 'js_main', [
    //     'ajax_url' => admin_url('admin-ajax.php'),
    //     'bicicleta_branco' => get_template_directory_uri() . '/assets/images/bicicleta-branco.webp',
    //     'bicicleta_chumbo' => get_template_directory_uri() . '/assets/images/bicicleta-chumbo.webp',
    // ]);
}, 12, 0);
