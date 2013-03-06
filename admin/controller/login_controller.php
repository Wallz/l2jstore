<?php
/**
 * L2JStore - login controller
 * 
 * Controlador que gerencia o acesso do administrador no sistema.
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */
 
/**
 * carregando configurações
 */
 require '../../config/settings.php';
/**
 * Carregando banco de dados.
 */
 require '../../'.DIR_DB.'/pdo.php';;
 
/**
 * Carregando modelo login
 */
 require '../model/login_model.php';

 Class LoginController extends LoginModel {

	protected $login;

	protected $password;

	protected $hash;

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

 $login_controller = new LoginController(
 	array(
 		'login' => $login,
 		'password' => $password,
		'database' => $dbh,
		'hash_password' => ADMIN_SECURITY_HASH
	)
 );

$login_controller->authenticate();
