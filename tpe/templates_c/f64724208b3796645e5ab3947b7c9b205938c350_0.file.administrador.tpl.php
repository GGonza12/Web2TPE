<?php
/* Smarty version 3.1.39, created on 2021-11-23 01:53:12
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c3b78520bc9_06069515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64724208b3796645e5ab3947b7c9b205938c350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\administrador.tpl',
      1 => 1637628790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619c3b78520bc9_06069515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

<table class="table table-hover">

    <thead>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Agregar</th>
            <th>Quitar</th>
            <th>Eliminar Usuario</th>
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
                <td>
                    <form action="<?php echo BASE_URL;?>
agregarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                        <button class="btn btn-outline-success">Agregar Permiso</button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo BASE_URL;?>
quitarPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                        <button class="btn btn-outline-warning">Eliminar Permiso</button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo BASE_URL;?>
eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">
                        <button class="btn btn-outline-danger">Eliminar Usuario</button>
                    </form>
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
