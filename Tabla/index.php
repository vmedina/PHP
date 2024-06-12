<?php
$equipos = array(
    array(
    "nombre" => "Nacional",
    "escudo" => "nacional.png",
    "puntos" => 0,
    "partidos_ganados" => 3,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 3,
    "goles_en_contra" => 0,
    "partidos_jugados" => 4,
    "diferencia" => 0
    ),
    array(
    "nombre" => "Peñarol",
    "escudo" => "peniarol.png",
    "puntos" => 0,
    "partidos_ganados" => 2,
    "partidos_empatados" => 2,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 2,
    "goles_en_contra" => 0,
    "partidos_jugados" => 4,
    "diferencia" => 0
    ),
    array(
        "nombre" => "Defensor",
        "escudo" => "defensor.png",
        "puntos" => 0,
        "partidos_ganados" => 1,
        "partidos_empatados" => 3,
        "partidos_perdidos" => 0,
        "goles_a_favor" => 5,
        "goles_en_contra" => 0,
        "partidos_jugados" => 4,
        "diferencia" => 0
        ),
        array(
            "nombre" => "Progreso",
            "escudo" => "progreso.png",
            "puntos" => 0,
            "partidos_ganados" => 1,
            "partidos_empatados" => 2,
            "partidos_perdidos" => 1,
            "goles_a_favor" => 3,
            "goles_en_contra" => 0,
            "partidos_jugados" => 4,
            "diferencia" => 0
            ),
            array(
                "nombre" => "Wanderes",
                "escudo" => "wanderes.png",
                "puntos" => 0,
                "partidos_ganados" => 0,
                "partidos_empatados" => 2,
                "partidos_perdidos" => 2,
                "goles_a_favor" => 5,
                "goles_en_contra" => 0,
                "partidos_jugados" => 4,
                "diferencia" => 0
                )
    
);

function calcularPuntos($ganados, $empatados){
    // Implementa la lógica de cálculo de puntos aquí
    return ($ganados * 3) + ($empatados); // Ejemplo de cálculo de puntos

}
function printTable($equipos){
               
            // Recorremos el arreglo multidimensional
foreach ($equipos as $subArray) {
    echo "<tr>";
    // Recorremos cada sub-arreglo
    foreach ($subArray as $key => $value) {
        $tdInfo = "";
        if($key == "escudo"){
            $tdInfo = '<img src="resources/img/' . $value . '" />'; 
            
        }
        elseif($key == 'puntos')
        {
            // Obtener las claves del array
            $keys = array_keys($subArray);
            // Obtener la posición actual en el array
            $currentKeyIndex = array_search($key, $keys);

            // Verificar si hay suficientes elementos para obtener los tres siguientes
            if ($currentKeyIndex !== false && ($currentKeyIndex + 3) < count($subArray)) {
                $partidosGanados = $subArray[$keys[$currentKeyIndex + 1]];
                $partidosPerdidos = $subArray[$keys[$currentKeyIndex + 2]];
                $partidosEmpatados = $subArray[$keys[$currentKeyIndex + 3]];

                $puntos = calcularPuntos($partidosGanados, $partidosEmpatados);
                //echo "puntos " . $puntos;
                $tdInfo = $puntos;
            }
        }
        else {
            $tdInfo = $tdInfo . $value;
        }
        echo "<td>". $tdInfo ."</td>";
    }
    echo "</tr>"; // Salto de línea para separar cada sub-arreglo
    
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ejemplo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <h2>Tabla de posiciónes liga Uruguaya</h2>

<div class="table-container">
    <table>
        <tr id="encabezado">
            <th>Equipo</th>
            <th></th>        
            <th>Puntos</th>
            <th>P Ganados</th>
            <th>P Emptados</th>
            <th>P Perdidos</th>
            <th>G a Favor</th>
            <th>G en Contra</th>        
            <th>Partidos Jugados</th>
            <th>Dif</th>
        </tr>
            <?php 

                printTable($equipos);

            ?>
            
        </tr>
    </table>
</div>
</body>
</html>

