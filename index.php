<?php
// Faz uma requisição GET à API para obter as tarefas
$json = file_get_contents('http://localhost/projeto/api.php');

// Decodifica o JSON recebido em um array PHP
$tarefas = json_decode($json, true);

// Inclui a biblioteca Smarty
require 'smarty/libs/Smarty.class.php';

// Configura o Smarty
$smarty = new Smarty\Smarty();                         // Instancia o objeto Smarty
$smarty->setTemplateDir('templates/');  // Diretório dos templates
$smarty->setCompileDir('templates_c/'); // Diretório para os arquivos compilados
$smarty->setCacheDir('cache/');          // Diretório para cache

// Passa o array de tarefas para o Smarty
$smarty->assign('tarefas', $tarefas);

// Renderiza o template "tarefas.tpl"
$smarty->display('tarefas.tpl');