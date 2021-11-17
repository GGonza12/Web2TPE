{include file="header.tpl"}
<h1>{$titulo}</h1>
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
            <td id="id_juego">{$juego->id_juego}</td>
            <td>{$juego->juego}</td>
            <td>{$juego->categorias}</td>
            <td>{$juego->descripcion}</td>
            <td>${$juego->precio}</td>
            <td>{$juego->id_empresa}</td>
        </tr>
    </tbody>

</table>

<form>
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Ingrese comentario" name="comentario" id="comentario">
    </div>
    <div class="mb-3">
        <input hidden type="text" value="{$juego->juego}" class="form-control" name="id_comentario" id="id_juego">
    </div>
    <button id="agregar_comentario" class="btn btn-primary">Agregar</button>
</form>
{literal}

    <div id="comentarios">
        {{titulo}}
        <div v-for="coment in coments">
            <p>Comentario: {{ coment.comentario }}</p>
            <span>
                <p>Puntaje: {{coment.puntaje}} </p>
                <input type="range" min="1" max="5" list="rango" id="puntaje" >
                <datalist id="rango">

                    <option value="1" label="1">

                    <option value="2" label="2">

                    <option value="3" label="3">

                    <option value="4" label="4">

                    <option value="5" label="5">

                </datalist>
                <button v-on:click="puntuar" class="btn btn-primary" :data-id="coment.id_comentario">Puntuar</button>
            </span>
            <button :data-id="coment.id_comentario" id="btn-eliminar" v-on:click="delet"
                class="btn btn-primary">Eliminar</button>
        </div>
    </div>

{/literal}
{include file="footer.tpl"}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="../js/comentarios.js"></script>