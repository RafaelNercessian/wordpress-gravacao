<?php

add_action('admin_menu','al_local_dia_palestra_menu');
function al_local_dia_palestra_menu(){
    add_menu_page(
        'Local Palestra',
        'Local Palestra',
        'manage_options',
        'local-palestra',
        'al_local_dia_palestra_menu_pagina',
        'dashicons-location-alt',
        -1
    );
}