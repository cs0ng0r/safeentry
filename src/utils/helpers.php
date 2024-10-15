<?php
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}


function createUser($email, $password) {
    require_once 'database.php';

    $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
}

function deleteUser($id) {
    require_once 'database.php';

    $sql = 'DELETE FROM users WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
}

function updateUser($id, $email) {
    require_once 'database.php';

    $sql = 'UPDATE users SET email = :email, password = :password WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
}