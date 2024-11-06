<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    $nombre = $_POST['name'];

    setcookie("miCookie", $nombre, time() +3600 );

    // Redirigimos de vuelta al inicio
    header('Location: index.php');
    exit();
}
?>