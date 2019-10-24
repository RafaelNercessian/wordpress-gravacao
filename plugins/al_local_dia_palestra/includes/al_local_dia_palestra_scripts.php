<?php

add_action('wp_enqueue_scripts','al_local_dia_palestra_adiciona_scripts');
function al_local_dia_palestra_adiciona_scripts(){
    wp_enqueue_script(
        'jquery_countdown_lib',
        plugins_url() . '/al_local_dia_palestra/js/jquery.countdown.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'al_local_dia_palestra_contagem_regressiva',
        plugins_url() . '/al_local_dia_palestra/js/al_local_dia_palestra_contagem_regressiva.js',
        null,
        null,
        true
    );
}