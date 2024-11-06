<?php
echo 'Ejercicio 1<br>';
function calificarExamen($puntajeExamen){
    if(is_int($puntajeExamen)){
        $calificacion=" ";
        if($puntajeExamen>=90){
            $calificacion="A";
            echo 'Su calificacion es: '. $calificacion;
        }elseif($puntajeExamen<90 && $puntajeExamen>=80){
            $calificacion ="B";
            echo 'Su calificacion es: '. $calificacion;
        }elseif($puntajeExamen<80 && $puntajeExamen>=70){
            $calificacion="C";
            echo 'Su calificacion es: '. $calificacion;
        }else{
            $calificacion="F";
            echo 'Su calificacion es: '. $calificacion;
        }
    }else{
        echo 'No ha introducido un numero, o puede ser que sí pero como un string';
    }
        
}

calificarExamen(76);


echo '<br>Ejercicio 2<br>';

function saludarSegunHora($hora){
    if(is_int($hora)){
        if($hora>=6 && $hora<=12){
            echo 'Buenos dias';
        }elseif($hora>12 && $hora<18){
            echo 'Buenas tardes';
        }elseif($hora>24){
            echo 'No introdujo una hora correcta, recuerde solo de 0-24hrs';
        }else{
            echo 'Buenas noches';
        }
    }else{
        echo 'No ha introducido un numero, o puede ser que sí pero como un string';
    }
}

saludarSegunHora(0000);


echo '<br>Ejercicio 3<br>';
function clasificacarSegunEdad($edadPersona){
    if(is_int($edadPersona)){
        if($edadPersona<18){
            echo 'Es menor de edad';
        }elseif($edadPersona>18&& $edadPersona<=64){
            echo 'Eres un adulto';
        }else{
            echo 'Es una persona mayor';
        }    
    }else{
        echo 'No ha introducido un numero, o puede ser que sí pero como un string';
    }
  
}

clasificacarSegunEdad(8);

?>