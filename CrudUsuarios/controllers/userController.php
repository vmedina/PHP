<?php

require_once 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Mostrar todos los usuarios
    public function index() {
        $users = $this->userModel->getAllUsers();
        require 'views/user/index.php'; // Vista para listar usuarios
    }

    // Mostrar un formulario para crear un nuevo usuario
    public function create() {
        require 'views/user/create.php';
    }

    // Guardar el usuario nuevo
    public function store($name, $email) {
        $this->userModel->createUser($name, $email);
        header('Location: /user/index');
    }

    // Editar un usuario existente
    public function edit($id) {
        $user = $this->userModel->getUserById($id);
        require 'views/user/edit.php'; // Vista para editar usuario
    }

    // Actualizar usuario
    public function update($id, $name, $email) {
        $this->userModel->updateUser($id, $name, $email);
        header('Location: /user/index');
    }

    // Eliminar un usuario
    public function delete($id) {
        $this->userModel->deleteUser($id);
        header('Location: /user/index');
    }
}
