<?php

//Plugin name: dark-mode
//Description: Activa el modo oscuro en tu theme
//Version: 1.0
//Author: Agustin Zamar
//Author URI: www.agustinzamar.com.ar


function estilos_plugin(){

    $estilos_url = plugin_dir_url(__FILE__).'/assets/css/estilos.css';

    wp_enqueue_style( 'modo-oscuro', $estilos_url, '', '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'estilos_plugin');