<?php
/**
 * INDEX principal do projeto
 * 
 * @since 03/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 * 
 */
 require 'config/config.php';

 # Carregando Clasess, Functions e Helpers.
 $load = array(
 	'classes' => array('session')
 );
 
 foreach ($load as $type => $files)
 {
 	foreach ($files as $file)
 	{
		require 'includes/'.$file.'.php';
	}
 }