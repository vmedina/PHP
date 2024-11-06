<?php
header('Content-Type: application/json');
$todos = file_get_contents('todos.json');
echo $todos;
?>
