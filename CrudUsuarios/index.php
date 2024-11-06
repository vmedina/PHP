<?php

require_once 'controllers/UserController.php';

$controller = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'create') {
        $controller->create();
    } elseif ($_GET['action'] === 'edit') {
        $controller->edit($_GET['id']);
    } elseif ($_GET['action'] === 'delete') {
        $controller->delete($_GET['id']);
    } else {
        $controller->index();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'store') {
        $controller->store($_POST['name'], $_POST['email']);
    } elseif ($_GET['action'] === 'update') {
        $controller->update($_POST['id'], $_POST['name'], $_POST['email']);
    }
}