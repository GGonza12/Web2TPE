{include file="header.tpl" assing='check'}
<h2>{$titulo}</h2>

<div class="card" style="width: 18rem;">
<form action="{BASE_URL}UpdateGame" method="post" enctype="multipart/form-data">
<div class="mb-3">
<input type="text" class="form-control" placeholder="Juego" name="juego">
</div>
<div class="mb-3">
<input type="file" class="form-control" placeholder="Imagen" name="imagen_name" id="imageToUpload">
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Categorias" name="categorias">
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
</div>
<div class="mb-3">
<input type="number" class="form-control" placeholder="Precio" name="precio">
</div>
<input hidden type="text"  value="{$juego->id_juego}" name="id">
<select class="form-select" aria-label="Default select example" name="empresa">
{foreach from= $company item= $empresas}
<option value={$empresas->id_empresa}>{$empresas->empresa}</option>
{/foreach}
</select>
<button type="submit" class="btn btn-primary">Modificar</button>
</form>
</div>

{include file="footer.tpl"}