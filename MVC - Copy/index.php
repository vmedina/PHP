<html>
<head>
 <title>Tienda Test Mvc</title>
</head>
<body>
  <h1>Productos dados de alta en nuestra libreria</h1>
  <table border="1">
    <tr>
      <th>TITULO</th>
      <th>PRECIO</th>
    </tr>
    <?php
     $host = 'localhost';
     $dbname = 'login_project';
     $username = 'root';
     $password = '';
     try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
      } catch (PDOException $e) {
            die("Error connecting to the database: " . $e->getMessage());
      }
    $result = $db->query('SELECT Nombre, Precio, Stock FROM productos');
    while ($producto = $result->fetch())
    {
     ?>
     <tr>
      <td><?php echo $producto['titulo']?></td>
      <td><?php echo number_format($producto['precio'],2)?></td>
     </tr>
    <?php
    }
    ?>
    </table>
   </body>
</html>