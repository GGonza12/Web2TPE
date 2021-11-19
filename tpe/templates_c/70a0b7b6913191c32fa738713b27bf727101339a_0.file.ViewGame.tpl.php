<?php
/* Smarty version 3.1.39, created on 2021-11-19 03:06:17
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\ViewGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619706995b3926_59809343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a0b7b6913191c32fa738713b27bf727101339a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\ViewGame.tpl',
      1 => 1637287576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619706995b3926_59809343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table class="table table-hover">

    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td id="id_juego"><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->categorias;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_empresa;?>
</td>
        </tr>
    </tbody>

</table>

<form>
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Ingrese comentario" name="comentario" id="comentario">
    </div>
    <div class="mb-3">
        <input hidden type="text" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
" class="form-control" name="id_comentario" id="id_juego">
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
        {{titulo}}
        <div v-for="coment in coments" :key="coment.id_comentario">

            <p>Comentario: {{ coment.comentario }}</p>
            <span>
                <p>Puntaje: {{coment.puntaje}} </p>
            </span>

                <button :data-id="coment.id_comentario" id="btn-eliminar" v-on:click="delet"
                class="btn btn-primary">Eliminar</button>                


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
