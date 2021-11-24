{include file="header.tpl" assing='check'}


<h3>Iniciar sesión</h3>

<div><div>
<form action="verify" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control"  name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h4>{$error}</h4>
<br>
<h3>Crear cuenta</h3>
<form action="createacount" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control"  aria-describedby="emailHelp" name="user" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control"  aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control"  name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


{include file="footer.tpl"}