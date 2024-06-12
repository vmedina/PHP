<?php
// Incluir el archivo de configuración de la base de datos y la clase User
require '../config/database.php';
require '../src/User.php';
// Verificar si se recibió una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear una instancia de la clase User, pasando la conexión PDO como argumento
    $user = new User($pdo);
    // Sanitizar la entrada del usuario e intenta iniciar sesión
    $loggedInUser = $user->login(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
    // Verificar si se pudo iniciar sesión correctamente
    if ($loggedInUser) {
        // Iniciar sesión de PHP para mantener al usuario autenticado
        session_start();
        // Almacenar el ID de usuario en la sesión para identificar al usuario
        $_SESSION['user_id'] = $loggedInUser['id'];
        // Redirigir al usuario a la página de bienvenida después de iniciar sesión
        header('Location: welcome.php');
    } else {
        // Mostrar un mensaje de error si las credenciales de inicio de sesión son incorrectas
        echo 'Invalid login credentials';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <input type="text" name="username" required placeholder="Username">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
