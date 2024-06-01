<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Ya estas logueado en el sitio!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
