<?php
   session_start();
   if (!isset($_SESSION['user_id'])) {
       header('Location: login_view.php');
       exit();
   }
   
 ?>
 <div>
  <h1>header </h1>
 </div>