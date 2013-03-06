<?php

Class Cart {
	
	public function __construct($init)
	{
		foreach ($init as $key => $value) {
			$this->$key = $value;
		}
	}
	
	public function add($item_id, $amount)
	{

 		if(!$this->Session->_get_session('Cart'))
 		{
 			$this->Session->_session_register('Cart', $item_id);
 		}

		$cart = $this->Session->_get_session('Cart');

	}

}
