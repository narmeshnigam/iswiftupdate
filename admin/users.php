<?php
/**
 * Admin users listing page.
 *
 * Displays all user accounts. Editing and creating new users is not
 * supported in v1 but can be added later. Only admin should see
 * roles and emails.
 */
$pageTitle = 'Users';
require_once __DIR__ . '/partials/header.php';

$users = [];
$res = $mysqli->query('SELECT id, name, email, role, created_at FROM users ORDER BY created_at DESC');
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $users[] = $row;
    }
}
?>

<?php if (empty($users)): ?>
  <p>No users found.</p>
<?php else: ?>
  <div style="overflow-x:auto;">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Created At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user['id']; ?></td>
          <td><?php echo $user['name']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo ucfirst($user['role']); ?></td>
          <td><?php echo $user['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

<?php require_once __DIR__ . '/partials/footer.php';