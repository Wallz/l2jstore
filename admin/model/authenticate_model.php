<?php
/**
 * L2JStore - Authenticate model
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */
 
/**
 * Carrega todos os arquivos da pasta includes definido no load.
 */
 require '../../includes/load.php';
 
 $session = new Session();
 $session->_init();
 
 Class AuthenticateModel {
 	
	protected $database;
	
	public function login()
	{
		try{
			$sth = $this->database->prepare("SELECT id, email, `password` FROM store_users WHERE email = ? AND `password` = ?");
	
			$sth->execute(array($this->login, $this->_hash_password($this->password)));
	
			$result = $sth->fetch(PDO::FETCH_ASSOC);
	
			if(!$result)
			{
				throw new Exception($this->lang['user_wrong'], 1);
			}
			
			$this->session->_session_register('admin', $result);

			$this->json['message'] = $this->lang['user_authenticated'];

			return json_encode($this->json);

		} catch(Exception $e) {
			$this->json['message'] = $e->getMessage();
			return json_encode($this->json);
		}

	}
 }
