<?php
session_start();
require_once 'config.php';

$error = '';

if (isLoggedIn()) {
    header('Location: admin_orders.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $conn = getDB();
    $u    = $conn->real_escape_string($username);
    $result = $conn->query("SELECT * FROM admin_users WHERE username='$u' LIMIT 1");
    $user   = $result ? $result->fetch_assoc() : null;
    $conn->close();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username']  = $username;
        header('Location: admin_orders.php');
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}

include 'includes/header.php';
?>

<div class="section" style="max-width:420px;">
  <h2 class="section-title">Admin <span>Login</span></h2>
  <div class="divider"></div>

  <?php if ($error): ?>
    <div class="msg-error"><?= $error ?></div>
  <?php endif; ?>

  <div class="form-card" style="max-width:100%; margin:0;">
    <h2>Sign In</h2>
    <form action="login.php" method="POST">

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="admin" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required />
      </div>

      <button type="submit" class="btn form-submit">Login</button>
    </form>
    <p style="margin-top:16px; font-size:13px; color:#888; text-align:center;">
      Default credentials: <strong>admin</strong> / <strong>admin11</strong>
    </p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
