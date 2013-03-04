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
 * carregando arquivo de configuração.
 */
 require '../config.php';
 
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
