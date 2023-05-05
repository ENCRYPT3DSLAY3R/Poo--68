<?php
session_start();

// include database
if (isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numeroTelefono = $_POST['numeroTelefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validate inputs
    if (empty($nombre)) {
        $errors['nombre'] = 'Debes incluir un nombre';
    }
    if (empty($apellido)) {
        $errors['apellido'] = 'Debes incluir un apellido';
    }
    if (empty($numeroTelefono)) {
        $errors['numeroTelefono'] = 'Debes incluir un numero de telefono';
    }
    if (empty($numeroTelefono)) {
        $errors['numeroTelefono'] = 'Debes incluir un numero de telefono';
    }
    if (empty($email)) {
        $errors['email'] = 'Debes incluir un correo';

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is invalid';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } else if (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters long';
    }

    // check if email is already registered
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $errors['email'] = 'Este correo ya esta en uso';
    }

    // insert user into database
    if (count($errors) === 0) {
        $sql = "INSERT INTO users (nombre, apellido, numeroTelefono, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $nombre, $apellido, $numeroTelefono, $email, password_hash($password, PASSWORD_DEFAULT));
        $stmt->execute();

        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['numeroTelefono'] = $numeroTelefono;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'You are now logged in';

        header('location: ../home.php');
        exit();
    }
}
