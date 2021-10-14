{include file="header.tpl"}
<h2>{$titulo}</h2>
<form action="{BASE_URL}UpdateGame" method="post">
    <input type="text" placeholder="Juego" name="juego">
    <input type="text" placeholder="Inserte url de imagen" name="imagen">
    <input type="text" placeholder="Categorias" name="categorias">
    <input type="text" placeholder="Descripcion" name="descripcion">
    <input type="number" placeholder="Precio" name="precio">
    <input hidden type="text"  value="{$juego->id_juego}" name="id">
    <select name="empresa">
        {foreach from= $company item= $empresas}
            <option value={$empresas->id_empresa}>{$empresas->empresa}</option>
        {/foreach}
    </select>

    <input type="submit" value="Modificar">

</form>
{include file="footer.tpl"}