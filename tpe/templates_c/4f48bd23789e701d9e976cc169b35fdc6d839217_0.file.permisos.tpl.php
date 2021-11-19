<?php
/* Smarty version 3.1.39, created on 2021-11-19 01:04:07
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\permisos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6196e9f718d7b0_21475601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f48bd23789e701d9e976cc169b35fdc6d839217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\permisos.tpl',
      1 => 1637279793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6196e9f718d7b0_21475601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'rol,logged'), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<h3> Listado de permisos.</h3>

<table class="table table-hover">
	
    <thead>
        <tr>
        <th>Usuario</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Agregar</th>
        <th>Quitar</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
		<tr>
             <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
</td>
             <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td> 
             <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->rol;?>
</td>
             <td><a href="<?php echo BASE_URL;?>
agregarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">Agregar Permiso<a></td>
             <td><a href="<?php echo BASE_URL;?>
quitarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">Eliminar Permiso<a></td>
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
