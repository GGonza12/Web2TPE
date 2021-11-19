{include file="header.tpl" assing='rol,logged'}
<div class="card" style="width: 18rem;">
<form action="{BASE_URL}UpdateCompany" method="post">
<div class="mb-3">
<input type="text" class="form-control" placeholder="{$empresa}" name="empresa" >
</div>
<div class="mb-3">
<input type="text" class="form-control" placeholder="{$informacion}" name="informacion" >
</div>
<input hidden type="text"  value="{$id}" name="id">
<button type="submit" class="btn btn-primary">Modificar</button>
</form>
</div>
{include file="footer.tpl"}