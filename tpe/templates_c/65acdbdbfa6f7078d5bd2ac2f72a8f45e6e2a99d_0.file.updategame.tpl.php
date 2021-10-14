<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:58:23
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\updategame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168b60fd81587_88514183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65acdbdbfa6f7078d5bd2ac2f72a8f45e6e2a99d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\updategame.tpl',
      1 => 1634252300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6168b60fd81587_88514183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<div class="card" style="width: 18rem;">
<form action="<?php echo BASE_URL;?>
UpdateGame" method="post">
<div class="mb-3">
<input type="text" class="form-control" placeholder="Juego" name="juego">
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Imagen" name="imagen">
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Categorias" name="categorias">
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
</div>
<div class="mb-3">
<input type="number" class="form-control" placeholder="Precio" name="precio">
</div>
<input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
" name="id">
<select class="form-select" aria-label="Default select example" name="empresa">
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
<button type="submit" class="btn btn-primary">Modificar</button>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
