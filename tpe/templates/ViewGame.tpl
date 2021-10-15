{include file="header.tpl"}
<h1>{$titulo}</h1>
<table class="table table-hover">
	
    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>

        </tr>
    </thead>
    <tbody>
		<tr>
			<td>{$juego->id_juego}</td>
            <td>{$juego->juego}</td>
            <td>{$juego->categorias}</td>
            <td>{$juego->descripcion}</td>
            <td>${$juego->precio}</td>
            <td>{$juego->id_empresa}</td>
        </tr>
    </tbody>

</table>
{include file="footer.tpl"}