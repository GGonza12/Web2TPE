{include file="header.tpl" assing='check'}
{if $check == "admin"}
    <h3>Formulario para insertar un juego:</h3>
    <div class="card" style="width: 18rem;">
    <form action="{BASE_URL}CreateGame" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Juego" name="juego" required>
  </div>
  <div class="mb-3">
  <input type="file" class="form-control" placeholder="Imagen" name="imagen_name" id="imageToUpload">
</div>
  <div class="mb-3">
  <input type="text" class="form-control" placeholder="Categorias" name="categorias" required>
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required>
</div>
<div class="mb-3">
<input type="number" class="form-control" placeholder="Precio" name="precio" required>
</div>
<select class="form-select" aria-label="Default select example" name="empresa" >
{foreach from= $company item= $empresas}
    <option value={$empresas->id_empresa}>{$empresas->empresa}</option>
{/foreach}
</select>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
</div>

{/if}
<h3>Juegos:</h3>
{foreach from=$juegos item=$juego}


    <div class="card mb-3" style="max-width: 90%;">
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
                    {if $check == "admin"}
                        <a href="UpdateViewGame/{$juego->id_juego}">Modificar</a>
                        <a href="deleteGame/{$juego->id_juego}">eliminar</a>
                    {/if}
                </div>
            </div>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"}