<?php
require_once 'models/UserModel.php';

// Mostrar todos los usuarios
function index() {
    $userModel = new UserModel();
    $users = $userModel->getAllUsers();
    require 'views/user/index.php'; // Vista para listar usuarios
}

// Mostrar un formulario para crear un nuevo usuario
function create() {
    require 'views/user/create.php';
}

// Guardar el usuario nuevo
function store($name, $email) {
    $userModel = new UserModel();
    $userModel->createUser($name, $email);
    index();
}

// Editar un usuario existente busca el usuario existente en la base de datos y muestra la vista de editar con los datos del usuario precargados
function edit($id) {
    $userModel = new UserModel();
    $user = $userModel->getUserById($id);
    require 'views/user/edit.php'; // Vista para editar usuario
}

// Actualizar usuario en la base de datos
function update($id, $name, $email) {
    $userModel = new UserModel();
    $userModel->updateUser($id, $name, $email);
    index();
}

// Eliminar un usuario de la base de datos
function delete($id) {
    $userModel = new UserModel();
    $userModel->deleteUser($id);
    //El metodo index actualiza la vista del listado de usuarios
    index();
}

