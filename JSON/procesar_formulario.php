<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    //htmlspecialchars se utiiliza para sanitizar los datos y evitar problemas de seguridad como la inyección de código.
    $nombre = htmlspecialchars($_POST['nombre']);
    $precio = htmlspecialchars($_POST['precio']);
    $categoria= htmlspecialchars($_POST['categoria']);
    echo $nombre;
    echo $precio;
    echo $categoria;


    // Validar y procesar los datos
    if (!empty($nombre) && !empty($precio) && !empty($categoria)) {
        // Aquí puedes agregar código para almacenar los datos en una base de datos, enviar un correo, etc.
        
       // Crear un array con los datos
       $datos = array(
        'nombre' => $nombre,
        'precio' => $precio,
        
    );

    // Definir la ruta del archivo JSON
    $archivo_json = 'datos_formulario.json';

    // Leer el contenido actual del archivo JSON si existe
    if (file_exists($archivo_json)) {
        $contenido_actual = file_get_contents($archivo_json);
        $array_datos = json_decode($contenido_actual, true);
    } else {
        // Si el archivo no existe, inicializar un array vacío
        $array_datos = array();
    }

   
    
    $i = 0;
    foreach ($array_datos as $item) {
        //agrega los datos a la categoria correspondiente
       if($item['nombreCategoria'] == $categoria ){
        if (isset($array_datos[$i]['items'])) {
            $array_datos[$i]['items'][] = $datos;  // Agregar $datos al arreglo items existente
        } else {
            $array_datos[$i]['items'] = []; 
            $array_datos[$i]['items'] = [$datos];  // Crear el arreglo items con $datos como primer elemento
        }
           // Guardar los datos en el archivo JSON
            file_put_contents($archivo_json, json_encode($array_datos, JSON_PRETTY_PRINT));

       } 
       $i= $i+1;
       
    }
    

    Redirect('menu.php', false);
    
} else {
    echo "Todos los campos son obligatorios.";
}
} else {
echo "Método no permitido.";
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

?>