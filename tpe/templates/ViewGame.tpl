{include file="header.tpl" assing='check'}
<div class="container">
    <h1>{$titulo}</h1>
    <div class="row">
        <div class="col-md-12">
            <img src="{$juego->imagen}" class="img-fluid rounded-start"
                style="float:left;width:225px;height:225px; margin-right:10px;">
            <p>{$juego->descripcion}</p>
            <p>Precio: ${$juego->precio}</p>
            <p hidden id="id_juego">{$juego->id_juego}</p>
        </div>
    </div>
</div>
<form>
    <div class="mb-3" data-user="{$user}" id="coment">
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
{literal}
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
{/literal}
{include file="footer.tpl"}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="../js/comentarios.js"></script>