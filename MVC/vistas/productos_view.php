<html>
 <head>
   <title>Tienda Mora</title>
 </head>
 <body>
  <h1>productos dados de alta en nuestra Tienda</h1>
  <table border="1">
   <tr>
    <th>TITULO</th>
    <th>PRECIO</th>
    <th>STOCK</th>
   </tr>
   <?php foreach ($productos as $producto): ?>
    <tr>
      <td><?php echo $producto['Nombre']?></td>
      <td><?php echo number_format($producto['Precio'],2)?></td>
      <td><?php echo $producto['Stock']?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>