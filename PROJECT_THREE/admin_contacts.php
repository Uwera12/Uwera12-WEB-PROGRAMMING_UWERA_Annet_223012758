<?php
session_start();
require_once 'config.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$conn     = getDB();
$contacts = $conn->query("SELECT * FROM contacts ORDER BY sent_at DESC");
$conn->close();

include 'includes/header.php';
?>

<div class="section">
  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
    <div>
      <h2 class="section-title" style="text-align:left; margin-bottom:0;">
        Contact <span>Messages</span>
      </h2>
      <p style="color:#888; font-size:14px;">Logged in as: <strong><?= htmlspecialchars($_SESSION['admin_username']) ?></strong></p>
    </div>
    <a href="logout.php" class="logout-link">Logout</a>
  </div>

  <div style="overflow-x:auto;">
    <table class="orders-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Location</th>
          <th>Message</th>
          <th>Sent At</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($contacts && $contacts->num_rows > 0): ?>
          <?php while ($row = $contacts->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['full_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['phone']) ?></td>
              <td><?= htmlspecialchars($row['location']) ?></td>
              <td style="max-width:300px;"><?= nl2br(htmlspecialchars($row['message'])) ?></td>
              <td><?= htmlspecialchars($row['sent_at']) ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="7" style="text-align:center; color:#888; padding:30px;">
              No messages have been received yet.
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <div style="margin-top:30px;">
    <a href="admin_orders.php" class="btn">&larr; Back to Orders</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
