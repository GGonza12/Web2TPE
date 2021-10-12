<h3>Iniciar sesión</h3>

<form action="verify" method="POST">
    <input placeholder="email" type="email" name="email" required>
    <input placeholder="Contraseña" type="password" name="password" required>
    <input type="submit">
</form>
<h4>{$error}</h4>

<h3>Crear cuenta</h3>

<form action="createacount" method="POST">
    <input placeholder="nombre" type="text" name="user" required>
    <input placeholder="email" type="email" name="email" required>
    <input placeholder="Contraseña" type="password" name="password" required>
    <input type="submit">
</form>