<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    
    
    //htmlspecialchars se utiiliza para sanitizar los datos y evitar problemas de seguridad como la inyección de código.
    $ci = htmlspecialchars($_POST['ci']);
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $estado = htmlspecialchars($_POST['estado']);

    // Validar y procesar los datos
    if (!empty($ci) &&!empty($nombre) && !empty($apellido) && !empty($email) && !empty($mensaje) && !empty($telefono) && !empty($estado)) {
        // Aquí puedes agregar código para almacenar los datos en una base de datos, enviar un correo, etc.
        
        echo "<h2>Datos recibidos y guardados correctamente:</h2>";
        echo "Ci: " . $ci . "<br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Correo Electrónico: " . $email . "<br>";
        echo "Telefono: " . $telefono . "<br>";
        echo "Estado cívil: " . $estado . "<br>";
   
  
    } else {
     echo "Todos los campos son obligatorios.";
    }
} else {
echo "Método no permitido.";
}
?>