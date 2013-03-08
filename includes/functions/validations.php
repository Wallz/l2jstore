<?php
/**
 * Função que valida os dados de acordo com a regra setada.
 * 
 * @since 07/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */

 # Valdia campos vazios.
function not_empty($campo)
{
	if(empty($campo))
	{
		return FALSE;
	}
	return TRUE;
}

# Valida com expressões regulares.
function regex($data, $pattern)
{
	if(preg_match('/^'.$pattern.'$/', $data, $z))
	{
		return TRUE;
	}
	
	return FALSE;
}

# Verifica se existe algum dado identico no banco de dados.
function is_unique($field, $params = array())
{
	$sql_query_string = "SELECT ".$params['columns']." FROM ".$params['table']." WHERE ".$params['table'].".".$params['columns']." = ?";
	
	$sth = $params['database']->prepare($sql_query_string);
	
	$sth->execute(array($field));
	
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	
	if($result)
	{
		return FALSE;
	}
	
	return TRUE;
	
}

# Valida o e-mail.
function is_email($value){ 
	if(not_empty($value)){
		if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $value))
		{
			return FALSE;
		} else {
			return TRUE;
		}
	}else { 
		return false; 
	}
}

# Valida data.
function is_date($date) 
{
	if(not_empty($date))
	{
		$data_array = explode('/', $date);
	
		$max_dias = 31;
		$max_mes = 12;
	
		if($data_array[0] > $max_dias)
		{
			$data_array[0] = $max_dias;
		}
	
		if($data_array[1] > $max_mes)
		{
			$data_array[1] = $max_mes;
		}
	
		$date = implode('/', $data_array);
	
		$pattern = '/^[0-9]{1,2}[\/][0-9]{1,2}[\/][0-9]{4}$/';
		return preg_match($pattern, $date);
	}
}

# Verifica o tamanho máximo.
function max_length($data, $value)
{
	if(strlen($data) > $value)
	{
		return FALSE;
	}

	return TRUE;
}

# Verifica o tamanho mínimo.
function min_length($data, $value)
{
	if(strlen($data) < $value)
	{
		return FALSE;
	}

	return TRUE;
}

# Verifica se as senhas são iguais.
function confirm_password($data, $value)
{
	if($data != $value )
	{
		return FALSE;
	}
	
	return TRUE;
}

# Função que constroi as validações.
function validate($validate, $data, $dataType  = 'json')
{
	try {
		foreach ($validate as $key => $value) {
			foreach ($validate[$key] as $validation_key => $validation_value) {

				if(isset($validation_value['regra']))
				{
					if(!$validation_key($data[$key], $validation_value['regra']))
					{
						throw new Exception($validation_value['mensagem'], 1);
					}

				} else{
				if(!$validation_key($data[$key]))
					{
						throw new Exception($validation_value['mensagem'], 1);
					}
				}
				
			}
		}
	} catch(exception $e) {
		switch ($dataType) {
			case $dataType == 'json':
				$json['error'] = 1;
				$json['mensagem'] = $e->getMessage();
				return json_encode($json);
				break;
			
			default:
				$json['error'] = 1;
				$json['mensagem'] = $e->getMessage();
				return json_encode($json);
				break;
		}
	}
}
