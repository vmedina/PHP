
<?php
/*Ejemplos de Usos del if en PHP
1. Condicional Simple
Verifica si una condición es verdadera y ejecuta el bloque de código correspondiente.
Explicación: Si la variable $edad es mayor o igual a 18, se imprime "Eres mayor de edad."
*/

$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad.</br>";
}


/*
2. Condicional if-else
Proporciona una alternativa si la condición es falsa. 
Explicación: Si la variable $hora es menor que 12, se imprime "Turno Matutino"; de lo contrario, se imprime "Turno Vesepertino."
*/

$hora = 15;
if ($hora < 12) {
    echo "Turno Matutitno.</br>";
} else {
    echo "Turno Vespertino.</br>";
}


/*
3. Condicional if-elseif-else
Permite múltiples condiciones. 
Explicación: Se verifica si todos los lados son iguales usando if. Si es cierto, el triángulo es equilátero.
Si no es equilátero, se verifica si al menos dos lados son iguales usando else if. Si es cierto, el triángulo es isósceles.
Si ninguna de las condiciones anteriores se cumple, el triángulo es escaleno.
*/
// Variables que contienen las longitudes de los lados del triángulo
$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

// Variable para almacenar el tipo de triángulo
$tipo_triangulo = "";

// Usando if y else if para determinar el tipo de triángulo
if ($lado1 == $lado2 && $lado2 == $lado3) {
    $tipo_triangulo = "Equilátero";
} else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    $tipo_triangulo = "Isósceles";
} else {
    $tipo_triangulo = "Escaleno";
}

// Mostrar el resultado
echo "Un triángulo con lados $lado1, $lado2 y $lado3 es de tipo: $tipo_triangulo";


/*4. Condicional Anidado
Permite condiciones dentro de otras condiciones.
Explicación: Primero verifica si $usuario es "admin". Si es verdadero, evalúa la segunda condición ($clave == "1234"). Si ambas condiciones son verdaderas, se imprime "Acceso concedido."
*/
$usuario = "admin";
$clave = "1234";
if ($usuario == "admin") {
    if ($clave == "1234") {
        echo "Acceso concedido.</br>";
    } else {
        echo "Contraseña incorrecta.</br>";
    }
} else {
    echo "Usuario no reconocido.</br>";
}


/*
5. Condicional con Operador Ternario
Forma corta del if-else.
Explicación: Utiliza el operador ternario ? para verificar si $edad es mayor o igual a 18. Si es verdadero, imprime "Mayor de edad"; de lo contrario, imprime "Menor de edad."

*/
$edad = 20;
echo ($edad >= 18) ? "Mayor de edad" : "Menor de edad";

/*
6. Condicional con switch
Una alternativa a múltiples if-elseif-else.
*/

$día = "martes";
switch ($día) {
    case "lunes":
        echo "Hoy es lunes.</br>";
        break;
    case "martes":
        echo "Hoy es martes.</br>";
        break;
    case "miércoles":
        echo "Hoy es miércoles.</br>";
        break;
    default:
        echo "Día no reconocido.</br>";
}

/*
Explicación: Evalúa la variable $día y ejecuta el bloque de código correspondiente al valor que coincida. 
Si $día es "martes", se imprime "Hoy es martes."

Estos ejemplos cubren los usos básicos y avanzados de la sentencia if en PHP, 
ayudando a controlar el flujo del programa en función de condiciones específicas. 

*/

?>