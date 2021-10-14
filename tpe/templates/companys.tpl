{include file="header.tpl"}
{if $rol == true}

    <form action="CreateCompany" method="post">

        <input type="text" placeholder="Empresa" name="empresa">
        <input type="text" placeholder="Descripcion" name="descripcion">
        <input type="submit" value="Agregar">

    </form>
{/if}
{foreach from=$companys item=$company}

  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{$company->empresa}</h5>
    <p class="card-text">{$company->descripcion}</p>
    {if $rol == true}
       <a href="{BASE_URL}UpdateViewCompany/{$company->id_empresa}" class="card-link">Modificar</a>
       <a href="{BASE_URL}DeleteCompany/{$company->id_empresa}" class="card-link">Eliminar</a>
    {/if}
    <a href="{BASE_URL}ShowGamesOfCompany/{$company->id_empresa}" class="card-link">Juegos</a>
  </div>
</div>
{/foreach}
{include file="footer.tpl"}