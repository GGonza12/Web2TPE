<?php
/* Smarty version 3.1.39, created on 2021-11-21 20:55:01
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\juegosdeempresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619aa415b5d710_68056499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf3bb0711c6da952cbe18275d96f4d3700f7011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\juegosdeempresa.tpl',
      1 => 1637523997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619aa415b5d710_68056499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table class="table table-hover">
	
    <thead>
        <tr>
        <th>Empresa</th>
        <th>Juego</th>
        <th>Descripcion</th>
        <th>Categorias</th>
        <th>Precio</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['game']->value->categorias;?>
</td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</td>

        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
