<h1>{$titulo2}</h1>

<table>
	
    <thead>
        <tr>
            <th>Id Empresa</th>
            <th>Empresa</th>
        </tr>
    </thead>
    <tbody>
    {foreach from= $company item= $empresas}
		<tr>
			<td>{$empresas->id_empresa}</td>
            <td>{$empresas->empresa}</td>
        </tr>
    </tbody>
 
{/foreach}
</table>