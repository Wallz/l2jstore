<?php
/**
 * L2JStore - settings
 * 
 * @since 04/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */

/**
 * Configurações gerais do sistema.
 */
 define('DIR_CONFIG', 'config');
 define('DIR_INCLUDES', 'includes');
 define('DIR_CLASSES', DIR_INCLUDES.'/classes');
 define('DIR_FUNCTIONS', DIR_INCLUDES.'/functions');
 define('DIR_THEME', 'themes');

/**
 * Configurações administrativas
 */
 define('DIR_ADMIN_THEME', 'admin_theme');

 define('ADMIN_SECURITY_HASH', 'a1yaYhaPFlah59151HgxyU27');

/**
 * Configurações do banco de dados.
 */
 define('DIR_DB', DIR_CONFIG.'/database');
 define('DB_DRIVER', 'mysql');
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PWD', '');
 define('DB_DATABASE_NAME', 'l2jdb');
