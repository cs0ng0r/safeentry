<?php
require_once '../utils/database.php';
require_once '../utils/validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (validateRegistration($email, $password, $password)) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        createUser($email, $hashedPassword);
        echo 'User created successfully';
    } else {
        echo 'Invalid user data';
    }
}
