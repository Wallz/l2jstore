<?php
/**
 * L2JStore - login model
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */
 
 Class LoginModel {
 	
	protected $database;
	
	public function authenticate()
	{
		$sth = $this->database->prepare("SELECT id, email, `password` FROM store_administrators WHERE email = ? AND `password` = ?");

		$sth->execute(array($this->login, $this->_hash_password($this->password)));

		$result = $sth->fetch(PDO::FETCH_ASSOC);

		if($result)
		{
			return $result;
		}

		return FALSE;
	}
 }
