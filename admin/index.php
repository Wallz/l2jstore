<?php
/**
 * INDEX principal da pasta admin.
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 * 
 */
 
/**
 * carregando configurações
 */
 require '../config/config.php';
 
/**
 * Carrega todos os arquivos da pasta includes definido no load.
 */
 require '../includes/load.php';
 
/**
 * Inicializando sessão.
 */
 $session = new Session();
 $session->_init();

/**
 * Carregando banco de dados.
 */

 # Carregando classe PDO.
 require '../includes/classes/database/pdo.php';
 
 if($session->_get_session('admin'))
 {
	include 'admin_theme/index.php';
 } else {
 	include 'admin_theme/login.php';
 }