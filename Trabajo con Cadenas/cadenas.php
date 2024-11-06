
<?php
/*Escribe un programa en PHP que reemplace todas las ocurrencias de la palabra “error” por “éxito” en el siguiente párrafo: “Este es un mensaje de error. Si ves otro error, por favor reporta el error.” 
Además, muestra la subcadena desde el carácter 10 hasta el 20.
Cuenta los caracteres de la cadena.
Cuenta las palabras de la cadena.
Transforma el párrafo a mayúsculas. 
Transforma esta cadena en un array y borra o remueve el elemento que esté en la posición 4.*/
// El párrafo dado
$parrafo = "Este es un mensaje de error. Si ves otro error, por favor reporta el error.";

// Reemplazar 'error' por 'éxito'
$parrafoModificado = str_replace("error", "éxito", $parrafo);

// Mostrar el párrafo modificado
echo "Párrafo modificado: " . $parrafoModificado . "<br>";

// Extraer y mostrar la subcadena desde el carácter 10 hasta el 20
$subcadena = substr($parrafoModificado, 10, 10);
echo "Subcadena del carácter 10 al 20: " . $subcadena . "<br>";

// Contar y mostrar los caracteres de la cadena
$longitudCadena = strlen($parrafoModificado);
echo "Longitud de la cadena: " . $longitudCadena . "<br>";

// Contar y mostrar las palabras de la cadena
$cantidadPalabras = str_word_count($parrafoModificado);
echo "Cantidad de palabras en la cadena: " . $cantidadPalabras . "<br>";

// Transformar y mostrar el párrafo a mayúsculas
$parrafoMayusculas = strtoupper($parrafoModificado);
echo "Párrafo en mayúsculas: " . $parrafoMayusculas . "<br>";

// Transformar la cadena en un array
$arrayPalabras = explode(" ", $parrafoModificado);

// Remover el elemento en la posición 4
unset($arrayPalabras[4]);

// Mostrar el array después de remover el elemento
echo "Array después de remover el elemento en la posición 4: ";
print_r($arrayPalabras);
?>

