<?php
 function listar ()
 {
    //Incluye el modelo que corresponde
    require 'modelo/productos_model.php';
    //Le pide al modelo todos los productos
    $productos = getProductos();
    //Pasa a la vista toda la información que se desea representar
    include 'vistas/productos_view.php';
 }

 function ver ()
{
   if ( !isset ( $_GET [ 'id' ] ) )
      die("No has especificado un identificador de producto.");
   $id = $_GET [ 'id' ];
   //Incluimos el modelo correspondiente
   require 'modelo/productos_model.php';
   //Le pide al modelo el producto con id = $id
   $producto = getProducto($id);
   if ($producto === null)
      die("Identificador de producto incorrecto");
   //Pasamos a la vista toda la información que se desea representar
   include('vistas/producto_view.php');
}