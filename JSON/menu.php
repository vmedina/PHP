
<?php
function printMenu() {
    $jsonContent = file_get_contents("datos_formulario.json", true);
 // Decodificar el JSON
$array = json_decode($jsonContent, true);

// Verificar que se haya decodificado correctamente
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error al decodificar el JSON: ' . json_last_error_msg());
}

// Recorrer el arreglo
foreach ($array as $item) {
  
    echo '<div class="menu-section">';
    echo '<div class="section-content">';
    echo '<h3>'.$item['nombreCategoria'].'</h3>';
    echo  '<ul>';
       foreach($item["items"] as $producto)
       {
           echo '<li><span>'.$producto["nombre"].'</span><span>'.$producto["precio"].'</span></li>';
       }   
    echo '</ul>';    
    echo '</div>';
    echo '<img src="resources/img/'.$item['imagen'].'" alt="Main Course Image">';
    echo '</div>';
   
}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menu</title>
    <link rel="stylesheet" href="resources/styles/estilos.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>El Mercado Colonia</h1>
            <h2>Menú Gastronómico</h2>
        </div>
        <?php
          printMenu();
         ?>
       

        

        <div class="footer">
            <div>
                <img src="resources/img/telefono.png" alt="Phone Icon">
                <span>123-456-7890</span>
            </div>
            <div>                
                <span>123 General Flores., Colonia del Sacramento</span>
            </div>
        </div>
    </div>
</body>
</html>
