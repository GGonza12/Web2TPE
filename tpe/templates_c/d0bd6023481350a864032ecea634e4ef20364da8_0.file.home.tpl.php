<?php
/* Smarty version 3.1.39, created on 2021-10-12 04:12:36
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6164ef14e161c9_87597425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0bd6023481350a864032ecea634e4ef20364da8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\home.tpl',
      1 => 1634004754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6164ef14e161c9_87597425 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="logout">Cerrar sesión</a>
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

<h3>Agregar Empresa:</h3>

<form action="CreateCompany" method="post">
        <input type="text" placeholder="Inserte Empresa" name="empresa">
        <input type="submit" value="Agregar">        
</form>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
		<tr> 
			<td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->juego;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_empresa;?>
</td>
            <td><a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">eliminar</a></td>
            <td><a href="viewGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Detalles</a></td>
            
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<h3>Filtrar juegos de una empresa</h3>
<form action="ShowGamesOfCompany" method="post">
        <select name="empresa">
            <option value=1>CD PROJEKT RED</option>
            <option value=2>505 Games</option>
            <option value=3>Electronic Arts</option>
            <option value=4>CAPCOM</option>
            <option value=5>Rockstar Games</option>
        </select>
        <input type="submit" value="Listar">
</form>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo2']->value;?>
</h1>

<table>
	
    <thead>
        <tr>
            <th>Id Empresa</th>
            <th>Empresa</th>
            <th>modificar</th>
            <th>eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['empresas']->value->empresa;?>
</td>
             <td><a href="UpdateViewCompany/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
">Modificar</a></td>
            <td><a href="DeleteCompany/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
">Eliminar</a></td>
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<?php }
}
