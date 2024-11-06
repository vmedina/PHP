<?php

//La carpeta donde buscaremos los controladores
define ('CONTROLLERS_FOLDER', "controllers/");

//Si no se indica un controlador, este es el controlador que se usará
define ('DEFAULT_CONTROLLER', "User");

 //Si no se indica una acción, esta acción es la que se usará
define ('DEFAULT_ACTION', "create");


$controller =  obtenerControlador();
$action = obtenerAction();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     
        //Si la variable $action es una función la ejecutamos o detenemos el script
       
        if ( is_callable ($action))
            if($action == 'edit' || $action == 'delete'){
                $action($_GET[ 'id' ]);
               
            }else{
                $action();
            }           
        else
            die ('La accion no existe - 404 not found');

    } 
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        
        if ($action === 'store') { 
            
            if ( is_callable($action) )
                $action($_POST['name'], $_POST['email']);
            else
                die ('La accion no existe - 404 not found');           
        } elseif ($_GET['action'] === 'update') {
            if ( is_callable($action) )
                $action($_POST['id'], $_POST['name'], $_POST['email']);
            else
                die ('La accion no existe - 404 not found');  

           
        }
    }

   function obtenerControlador(){
    //Obtenemos el controlador.
    //Si el usuario no lo introduce, seleccionamos el de por defecto.
    $controller = DEFAULT_CONTROLLER;
    if ( !empty ( $_GET[ 'controller' ] ) )
        $controller = $_GET [ 'controller' ];

       
        //Ya tenemos el controlador y la accion
        //Formamos el nombre del fichero que contiene nuestro controlador
        $controller = CONTROLLERS_FOLDER . $controller . 'Controller.php';

       
        //Si la variable ($controller) es un fichero lo requerimos
        if ( is_file ( $controller ) ){
            require_once ($controller);
        }      
        else
            {die ('El controlador no existe - 404 not found');} 
            return $controller;

      
   } 

   function obtenerAction(){

        $action = DEFAULT_ACTION;
        // Obtenemos la acción seleccionada.
        // Si el usuario no la introduce, seleccionamos la de por defecto.
        if ( !empty ( $_GET [ 'action' ] ) )
            $action = $_GET [ 'action' ];

        return $action;

   }
?>

