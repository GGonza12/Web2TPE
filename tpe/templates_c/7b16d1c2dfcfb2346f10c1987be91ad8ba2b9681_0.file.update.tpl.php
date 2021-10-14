<?php
/* Smarty version 3.1.39, created on 2021-10-13 23:40:14
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167523eda47f7_80011476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b16d1c2dfcfb2346f10c1987be91ad8ba2b9681' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\update.tpl',
      1 => 1634161211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6167523eda47f7_80011476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo BASE_URL;?>
UpdateCompany" method="post">
        <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>
" name="empresa" >
        <input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
        <input type="submit" value="Modificar">
  
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
