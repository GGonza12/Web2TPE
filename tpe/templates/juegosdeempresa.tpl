<h1>Juegos</h1>

<table>
	
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