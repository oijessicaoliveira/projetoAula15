<?php
/* Smarty version 5.4.1, created on 2024-11-10 17:35:46
  from 'file:tarefas.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6730e0e27758f7_26786622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d801ec163bb7bb7b7f422064abd6f00854f838b' => 
    array (
      0 => 'tarefas.tpl',
      1 => 1731256143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6730e0e27758f7_26786622 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projeto\\templates';
?><!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Minhas Tarefas</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('tarefas'), 'tarefa');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tarefa')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('tarefa');?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</body>
</html>
<?php }
}
