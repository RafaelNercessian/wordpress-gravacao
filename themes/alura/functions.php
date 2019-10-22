<?php
add_action('init', 'adiciona_menu_thumbnail');
function adiciona_menu_thumbnail()
{
    register_nav_menu('principal', __('Menu principal'));
    add_theme_support('post-thumbnails');
    register_sidebar(array(
            'name' => 'Widget Alura',
            'before_widget' => '<div class = "newsletter">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
}

