<?php
/* Smarty version 3.1.39, created on 2021-10-14 21:44:03
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616888838c9064_12545856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c3a7dd8b15e89b9e74d7c10daf5bd37305c17da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\update.tpl',
      1 => 1634240421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616888838c9064_12545856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo BASE_URL;?>
UpdateCompany" method="post">
        <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>
" name="empresa" >
        <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
" name="descripcion" >
        <input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
        <input type="submit" value="Modificar">
  
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
