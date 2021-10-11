<?php
/* Smarty version 3.1.39, created on 2021-10-11 04:33:18
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163a26e24b5b2_30069907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b16d1c2dfcfb2346f10c1987be91ad8ba2b9681' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\update.tpl',
      1 => 1633919594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6163a26e24b5b2_30069907 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="UpdateCompany" method="post">
        <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>
" name="empresa" >
        <input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
        <input type="submit" value="Modificar">
  
</form><?php }
}
