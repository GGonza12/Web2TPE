<?php
/* Smarty version 3.1.39, created on 2021-10-10 01:03:00
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61621fa4977e59_19813176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3dc4e9ab71f4e8203bf0bf8982710dfd9c41808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\home.tpl',
      1 => 1633819980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61621fa4977e59_19813176 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Agregar juego:</h3>


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
<?php }
}
