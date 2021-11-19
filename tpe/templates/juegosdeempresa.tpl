{include file="header.tpl" assing='rol,logged'}
<h1>{$titulo}</h1>
<table class="table table-hover">
	
    <thead>
        <tr>
        <th>Empresa</th>
        <th>Juego</th>
        <th>Descripcion</th>
        <th>Categorias</th>
        <th>Precio</th>
        </tr>
    </thead>
    <tbody>
    {foreach from= $games item= $game}
		<tr>
			<td>{$game->empresa}</td>
            <td>{$game->juego}</td>
            <td>{$game->descripcion}</td>
            <td>{$game->categorias}</td>
            <td>${$game->precio}</td>

        </tr>
    </tbody>
 
{/foreach}
</table>

{include file="footer.tpl"}