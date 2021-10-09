<h3>Agregar juego:</h3>


<form action="CreateGame" method="post">

        <input type="text" placeholder="Juego" name="juego">
        <input type="text" placeholder="Descripcion" name="descripcion">
        <input type="number" placeholder="Precio" name="precio">
        <select name="empresa">
            <option value=1>CD PROJEKT RED</option>
            <option value=2>505 Games</option>
            <option value=3>Electronic Arts</option>
            <option value=4>CAPCOM</option>
            <option value=5>Rockstar Games</option>
        </select>
        <input type="submit" value="Agregar">
        
</form>

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

          

            <td><a href="deleteGame/{$juego->id_juego}">eliminar</a></td>

            <td><a href="viewGame/{$juego->id_juego}">Detalles</a></td>
            
        </tr>
    </tbody>
 
{/foreach}
</table>
