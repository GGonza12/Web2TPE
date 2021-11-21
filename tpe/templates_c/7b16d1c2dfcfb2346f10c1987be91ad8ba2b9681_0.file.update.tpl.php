<?php
/* Smarty version 3.1.39, created on 2021-11-21 20:55:45
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619aa441ca1e79_60566967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b16d1c2dfcfb2346f10c1987be91ad8ba2b9681' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\update.tpl',
      1 => 1637524023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619aa441ca1e79_60566967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>
<div class="card" style="width: 18rem;">
<form action="<?php echo BASE_URL;?>
UpdateCompany" method="post">
<div class="mb-3">
<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['empresa']->value;?>
" name="empresa" >
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['informacion']->value;?>
" name="informacion" >
</div>
<input hidden type="text"  value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id">
<button type="submit" class="btn btn-primary">Modificar</button>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
