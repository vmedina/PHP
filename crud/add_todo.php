<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['task'])) {
    $todos = json_decode(file_get_contents('todos.json'), true);
    $newTodo = [
        'id' => end($todos)['id'] + 1,
        'task' => $data['task'],
        'completed' => false
    ];
    $todos[] = $newTodo;
    file_put_contents('todos.json', json_encode($todos));
    echo json_encode(['message' => 'Tarea agregada', 'todo' => $newTodo]);
} else {
    echo json_encode(['message' => 'Datos inválidos']);
}
?>
