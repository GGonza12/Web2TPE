<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:53:49
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\updategame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61688acdbb9a58_74040428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fa5bc065dc90e18bad1c31ee36c33c6ab574ce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\updategame.tpl',
      1 => 1634237687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61688acdbb9a58_74040428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<form action="<?php echo BASE_URL;?>
UpdateGame" method="post">
    <input type="text" placeholder="Juego" name="juego">
    <input type="text" placeholder="Inserte url de imagen" name="imagen">
    <input type="text" placeholder="Categorias" name="categorias">
    <input type="text" placeholder="Descripcion" name="descripcion">
    <input type="number" placeholder="Precio" name="precio">
    <input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
" name="id">
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

    <input type="submit" value="Modificar">

</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
