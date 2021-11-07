{include file="header.tpl"}
<h2>{$titulo}</h2>

<h3> Listado de permisos.</h3>

<table class="table table-hover">
	
    <thead>
        <tr>
        <th>Usuario</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Agregar</th>
        <th>Quitar</th>
        </tr>
    </thead>
    <tbody>
    {foreach from= $usuarios item= $usuario}
		<tr>
             <td>{$usuario->usuario}</td>
             <td>{$usuario->email}</td> 
             <td>{$usuario->rol}</td>
             <td><a href="{BASE_URL}agregarPermiso/{$usuario->id_usuario}">Agregar Permiso<a></td>
             <td><a href="{BASE_URL}quitarPermiso/{$usuario->id_usuario}">Eliminar Permiso<a></td>
        </tr>
    </tbody>
 
{/foreach}
</table>

{include file="footer.tpl"}