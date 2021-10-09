<h1>{$titulo}</h1>
<table>
	
    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>
            <th>eliminar</th>
            <th>Detalles</th>

        </tr>
    </thead>
    <tbody>
    {foreach from=$juegos item=$juego}
		<tr>
			<td>{$juego->id_juego}</td>
            <td>{$juego->juego}</td>
            <td>{$juego->descripcion}</td>
            <td>{$juego->precio}</td>
            <td>{$juego->id_empresa}</td>
            <td><a href="deleteTask/{$juego->id_juego}">eliminar</a></td>
            <td><a href="viewTask/{$juego->id_juego}">Detalles</a></td>
            
        </tr>
    </tbody>
 
{/foreach}
</table>