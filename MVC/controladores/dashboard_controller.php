<?php

 function index() {
    //cheuear la session en las paginas privadas para ve si el usuario esta logueado.
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: vistas/login_view.php');
        exit();
    }else{
        include 'vistas/welcome_view.php';
    }

    }

        
    



?>