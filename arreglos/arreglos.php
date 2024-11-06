<?php

$departamentos = ["Colonia","Maldonado", "Rocha", "Duranzno", "Cerro Largo"  ,"Montevideo","San José", "Canelones", "Lavalleja", "Paysandú", "Salto", "Flores", "Florida","Soriano","Río Negro", "Artigas", "Tacuarembo", "Treinta y Tres", "Rivera" ];
$capitales = ["Artigas", "Salto", "Paysandú", "Río Negro", "Mercedes", "Colonia del Sacramento", "Rivera", "Tacuarembó",  "Trinidad", "San José de Mayo",  "Durazno",  "Florida", "Canelones",  "Melo",  "Treinta y Tres", "Minas",  "Maldonado", "Rocha",  "Montevideo"];
$resultado = array_merge($departamentos, $capitales);
//ordena de menor a mayor
sort($resultado);
// cuenta los elementos del arreglo
count($resultado);

//quita el último elemento
$quitar = array_pop($resultado);

print_r($resultado);





?>
