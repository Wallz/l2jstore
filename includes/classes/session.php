<?php
/**
 * L2JStore - Session
 * 
 * Gerenciamento de sessões do sistema.
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */
 
 Class Session {

	public function _init()
	{
		if(!session_start())
		{
			return session_start();
		}
	}

	public function _get_session_id()
	{
		return session_id();
	}

	public function _session_register($session, $values = array())
	{
		return $_SESSION[$session] = $values;
	}

	public function _get_session($session)
	{
		if(!isset($_SESSION[$session]))
		{
			return FALSE;
		}
		return $_SESSION[$session];
	}

	public function _session_delete($session)
	{
		unset($_SESSION[$session]);
	}

}
