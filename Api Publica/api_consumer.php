
<?php

// Token de Wit.ai
$wit_ai_token = "F2QPEWZNWAN7KXFJOBIDJMUGMYSB5KSL";

// Función para enviar una consulta a la API de Wit.ai
function sendToWitAI($message, $wit_ai_token) {
    $url = "https://api.wit.ai/message?v=20201004&q=" . urlencode($message);
    
    // Configuración de cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $wit_ai_token",
        "Content-Type: application/json"
    ));
    
    // Ejecutar cURL y obtener la respuesta
    $response = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($response, true);  // Decodificar la respuesta JSON
}

// Función para generar una respuesta basada en los intents y entities detectados
function generateResponse($wit_response) {
  //var_dump($wit_response['intents'][0]['name']) ;
    if (isset($wit_response['intents']) && count($wit_response['intents']) > 0) {
        
        //obtenemos el nombre del Intent
        $intent = $wit_response['intents'][0]['name'];
        
        // Manejar diferentes intents
        switch ($intent) {
            case 'greeting':
                return "¡Hola! ¿Cómo puedo ayudarte hoy?";
            
            case 'Preguntas_sobre_tecnolog_a':
                
                if (isset($wit_response['entities']['Dispositivo:Dispositivo'][0]['body'])) {
                    $tema = $wit_response['entities']['Dispositivo:Dispositivo'][0]['body'];
                    
                    if($tema == 'computadora'){
                        return "Una buena opcion calidad precio es 
                        Dell Inspiron 15 3511 15.6 Inch Laptop, Full HD LED Non-Touch WVA Display - Intel Core i3-1115G4, 8GB DDR4 RAM, 256GB SSD, UHD Graphics, Windows 11 Home - Carbon Black. Quieres algo de mayor calidad?";
                    }
                    else if($tema == 'celular'){
                        return "Dos buenas opciones de celulares son Motrola y  Sammnsung Quires algun datos particular de estos productos?";
                    }
                    else{
                        return "Entendido, quieres saber sobre $tema. ¿Quieres que te recomiende marcas?";
                    }
                    
                } else {
                    return "Podrías darme más información de tu consula";
                }
            case 'Problemas_t_cnicos':
                if (isset($wit_response['entities']['Celulares:Celulares'][0]['body']) ) {
                    $tema = $wit_response['entities']['Celulares:Celulares'][0]['body'];
                    return "Veo que tiene un problema con tu $tema, puedes comunicarte con el servicio tecnico al 099988766";
                }
                elseif (isset($wit_response['entities']['Dispositivo:Dispositivo'][0]['body']) ) {
                    $tema = $wit_response['entities']['Dispositivo:Dispositivo'][0]['body'];
                    return "Veo que tiene un problema con tu $tema, puedes comunicarte con el servicio tecnico al 099934243";
                }
                else{
                    return "Por otro tipo de problemas dirigase directamente a nuestro local sin agenda previa";
                }

            case 'Saludo':
                return "Puedo ayudarte con algún tema de tecnología. ¿Podrías especificar más sobre tema del que quieres saber?";
            
            default:
                return "Lo siento, no estoy seguro de cómo ayudarte con eso.";
        }
    } else {
        return "No pude entender tu consulta, ¿puedes intentarlo de nuevo?";
    }
}

// Procesar el mensaje del usuario (cambiarlo por una entrada dinámica que llegue desde un formulario)
$user_message = $_POST['message'];

// Enviar mensaje a Wit.ai
$wit_response = sendToWitAI($user_message, $wit_ai_token);

// Generar una respuesta para el usuario basada en la interpretación de Wit.ai
$response = generateResponse($wit_response);

// Mostrar la respuesta en la pantalla
echo $response;

?>


