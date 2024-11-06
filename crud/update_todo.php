<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['task']) && isset($data['completed'])) {
    $todos = json_decode(file_get_contents('todos.json'), true);
    foreach ($todos as &$todo) {
        if ($todo['id'] == $data['id']) {
            $todo['task'] = $data['task'];
            $todo['completed'] = $data['completed'];
            file_put_contents('todos.json', json_encode($todos));
            echo json_encode(['message' => 'Tarea actualizada', 'todo' => $todo]);
            exit;
        }
    }
    echo json_encode(['message' => 'Tarea no encontrada']);
} else {
    echo json_encode(['message' => 'Datos inválidos']);
}
?>
