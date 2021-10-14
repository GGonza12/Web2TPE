{include file="header.tpl"}

<h3>Filtrar juegos de una empresa</h3>
<form action="ShowGamesOfCompany" method="post">
    <select name="empresa">
            {foreach from= $company item= $empresas}
                <option value={$empresas->id_empresa}>{$empresas->empresa}</option>
            {/foreach}
        </select>
    <input type="submit" value="Listar">
</form>

{include file="footer.tpl"}