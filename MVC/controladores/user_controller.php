<?php
// Incluir el archivo de configuración de la base de datos y la clase User


require 'modelo/user_model.php';
function ver_registro ()
{   
   include 'vistas/signup_view.php';
}
function registrar(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crear una instancia de la clase User, pasando la conexión PDO como argumento
        $user = new User();
        // Sanitizar la entrada del usuario y lo registra
    
        $resultado = $user->register(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
       // Redirigir al usuario a la página de inicio de sesión después del registro

       if($resultado){
        include 'vistas/login_view.php';
       }
       else{
        print("el usuario ya existe ");
        }
       
        
    }
}

function login(){
    include 'vistas/login_view.php';
    // Verificar si se recibió una solicitud POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crear una instancia de la clase User, pasando la conexión PDO como argumento
        $user = new User();
        // Sanitizar la entrada del usuario e intenta iniciar sesión
        $loggedInUser = $user->login(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
        // Verificar si se pudo iniciar sesión correctamente
        if ($loggedInUser) {
            // Iniciar sesión de PHP para mantener al usuario autenticado
            session_start();
            // Almacenar el ID de usuario en la sesión para identificar al usuario
            $_SESSION['user_id'] = $loggedInUser['id'];
            print($_SESSION['user_id']);
            // Redirigir al usuario a la página de bienvenida después de iniciar sesión
            header('Location: vistas/welcome_view.php');
        } else {
            // Mostrar un mensaje de error si las credenciales de inicio de sesión son incorrectas
            echo 'Invalid login credentials';
        }
    }

}

function logout() {
    session_start();
    session_destroy();
    header('Location: vistas/public_view.php');
}

?>