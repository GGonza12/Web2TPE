{include file="header.tpl"}
{if $rol == true}

    <form action="CreateGame" method="post">

        <input type="text" placeholder="Juego" name="juego">
        <input type="text" placeholder="Inserte url de imagen" name="imagen">
        <input type="text" placeholder="Categorias" name="categorias">
        <input type="text" placeholder="Descripcion" name="descripcion">
        <input type="number" placeholder="Precio" name="precio">
        <select name="empresa">
            {foreach from= $company item= $empresas}
                <option value={$empresas->id_empresa}>{$empresas->empresa}</option>
            {/foreach}
        </select>

        <input type="submit" value="Agregar">

    </form>
{/if}
{foreach from=$juegos item=$juego}


    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{$juego->imagen}" class="img-fluid rounded-start" alt="{$juego->juego}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{$juego->juego}</h5>
                    <p class="card-text">{$juego->descripcion}</p>
                    <p class="card-text">{$juego->categorias}</p>
                    <p class="card-text"><small class="text-muted">Precio: ${$juego->precio}</small></p>
                    <a href="viewGame/{$juego->id_juego}" class="btn btn-primary">Detalles</a>
                    {if $rol == true}
                        <a href="UpdateViewGame/{$juego->id_juego}">Modificar</a>
                        <a href="deleteGame/{$juego->id_juego}">eliminar</a>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{/foreach}
{include file="footer.tpl"}