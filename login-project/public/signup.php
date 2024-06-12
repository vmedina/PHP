<?php
// Incluir el archivo de configuración de la base de datos y la clase User
require '../config/database.php';
require '../src/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear una instancia de la clase User, pasando la conexión PDO como argumento
    $user = new User($pdo);
    // Sanitizar la entrada del usuario y lo registra

    $user->register(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
   // Redirigir al usuario a la página de inicio de sesión después del registro
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form method="POST" action="signup.php">
        <input type="text" name="username" required placeholder="Username">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Register</button>
    </form>
</body>
</html>
