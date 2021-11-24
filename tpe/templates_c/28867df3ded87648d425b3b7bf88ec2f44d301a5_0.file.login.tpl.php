<?php
/* Smarty version 3.1.39, created on 2021-11-24 16:47:24
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e5e8c247561_69144436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28867df3ded87648d425b3b7bf88ec2f44d301a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\login.tpl',
      1 => 1637768838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619e5e8c247561_69144436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>


<h3>Iniciar sesión</h3>

<div><div>
<form action="verify" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control"  name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
<br>
<h3>Crear cuenta</h3>
<form action="createacount" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" name="user" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control"  aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control"  name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
