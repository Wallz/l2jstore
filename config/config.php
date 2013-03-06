<?php
/**
 * L2JStore - configurações.
 * 
 * @since 06/03/2013
 * @author Vagner V. B. Cantuares <vagner.cantuares@gmail.com>
 */

/**
 * Configurações gerais da loja.
 */
 
 # Título da loja.
 $config['l2jstore']['title'] = 'L2JStore';
 
 # Descrição da loja.
 $config['l2jstore']['description'] = 'L2JStore é um sistema de loja virtual para L2J ( Lineage 2 Java ) feito em PHP.';
 
 # Tema da loja.
 $config['l2jstore']['theme'] = 'default';
 
 # Idioma da loja.
 $config['l2jstore']['language'] = 'pt-br';
 
/**
 * Configurações gerais do sistema.
 */
 
 # Hash para codificação
 $config['l2jstore']['admin_security_hash']	=	'a1yaYhaPFlah59151HgxyU27';

/**
 * Carregando configurações do banco de dados.
 */
 require 'database.php';
