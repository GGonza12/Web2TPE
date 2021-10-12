<?php
/* Smarty version 3.1.39, created on 2021-10-12 02:34:20
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6164d80cb59cc2_04412243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28867df3ded87648d425b3b7bf88ec2f44d301a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\login.tpl',
      1 => 1633998857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6164d80cb59cc2_04412243 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Iniciar sesión</h3>

<form action="verify" method="POST">
    <input placeholder="email" type="email" name="email" required>
    <input placeholder="Contraseña" type="password" name="password" required>
    <input type="submit">
</form>
<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

<h3>Crear cuenta</h3>

<form action="createacount" method="POST">
    <input placeholder="nombre" type="text" name="user" required>
    <input placeholder="email" type="email" name="email" required>
    <input placeholder="Contraseña" type="password" name="password" required>
    <input type="submit">
</form><?php }
}
