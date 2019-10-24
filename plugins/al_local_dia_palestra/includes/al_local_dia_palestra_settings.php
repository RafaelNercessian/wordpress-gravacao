<?php

add_action('admin_menu', 'al_local_dia_palestra_menu');
function al_local_dia_palestra_menu()
{
    add_menu_page(
        'Local Palestra',
        __('Local Palestra','al_local_dia_palestra'),
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
        <h1><?= __('Local Palestras','al_local_dia_palestra') ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_errors();
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
        __('Configurações do local da palestra','al_local_dia_palestra'),
        'al_local_dia_palestra_campos_secao_detalhes',
        'local-palestra'
    );

    //Endereço
    add_settings_field(
        'al_local_dia_palestra_endereco',
        __('Endereço','al_local_dia_palestra'),
        'al_local_dia_palestra_endereco',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_endereco',
        'verifica_endereco'
    );

    //Cidade
    add_settings_field(
        'al_local_dia_palestra_cidade',
        __('Cidade','al_local_dia_palestra'),
        'al_local_dia_palestra_cidade',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_cidade',
        'verifica_cidade'
    );

    //Data
    add_settings_field(
        'al_local_dia_palestra_data',
        __('Data','al_local_dia_palestra'),
        'al_local_dia_palestra_data',
        'local-palestra',
        'al_local_dia_palestra_secao'
    );

    register_setting(
        'al_local_dia_palestra_settings',
        'al_local_dia_palestra_data',
        'verifica_data'
    );
}

//Função callback seção
function al_local_dia_palestra_campos_secao_detalhes()
{
    ?>
    <p><?= __('Insira os dados do endereço, cidade e data da próxima palestra da Alura','al_local_dia_palestra') ?></p>
    <?php
}

//Função callback endereço
function al_local_dia_palestra_endereco()
{
    ?>
    <input type="text" id="al_local_dia_palestra_endereco"
           name="al_local_dia_palestra_endereco" value="<?= esc_attr(get_option('al_local_dia_palestra_endereco')) ?>" required>
    <?php
}

//Função callback cidade
function al_local_dia_palestra_cidade()
{
    ?>
    <input type="text" id="al_local_dia_palestra_cidade"
           name="al_local_dia_palestra_cidade" value="<?= esc_attr(get_option('al_local_dia_palestra_cidade')) ?>"required>
    <?php
}

//Função callback data
function al_local_dia_palestra_data()
{
    ?>
    <input type="date" id="al_local_dia_palestra_data"
           name="al_local_dia_palestra_data" value="<?= esc_attr(get_option('al_local_dia_palestra_data'))?>" required>
    <?php
}

/*
 * Configuração de callback de verificação dos campos
 */

//Enedereço
function verifica_endereco($endereco){
    if(empty($endereco)){
        $endereco = get_option('al_local_dia_palestra_endereco');
        add_settings_error(
            'al_local_dia_palestra_mensagem_erro',
            'al_local_dia_palestra_erro_endereco',
            __('O campo endereço não pode ser vazio!','al_local_dia_palestra'),
            'error'
        );
    }
    return $endereco;
}

//Cidade
function verifica_cidade($cidade){
    if(empty($cidade)){
        $cidade = get_option('al_local_dia_palestra_cidade');
        add_settings_error(
            'al_local_dia_palestra_mensagem_erro',
            'al_local_dia_palestra_erro_cidade',
            __('O campo cidade não pode ser vazio!','al_local_dia_palestra'),
            'error'
        );
    }
    return $cidade;
}

//Data
function verifica_data($data){
    if(empty($data)){
        $data = get_option('al_local_dia_palestra_data');
        add_settings_error(
            'al_local_dia_palestra_mensagem_erro',
            'al_local_dia_palestra_erro_data',
            __('O campo data não pode ser vazio!','al_local_dia_palestra'),
            'error'
        );
    }
    return $data;
}