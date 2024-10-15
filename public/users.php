<?php
require_once '../src/auth/session.php';
require_once '../templates/header.php';
require_once '../src/users/list.php';
?>

<h2>User Management</h2>
<!-- Admin view of user list -->
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="../src/users/edit.php?id=<?= $user['id']; ?>">Edit</a>
                <a href="../src/users/delete.php?id=<?= $user['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once '../templates/footer.php';
?>