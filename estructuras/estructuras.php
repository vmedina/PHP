

<?php
echo '<H1>Ejemplo de uso de While:</H1>';

//definimos el indice inicializado en 0
$indice = 0;

//definimos una variable que se ocupara de contar las vueltas
$contadorDeVueltas = 0;

/*ejecuta la accion mientras el indice sea menor a 30*/
while ($indice < 30) {
    echo '<p>Vuelta: ' . ++$indice . '</p>';
}

echo '<H1>Ejemplo de uso de Do:</H1>';

$numero = 1;
/*la instrucción que procede a do se ejecuta la menos una vez, luego se evalua la condición del while*/
do {
    echo "Número: $numero</br>";
    $numero++;
} while ($numero <= 10);


echo '<H1>Ejemplo de uso de For:</H1>';
/*
for posee un indice que se inicializa en este caso en 1
La iteración se realizará mientras el incide sea menor o igual a 10
en cada interacion se incrementa en n veces el indice
*/
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i</br>";
}

echo '<H1>Ejemplo de uso de Foreach:</H1>';

$frutas = array("Manzana", "Banana", "Cereza", "Durazno");
/*recorre todos los elementos de una coleccion*/
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta</br>";
}

?>