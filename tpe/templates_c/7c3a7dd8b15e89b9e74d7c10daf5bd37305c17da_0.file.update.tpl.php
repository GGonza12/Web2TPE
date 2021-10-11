<?php
/* Smarty version 3.1.39, created on 2021-10-11 02:48:22
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616389d63698e0_32964538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3a7dd8b15e89b9e74d7c10daf5bd37305c17da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\update.tpl',
      1 => 1633913300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616389d63698e0_32964538 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>

<form action="CreateCompany" method="post">
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">        
        <input type="text" placeholder="Inserte Empresa" name="empresa">
        <input type="submit" value="Agregar">      
</form><?php }
}
