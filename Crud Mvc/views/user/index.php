<h1>Lista de Usuarios</h1>
<a href="index.php?controller=user&action=create">Agregar Nuevo Usuario</a>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?php echo htmlspecialchars($user['name']) . ' (' . htmlspecialchars($user['email']) . ')'; ?>
            <a href="index.php?controller=user&action=edit&id=<?php echo $user['id']; ?>">Editar</a>
            <a href="index.php?controller=user&action=delete&id=<?php echo $user['id']; ?>">Eliminar</a>
        </li>
    <?php endforeach; ?>
</ul>
