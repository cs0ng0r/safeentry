<?php
require_once '../src/auth/session.php';
require_once '../templates/header.php';
?>

<h2>Login</h2>
<form method="post" action="../src/auth/login.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php
require_once '../templates/footer.php';
?>

