<?php

add_action('admin_menu', 'al_local_dia_palestra_menu');
function al_local_dia_palestra_menu()
{
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

function al_local_dia_palestra_menu_pagina()
{
    ?>
    <div>
        <h1>Local Palestras</h1>
        <form method="post" action="options.php">
            <?php
                do_settings_sections('local-palestra');
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_menu', 'al_local_dia_palestra_secao');
function al_local_dia_palestra_secao()
{
    add_settings_section(
        'al_local_dia_palestra_secao',
        'Configurações do local da palestra',
        'al_local_dia_palestra_campos_secao_detalhes',
        'local-palestra'
    );
}