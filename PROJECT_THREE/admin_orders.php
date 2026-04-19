<?php
session_start();
require_once 'config.php';

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$conn   = getDB();
$orders = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
$conn->close();

include 'includes/header.php';
?>

<div class="section">
  <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
    <div>
      <h2 class="section-title" style="text-align:left; margin-bottom:0;">
        Customer <span>Orders</span>
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
          <th>Menu Item</th>
          <th>Address</th>
          <th>Date</th>
          <th>Ordered At</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($orders && $orders->num_rows > 0): ?>
          <?php while ($row = $orders->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['full_name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['phone']) ?></td>
              <td><?= htmlspecialchars($row['menu_item']) ?></td>
              <td><?= htmlspecialchars($row['address']) ?></td>
              <td><?= htmlspecialchars($row['date']) ?></td>
              <td><?= htmlspecialchars($row['created_at']) ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="8" style="text-align:center; color:#888; padding:30px;">
              No orders have been placed yet.
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <div style="margin-top:30px;">
    <a href="admin_contacts.php" class="btn">View Contact Messages</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
