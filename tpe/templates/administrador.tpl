{include file="header.tpl" assing='check'}
<h2>{$titulo}</h2>
<h4>{$error}</h4>

<table class="table table-hover">

    <thead>
        <tr>
            <th>Usuario</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Agregar</th>
            <th>Quitar</th>
            <th>Eliminar Usuario</th>
        </tr>
    </thead>
    <tbody>
        {foreach from= $usuarios item= $usuario}
            <tr>
                <td>{$usuario->usuario}</td>
                <td>{$usuario->email}</td>
                <td>{$usuario->rol}</td>
                <td>
                    <form action="{BASE_URL}agregarPermiso/{$usuario->id_usuario}">
                        <button class="btn btn-outline-success">Agregar Permiso</button>
                    </form>
                </td>
                <td>
                    <form action="{BASE_URL}quitarPermiso/{$usuario->id_usuario}">
                        <button class="btn btn-outline-warning">Eliminar Permiso</button>
                    </form>
                </td>
                <td>
                    <form action="{BASE_URL}eliminarUsuario/{$usuario->id_usuario}">
                        <button class="btn btn-outline-danger">Eliminar Usuario</button>
                    </form>
                </td>
            </tr>
        </tbody>

    {/foreach}
</table>

{include file="footer.tpl"}