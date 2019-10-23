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
            settings_fields('al_local_dia_palestra_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

add_action('admin_menu', 'al_local_dia_palestra_secao');
function al_local_dia_palestra_secao()
{
    //Seção
    add_settings_section(
        'al_local_dia_palestra_secao',
        'Configurações do local da palestra',
        'al_local_dia_palestra_campos_secao_detalhes',
        'local-palestra'
    );

    //Endereço
    add_settings_field(
        'al_local_dia_palestra_endereco',
        'Endereço',
        'al_local_dia_palestra_endereco',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_endereco'
    );

    //Cidade
    add_settings_field(
        'al_local_dia_palestra_cidade',
        'Cidade',
        'al_local_dia_palestra_cidade',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_cidade'
    );

    //Data
    add_settings_field(
        'al_local_dia_palestra_data',
        'Data',
        'al_local_dia_palestra_data',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_data'
    );
}

//Função callback seção
function al_local_dia_palestra_campos_secao_detalhes()
{
    ?>
    <p>Insira os dados do endereço, cidade e data da próxima palestra da Alura</p>
    <?php
}

//Função callback endereço
function al_local_dia_palestra_endereco()
{
    ?>
    <input type="text" id="al_local_dia_palestra_endereco"
           name="al_local_dia_palestra_endereco" required>
    <?php
}

//Função callback cidade
function al_local_dia_palestra_cidade()
{
    ?>
    <input type="text" id="al_local_dia_palestra_cidade"
           name="al_local_dia_palestra_cidade" required>
    <?php
}

//Função callback data
function al_local_dia_palestra_data()
{
    ?>
    <input type="date" id="al_local_dia_palestra_data"
           name="al_local_dia_palestra_data" required>
    <?php
}
