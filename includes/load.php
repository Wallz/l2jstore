<?php
 # Carrega todas as Classes, Functions e Helpers definidas.
 $load_include_files = array(
 	'classes' => array('session')
 );
 
 foreach ($load_include_files as $type => $files)
 {
 	foreach ($files as $file)
 	{
		require $type.'/'.$file.'.php';
	}
 }