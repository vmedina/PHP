<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id'])) {
    $todos = json_decode(file_get_contents('todos.json'), true);
    $newTodos = array_filter($todos, function($todo) use ($data) {
        return $todo['id'] != $data['id'];
    });

    if (count($todos) != count($newTodos)) {
        file_put_contents('todos.json', json_encode(array_values($newTodos)));
        echo json_encode(['message' => 'Tarea eliminada']);
    } else {
        echo json_encode(['message' => 'Tarea no encontrada']);
    }
} else {
    echo json_encode(['message' => 'Datos inválidos']);
}
?>