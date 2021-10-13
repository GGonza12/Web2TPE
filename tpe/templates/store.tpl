{include file="header.tpl"}

{foreach from=$juegos item=$juego}



<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{$juego->imagen}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{$juego->juego}</h5>
        <p class="card-text">{$juego->descripcion}</p>
        <p class="card-text"><small class="text-muted">${$juego->precio}</small></p>
      </div>
    </div>
  </div>
</div>
{/foreach}
{include file="footer.tpl"}
