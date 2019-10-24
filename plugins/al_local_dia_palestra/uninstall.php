<?php

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

global $wpdb;
$wpdb->query("DELETE FROM wp_options WHERE option_name='al_local_dia_palestra_endereco'");
$wpdb->query("DELETE FROM wp_options WHERE option_name='al_local_dia_palestra_cidade'");
$wpdb->query("DELETE FROM wp_options WHERE option_name='al_local_dia_palestra_data'");