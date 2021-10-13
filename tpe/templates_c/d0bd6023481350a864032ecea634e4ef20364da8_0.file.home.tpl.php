<?php
/* Smarty version 3.1.39, created on 2021-10-13 05:11:19
  from 'C:\xampp\htdocs\Web2TPE\tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61664e57cbd902_85681475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0bd6023481350a864032ecea634e4ef20364da8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2TPE\\tpe\\templates\\home.tpl',
      1 => 1634094676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61664e57cbd902_85681475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="logout">Cerrar sesión</a>
<h3>Agregar juego:</h3>


<form action="CreateGame" method="post">

        <input type="text" placeholder="Juego" name="juego">
        <input type="text" placeholder="Inserte url de imagen" name="imagen">
        <input type="text" placeholder="Categorias" name="categorias">
        <input type="text" placeholder="Descripcion" name="descripcion">
        <input type="number" placeholder="Precio" name="precio">
        <select name="empresa">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value, 'empresas');
$_smarty_tpl->tpl_vars['empresas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empresas']->value) {
$_smarty_tpl->tpl_vars['empresas']->do_else = false;
?>
            <option value=<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
><?php echo $_smarty_tpl->tpl_vars['empresas']->value->empresa;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<table class="table table-hover">

    <thead>
        <tr>
            <th>Id juego</th>
            <th>Juego</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Id_empresa</th>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
                
                <th>eliminar</th>
                <th>Detalles</th>
            <?php }?>

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
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->categorias;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_empresa;?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
                
                <td><a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">eliminar</a></td>
                <td><a href="viewGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
">Detalles</a></td>
            <?php }?>
            
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

<table class="table table-hover">

	
    <thead>
        <tr>
            <th>Id Empresa</th>
            <th>Empresa</th>
        <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
            <th>modificar</th>
            <th>eliminar</th>
        <?php }?>


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
        <?php if ($_smarty_tpl->tpl_vars['rol']->value == true) {?>
            <td><a href="UpdateViewCompany/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
">Modificar</a></td>
            <td><a href="DeleteCompany/<?php echo $_smarty_tpl->tpl_vars['empresas']->value->id_empresa;?>
" >Eliminar</a></td>
        <?php }?>
            


        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
