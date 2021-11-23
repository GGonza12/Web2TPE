<?php
/* Smarty version 3.1.39, created on 2021-11-23 01:29:09
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\ViewGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c35d51237e9_53616152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a0b7b6913191c32fa738713b27bf727101339a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\ViewGame.tpl',
      1 => 1637627347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619c35d51237e9_53616152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('assing'=>'check'), 0, false);
?>
<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['juego']->value->imagen;?>
" class="img-fluid rounded-start"
                style="float:left;width:225px;height:225px; margin-right:10px;">
            <p><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</p>
            <p>Precio: $<?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</p>
            <p hidden id="id_juego"><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</p>
        </div>
    </div>
</div>
<form>
    <div class="mb-3" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" id="coment">
        <textarea class="form-control" placeholder="Ingrese comentario" name="comentario" id="comentario"></textarea>
    </div>
    <input type="range" min="1" max="5" list="rango" id="puntaje">
    <datalist id="rango">
        <option value="1" label="1">
        <option value="2" label="2">
        <option value="3" label="3">
        <option value="4" label="4">
        <option value="5" label="5">
    </datalist>
    <button id="agregar_comentario" class="btn btn-primary">Agregar</button>
</form>

    <div id="comentarios">
        <h4 class="card-header"> {{titulo}} </h4>
        <div v-for="coment in coments" :key="coment.id_comentario" class="card" style="width: 65%;">
            <div class="card-body">
            <h5 class="card-title">Usuario: {{coment.usuario}} </h5>

            <p class="card-subtitle mb-2 text-muted">Puntaje: {{coment.puntaje}} </p>
                <p class="card-text">Comentario: {{ coment.comentario }}</p>
                <button :data-id="coment.id_comentario" id="btn-eliminar" v-on:click="delet"
                    class="btn btn-primary">Eliminar</button>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/comentarios.js"><?php echo '</script'; ?>
><?php }
}
