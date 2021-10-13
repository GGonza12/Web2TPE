{include file="header.tpl"}
<h1>{$titulo}</h1>
<table class="table table-hover">
	
    <thead>
        <tr>
        <th>Empresa</th>
        <th>juego</th>
        </tr>
    </thead>
    <tbody>
    {foreach from= $games item= $game}
		<tr>
			<td>{$game->empresa}</td>
            <td>{$game->juego}</td>
        </tr>
    </tbody>
 
{/foreach}
</table>

{include file="footer.tpl"}