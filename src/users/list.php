<?php
require_once '../utils/database.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();
