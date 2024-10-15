<?php
require_once '../utils/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['id'];
    deleteUser($userId);
    echo 'User deleted successfully';
}
