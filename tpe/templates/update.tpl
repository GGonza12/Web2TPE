{include file="header.tpl"}

<form action="{BASE_URL}UpdateCompany" method="post">
        <input type="text" placeholder="{$empresa}" name="empresa" >
        <input type="text" placeholder="{$descripcion}" name="descripcion" >
        <input hidden type="text"  value="{$id}" name="id">
        <input type="submit" value="Modificar">
  
</form>
{include file="footer.tpl"}