<?php
/*
    1. Arreglos Indexados
    Los arreglos indexados utilizan números enteros como claves para acceder a sus elementos. 
    Estos índices son generados automáticamente a partir de 0. 
*/
$ciudadesDeColonia = array('Colonia', 'Juan Lacaze','Carmelo', 'Rosario', 'Nueva Helvecia');
echo $ciudadesDeColonia[1]; // Salida: Juan Lacaze


foreach ($ciudad as $ciudadesDeColonia) {
    echo "$ciudad<br>";
}



/* 

    2. Arreglos Asociativos
    Los arreglos asociativos utilizan claves nombradas en lugar de índices numéricos para acceder a sus elementos. */

    $edades = array("Juan" => 25, "Ana" => 30, "Pedro" => 28);
    echo $edades["Ana"]; // Salida: 30


/*
    3. Arreglos Multidimensionales
    Son arreglos que contienen otros arreglos como elementos.
    Pueden ser indexados o asociativos. 
    
*/
$productos = array(
    array("Nombre" => "Laptop", "Precio" => 800),
    array("Nombre" => "Mouse", "Precio" => 20)
);
echo $productos[0]["Nombre"]; // Salida: Laptop


/*Operaciones con Arreglos*/

// Creación de un arreglo indexado
$frutas = array("Manzana", "Banana", "Cereza");

// Creación de un arreglo asociativo
$persona = array("Nombre" => "Carlos", "Edad" => 35);


//Acceso

echo $frutas[1]; // Salida: Banana
echo $persona["Nombre"]; // Salida: Carlos


//Modificación

$frutas[1] = "Naranja"; // Modifica el segundo elemento
$persona["Edad"] = 36;  // Modifica la edad

//Eliminación de Elementos

unset($frutas[0]); // Elimina "Manzana"
unset($persona["Nombre"]); // Elimina el nombre


/*
Funciones Útiles
1. array_push
Agrega uno o más elementos al final de un arreglo.*/

array_push($frutas, "Uva", "Mango");

/*2. array_pop
Elimina y devuelve el último elemento del arreglo. */

$ultimaFruta = array_pop($frutas);

/*3. array_merge
Une uno o más arreglos. */

$masFrutas = array("Pera", "Sandía");
$todasLasFrutas = array_merge($frutas, $masFrutas);

/*4. array_slice
Extrae una porción del arreglo. */

$frutasSeleccionadas = array_slice($frutas, 1, 2); // Devuelve 2 elementos desde el índice 1


/*5. array_map
Aplica una función a cada elemento del arreglo. */
$numeros = array(1, 2, 3, 4);
$cuadrados = array_map(function($n) { return $n * $n; }, $numeros);

/**6. array_filter
Filtra elementos de un arreglo utilizando una función de callback. */
$numerosPares = array_filter($numeros, function($n) { return $n % 2 == 0; });


/*
Estas operaciones y funciones te permiten manipular y trabajar con arreglos de manera eficiente en PHP, 
cubriendo las necesidades básicas y avanzadas del manejo de datos estructurados 
en este lenguaje de programación. 
*/
?>