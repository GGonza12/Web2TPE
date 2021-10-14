<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:47:03
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61678c1785a2f9_91485907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1cc1a52a8015d08bdc3d644317df130fed3528a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\store.tpl',
      1 => 1634176019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61678c1785a2f9_91485907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>

    <form action="CreateGame" method="post">

        <input type="text" placeholder="Juego" name="juego">
        <input type="text" placeholder="Inserte url de imagen" name="imagen">
        <input type="text" placeholder="Categorias" name="categorias">
        <input type="text" placeholder="Descripcion" name="descripcion">
        <input type="number" placeholder="Precio" name="precio">
        <select name="empresa">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
><?php echo $_smarty_tpl->tpl_vars['empresas']->value->empresa;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <input type="submit" value="Agregar">

    </form>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>


    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $_smarty_tpl->tpl_vars['juego']->value->imagen;?>
" class="img-fluid rounded-start" alt="<?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</p>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['juego']->value->categorias;?>
</p>
                    <p class="card-text"><small class="text-muted">Precio: $<?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</small></p>
                    <a href="viewGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
" class="btn btn-primary">Detalles</a>
                    <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
                        <a href="UpdateViewGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Modificar</a>
                        <a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">eliminar</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
