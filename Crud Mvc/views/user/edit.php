<h1>Editar Usuario</h1>
<form action="index.php?controller=user&action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
    <button type="submit">Actualizar</button>
</form>