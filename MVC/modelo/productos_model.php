<?php

require "config.php";

   
   function getProductos() {
      $db = getConnection();
      $result = $db->query('SELECT Nombre, Precio, Stock FROM productos');
      $productos = array();

      
      while ( $producto = $result->fetch() )
         $productos[] = $producto;

      return $productos;
   }
   function getProducto($id)
{
   $db = getConnection();
   $query = 'SELECT * FROM productos WHERE id = ?';
   $stmt = $db->prepare($query);
   $stmt->execute(array($id));
   $producto = $stmt->fetch();
   return $producto;
}
?>