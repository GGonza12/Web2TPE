<?php
/* Smarty version 3.1.39, created on 2021-10-10 01:03:49
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\ViewGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61621fd54c2f90_76489317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fac1096ba8f1bd4a43a34c7031ef4261324c8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\ViewGame.tpl',
      1 => 1633820392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61621fd54c2f90_76489317 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	
    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>
            <th>eliminar</th>

        </tr>
    </thead>
    <tbody>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_empresa;?>
</td>
            <td><a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">eliminar</a></td>
        </tr>
    </tbody>

</table><?php }
}
