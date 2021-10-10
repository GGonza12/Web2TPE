<?php
/* Smarty version 3.1.39, created on 2021-10-10 02:06:32
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\empresas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61622e888b0218_59575405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c784dbc04472400632a0ecd663360153a255cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\empresas.tpl',
      1 => 1633824389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61622e888b0218_59575405 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo2']->value;?>
</h1>

<table>
	
    <thead>
        <tr>
            <th>Id Empresa</th>
            <th>Empresa</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->empresa;?>
</td>
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
