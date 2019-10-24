<?php
/*
 * Plugin Name: Cadastrar local e data da palestra
 * Description: Plugin para cadastrar local e data da próxima palestra realizada pela Alura
 * Version: 1.0.0
 * Author: Rafael Nercessian
 */

if(!defined('ABSPATH')){
    die;
}

load_plugin_textdomain(
  'al_local_dia_palestra',
  false,
  basename(dirname(__FILE__)).'/languages'
);

require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_settings.php';
require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_shortcode.php';
require_once plugin_dir_path(__FILE__) . '/includes/al_local_dia_palestra_scripts.php';