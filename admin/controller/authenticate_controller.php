<?php
/**
 * L2JStore - Authenticate controller
 * 
 * Controlador que gerencia o acesso do administrador no sistema.
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */
 
/**
 * carregando configurações
 */
 require '../../config/config.php';

/**
 * Carregando banco de dados. Classe PDO.
 */
 require '../../includes/classes/database/pdo.php';

/**
 * Carregando modelo login
 */
 require '../model/authenticate_model.php';

/**
 * Carregando arquivo de tradução.
 */
 require '../../includes/languages/'.$config['l2jstore']['language'].'/admin/authenticate.php';

 Class AuthenticateController extends AuthenticateModel {

	protected $login;

	protected $password;

	protected $hash;
	
	protected $json = array();

 	public function __construct($data)
	{
		foreach ($data as $data_key => $data_value) {
			$this->$data_key = $data_value;
		}
	}
	
	protected function _hash_password($pwd)
	{
		return md5($this->hash_password.$pwd);
	}

 }

 $login = 'vagner.cantuares@gmail.com';
 $password = 12345;

 $auth_controller = new AuthenticateController(
 	array(
 		'login' => $login,
 		'password' => $password,
		'database' => $dbh,
		'lang' => $lang['authenticate'],
		'session' => $session,
		'hash_password' => $config['l2jstore']['admin_security_hash']
	)
 );

echo $auth_controller->login();
