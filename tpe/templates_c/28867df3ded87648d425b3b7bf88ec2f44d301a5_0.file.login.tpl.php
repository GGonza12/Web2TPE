<?php
/* Smarty version 3.1.39, created on 2021-11-22 21:49:38
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c02626cb529_22517752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28867df3ded87648d425b3b7bf88ec2f44d301a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\login.tpl',
      1 => 1637614169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619c02626cb529_22517752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>


<h3>Iniciar sesión</h3>

<div><div>
<form action="verify" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
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
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
