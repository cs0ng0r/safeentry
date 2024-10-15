<?php
require_once '../templates/header.php';
?>

<h2>Register</h2>
<form method="post" action="../src/auth/register.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<?php
require_once '../templates/footer.php';
?>
