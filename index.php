<?php
/**
 * INDEX principal do projeto
 * 
 * Abaixo será inicializado as todas as classes e funções para o
 * perfeito funcionamento do sistema.
 * 
 * @since 03/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 * 
 */
 require 'config/settings.php';

 require 'config/database/pdo.php';
/**
 * Inicializando banco de dados.
 */
 require DIR_CLASSES.'/database.php';
 $database = new Database($dbh);

 require DIR_CLASSES.'/session.php';
/**
 * Inicializando a sessão
 */
 $session = new Session();
 $session->_init();

/**
 * Inicializando o carrinho.
 */
 require DIR_CLASSES.'/cart.php';
 
 $cart = new Cart(
 	array(
		'Session' => $session,
		'Database' => $database
	)
 );
