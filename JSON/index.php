
<?php
function generarOptions() {
    $jsonContent = file_get_contents("datos_formulario.json", true);
 // Decodificar el JSON
$array = json_decode($jsonContent, true);

// Verificar que se haya decodificado correctamente
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error al decodificar el JSON: ' . json_last_error_msg());
}

// Recorrer el arreglo
foreach ($array as $item) {
    echo "<option value='" . $item['nombreCategoria'] . "'>" . $item['nombreCategoria'] . "</option>" ;
   
}

}




?>
<!DOCTYPE html>
<html lang="es">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ejemplo</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #ffffff;
    padding: 20px 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h2 {
    margin-top: 0;
    font-size: 24px;
    color: #333;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    font-size: 14px;
    color: #333;
}

input[type="text"],
input[type="precio"],
select {
    margin-top: 5px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    margin-top: 20px;
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #218838;
}

select {
    height: 40px;
}

input:focus,
select:focus {
    border-color: #80bdff;
    outline: none;
    box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
}
    </style>
</head>
<body>
<div class="container">
        <h2>Formulario de Ejemplo</h2>
        <form action="procesar_formulario.php" method="post">
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria">           
                <?php generarOptions(); ?>
            </select>
            <label for="producto">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="precio">Precio:</label>
            <input type="precio" id="precio" name="precio" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

