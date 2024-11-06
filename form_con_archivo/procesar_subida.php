<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);

    // Verificar si se ha subido un archivo 
    // $_FILES — Variables de subida de ficheros HTTP
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0 && is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        // Obtener información del archivo
        $nombreArchivo = $_FILES['archivo']['name'];
        $tipoArchivo = $_FILES['archivo']['type'];
        $tamanoArchivo = $_FILES['archivo']['size'];
        $rutaTemporal = $_FILES['archivo']['tmp_name'];

        // Definir la carpeta de destino
        $carpetaDestino = 'uploads/';

        // Crear la carpeta de destino si no existe
        if (!file_exists($carpetaDestino)) {
            //La función mkdir() en PHP se utiliza para crear directorios.
            mkdir($carpetaDestino, 0777, true);
            /**
             *0777: Es el segundo argumento, que define los permisos del directorio en formato octal.
            *Los permisos 0777 significan que todos los usuarios tienen permisos de lectura, escritura y ejecución en ese directorio.
            * 
            *0: Indica que el número es en formato octal.
            *7: Permisos de lectura, escritura y ejecución para el propietario del archivo.
            *7: Permisos de lectura, escritura y ejecución para el grupo propietario.
            *7: Permisos de lectura, escritura y ejecución para otros usuarios.
            *En detalle, los permisos son:

            *4: Permiso de lectura.
            *2: Permiso de escritura.
            *1: Permiso de ejecución.
            *Así, 7 es la suma de 4 + 2 + 1 (lectura, escritura y ejecución).
            *
            *true: Es el tercer argumento, un valor booleano que indica si se deben crear los 
            *directorios padre que no existan. Si se establece en true, se crean todos los 
            *directorios necesarios de manera recursiva. Si se establece en false, solo se 
            *crea el directorio especificado y se genera un error si alguno de los directorios 
            *padre no existe.
             * 
             */
        }

        // Mover el archivo a la carpeta de destino
        $rutaDestino = $carpetaDestino . basename($nombreArchivo);
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "<h2>Archivo subido exitosamente:</h2>";
            echo "Nombre: " . $nombre . "<br>";
            echo "Archivo: " . $nombreArchivo . "<br>";
            echo "Tipo: " . $tipoArchivo . "<br>";
            echo "Tamaño: " . ($tamanoArchivo / 1024) . " KB<br>";
            echo "Ruta: " . $rutaDestino . "<br>";
        } else {
            echo "Hubo un error al subir el archivo. Por favor, inténtelo de nuevo.";
        }
    } else {
        echo "No se ha seleccionado ningún archivo o hubo un error en la subida.";
    }
} else {
    echo "Método no permitido.";
}
?>
