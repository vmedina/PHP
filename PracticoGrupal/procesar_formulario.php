<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rostiseria Los Peques</title>
</head>
<body>
    <h1>Información de comidas Ingresada</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $categoria = htmlspecialchars($_POST["categoria"]);
        $item1_descripcion = htmlspecialchars($_POST["item1_descripcion"]);
        $item1_precio = htmlspecialchars($_POST["item1_precio"]);
        $item2_descripcion = htmlspecialchars($_POST["item2_descripcion"]);
        $item2_precio = htmlspecialchars($_POST["item2_precio"]);
        $item3_descripcion = htmlspecialchars($_POST["item3_descripcion"]);
        $item3_precio = htmlspecialchars($_POST["item3_precio"]);

        $data = [
            "categoria" => $categoria,
            "items" => [
                [
                    "descripcion" => $item1_descripcion,
                    "precio" => $item1_precio
                ],
                [
                    "descripcion" => $item2_descripcion,
                    "precio" => $item2_precio
                ],
                [
                    "descripcion" => $item3_descripcion,
                    "precio" => $item3_precio
                ]
            ]
        ];

        $json_data = json_encode($data, JSON_PRETTY_PRINT);

        $file_path = 'datos_productos.json';
        if (file_put_contents($file_path, $json_data)) {
            echo "<p>Datos guardados correctamente en <code>$file_path</code></p>";
        } else {
            echo "<p>Error al guardar los datos</p>";
        }

        echo "<h2>Categoría de Productos: $categoria</h2>";

        foreach ($data["items"] as $index => $item) {
            echo "<h3>Item " . ($index + 1) . "</h3>";
            echo "<p>Descripción: " . $item["descripcion"] . "</p>";
            echo "<p>Precio: " . $item["precio"] . "</p>";
        }

        echo "<h2>Menú de Productos</h2>";
        echo "<ul>";
        foreach ($data["items"] as $index => $item) {
            echo "<li>" . $item["descripcion"] . " - $" . $item["precio"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se ha enviado ningún formulario.</p>";
    }
    ?>
</body>
</html>
