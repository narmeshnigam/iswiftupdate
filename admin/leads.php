<?php
/**
 * Admin leads listing page.
 *
 * Displays all captured leads in a table ordered by most recent. Use
 * this page to export leads or contact prospects. Pagination and
 * filtering can be added in future iterations.
 */
$pageTitle = 'Leads';
require_once __DIR__ . '/partials/header.php';

$leads = [];
$res = $mysqli->query('SELECT * FROM leads ORDER BY created_at DESC');
if ($res) {
    while ($row = $res->fetch_assoc()) {
        $leads[] = $row;
    }
}
?>

<?php if (empty($leads)): ?>
  <p>No leads captured yet.</p>
<?php else: ?>
  <div style="overflow-x:auto;">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>City</th>
          <th>Interest</th>
          <th>Message</th>
          <th>Source Page</th>
          <th>Submitted At</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($leads as $lead): ?>
        <tr>
          <td><?php echo $lead['id']; ?></td>
          <td><?php echo $lead['name']; ?></td>
          <td><?php echo $lead['phone']; ?></td>
          <td><?php echo $lead['email']; ?></td>
          <td><?php echo $lead['city']; ?></td>
          <td><?php echo $lead['interest']; ?></td>
          <td><?php echo nl2br($lead['message']); ?></td>
          <td><?php echo $lead['source_page']; ?></td>
          <td><?php echo $lead['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

<?php require_once __DIR__ . '/partials/footer.php';