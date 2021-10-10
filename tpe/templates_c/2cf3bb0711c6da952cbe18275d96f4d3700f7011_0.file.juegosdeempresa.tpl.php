<?php
/* Smarty version 3.1.39, created on 2021-10-10 03:39:03
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\juegosdeempresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616244373eaa10_79371809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf3bb0711c6da952cbe18275d96f4d3700f7011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\juegosdeempresa.tpl',
      1 => 1633829940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616244373eaa10_79371809 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Juegos</h1>

<table>
	
    <thead>
        <tr>
        <th>Empresa</th>
        <th>juego</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['game']->value->empresa;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['game']->value->juego;?>
</td>
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
