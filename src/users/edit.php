<?php
require_once '../utils/database.php';
require_once '../utils/validation.php';
require_once '../utils/helpers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['id'];
    $email = $_POST['email'];

    if (validateEmail($email)) {
        updateUser($userId, $email);
        echo 'User updated successfully';
    } else {
        echo 'Invalid email address';
    }
}
