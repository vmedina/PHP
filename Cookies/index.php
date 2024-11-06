<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
   <?php
    if(isset($_COOKIE["miCookie"])){

        echo "Hola " . $_COOKIE["miCookie"];
    }
    else{
       echo '<h1>Bienvenido a nuestro sitio</h1>
                <form method="POST" action="welcome.php">
                    <label for="name">Ingresa tu nombre:</label>
                    <input type="text" id="name" name="name" required>
                    <input type="submit" value="Enviar">
                </form>';
    }
    
   
   ?>
</body>
</html>