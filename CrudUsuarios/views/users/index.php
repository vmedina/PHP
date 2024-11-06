<h1>Lista de Usuarios</h1>
<a href="/user/create">Agregar Nuevo Usuario</a>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?php echo htmlspecialchars($user['name']) . ' (' . htmlspecialchars($user['email']) . ')'; ?>
            <a href="/user/edit?id=<?php echo $user['id']; ?>">Editar</a>
            <a href="/user/delete?id=<?php echo $user['id']; ?>">Eliminar</a>
        </li>
    <?php endforeach; ?>
</ul>
