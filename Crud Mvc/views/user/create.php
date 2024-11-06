<h1>Crear Nuevo Usuario</h1>
<form action="index.php?controller=user&action=store" method="post">
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo" required>
    <button type="submit">Guardar</button>
</form>