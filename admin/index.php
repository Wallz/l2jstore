<?php
/**
 * INDEX principal da pasta admin.
 * 
 * carregando todas classes e funções.
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 * 
 */
 
/**
 * carregando arquivo de configuração.
 */
 require 'config.php';
 
/**
 * Carregando bibliotecas smarty
 */
 require '../'.DIR_INCLUDES.'/engine/template/smarty/Smarty.class.php';
 try {
 $smarty = new Smarty;
 $smarty->caching = true;
 $smarty->cache_lifetime = 120;

 /**
  * Setando os diretórios do tema.
  */
 $smarty->assign("DIR_CSS", DIR_ADMIN_THEME."/css");
 $smarty->assign("DIR_JS", DIR_ADMIN_THEME."/js");
 $smarty->assign("DIR_IMG", DIR_ADMIN_THEME."/img");
 $smarty->assign("DIR_RESOURCES", DIR_ADMIN_THEME."/_resources");

 $smarty->display(DIR_ADMIN_THEME.'/index.tpl');
 }catch(exception $e) {
	echo $e->getMessage();
 }

