<?php
/* Smarty version 3.1.39, created on 2021-11-19 00:56:48
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\companys.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6196e8409e9096_81896988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df0dcaab663c62e3a934c38d019529ec40949f30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\companys.tpl',
      1 => 1637279782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6196e8409e9096_81896988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'rol,logged'), 0, false);
if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>

  <div class="card" style="width: 18rem;">
  <form action="<?php echo BASE_URL;?>
CreateCompany" method="post">
  <div class="mb-3">
  <input type="text" class="form-control" placeholder="Empresa" name="empresa" >
  </div>
  <div class="mb-3">
  <input type="text" class="form-control" placeholder="Informacion" name="informacion" >
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
  </div>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companys']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>

  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['company']->value->empresa;?>
</h5>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['company']->value->informacion;?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
       <a href="<?php echo BASE_URL;?>
UpdateViewCompany/<?php echo $_smarty_tpl->tpl_vars['company']->value->id_empresa;?>
" class="card-link">Modificar</a>
       <a href="<?php echo BASE_URL;?>
DeleteCompany/<?php echo $_smarty_tpl->tpl_vars['company']->value->id_empresa;?>
" class="card-link">Eliminar</a>
    <?php }?>
    <a href="<?php echo BASE_URL;?>
ShowGamesOfCompany/<?php echo $_smarty_tpl->tpl_vars['company']->value->id_empresa;?>
" class="card-link">Juegos</a>
  </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
