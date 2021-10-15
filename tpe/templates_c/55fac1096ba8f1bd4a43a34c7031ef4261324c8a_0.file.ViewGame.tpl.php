<?php
/* Smarty version 3.1.39, created on 2021-10-15 02:07:03
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\ViewGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168c6278c7db2_14618438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fac1096ba8f1bd4a43a34c7031ef4261324c8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\ViewGame.tpl',
      1 => 1634256422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168c6278c7db2_14618438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table class="table table-hover">
	
    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>

        </tr>
    </thead>
    <tbody>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->categorias;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_empresa;?>
</td>
        </tr>
    </tbody>

</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
