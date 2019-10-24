<?php
/*
 * Plugin Name: Temperatura Palestra
 * Description: Plugin para mostrar a temperatura no local da palestra
 * Version: 1.0.0
 * Author: Rafael Nercessian
 */

if(!defined('ABSPATH')){
    die;
}

require_once plugin_dir_path(__FILE__) .'/includes/al_temperatura_palestra_scripts.php';
require_once plugin_dir_path(__FILE__) .'/includes/al_temperatura_palestra_widget.php';
