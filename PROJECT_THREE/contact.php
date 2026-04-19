<?php
session_start();
require_once 'config.php';

$success = '';
$error   = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn      = getDB();
    $full_name = $conn->real_escape_string(trim($_POST['full_name'] ?? ''));
    $email     = $conn->real_escape_string(trim($_POST['email'] ?? ''));
    $phone     = $conn->real_escape_string(trim($_POST['phone'] ?? ''));
    $location  = $conn->real_escape_string(trim($_POST['location'] ?? ''));
    $message   = $conn->real_escape_string(trim($_POST['message'] ?? ''));

    if (!$full_name || !$email || !$message) {
        $error = 'Please fill in all required fields (Name, Email, Message).';
    } else {
        $sql = "INSERT INTO contacts (full_name, email, phone, location, message)
                VALUES ('$full_name','$email','$phone','$location','$message')";
        if ($conn->query($sql)) {
            $success = "Thank you, $full_name! Your message has been sent. We will get back to you shortly.";
        } else {
            $error = "Database error: " . $conn->error;
        }
    }
    $conn->close();
}

include 'includes/header.php';
?>

<div class="section">
  <h2 class="section-title">Contact <span>Us</span></h2>
  <div class="divider"></div>

  <?php if ($success): ?>
    <div class="msg-success"><?= $success ?></div>
  <?php endif; ?>
  <?php if ($error): ?>
    <div class="msg-error"><?= $error ?></div>
  <?php endif; ?>

  <div style="display:grid; grid-template-columns:1fr 1fr; gap:50px; align-items:start;">

    
    <div class="form-card" style="max-width:100%; margin:0;">
      <h2>Send Us a Message</h2>
      <form action="contact.php" method="POST">

        <div class="form-group">
          <label for="full_name">Full Name *</label>
          <input type="text" id="full_name" name="full_name" placeholder="Your full name" required />
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" placeholder="your@email.com" required />
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="+250 7XX XXX XXX" />
        </div>

        <div class="form-group">
          <label for="location">Your Location</label>
          <input type="text" id="location" name="location" placeholder="City / District" />
        </div>

        <div class="form-group">
          <label for="message">Message *</label>
          <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" class="btn form-submit">Send Message</button>
      </form>
    </div>

    
    <div>
      <h2 style="font-size:26px; margin-bottom:20px;">Find <span style="color:var(--gold);">Us</span></h2>

      <div style="margin-bottom:20px;">
        <h4 style="color:var(--gold); margin-bottom:6px;">📍 Address</h4>
        <p style="color:#555;">KN 518 Rd, Kigali City Centre<br>Kigali, Rwanda</p>
      </div>

      <div style="margin-bottom:20px;">
        <h4 style="color:var(--gold); margin-bottom:6px;">📞 Phone</h4>
        <p style="color:#555;">+250 783122767<br>+250 798876025</p>
      </div>

      <div style="margin-bottom:20px;">
        <h4 style="color:var(--gold); margin-bottom:6px;">📧 Email</h4>
        <p style="color:#555;">darry'sgrand@123.rw<br>hoteldarry@123.rw</p>
      </div>

      <div style="margin-bottom:20px;">
        <h4 style="color:var(--gold); margin-bottom:6px;">🕐 Opening Hours</h4>
        <p style="color:#555;">
          Monday – Friday: 8:00 AM – 10:00 PM<br>
          Saturday – Sunday: 8:00 AM – 11:00 PM
        </p>
      </div>

      <div style="margin-top:30px; background:var(--cream); padding:20px; border-radius:8px; text-align:center; font-size:40px;">
        🗺️
        <p style="font-size:14px; color:#555; margin-top:10px;">
          Located in the heart of Kigali.<br>we look forward to welcoming you at Darry's Grand Hotel!!
        </p>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>
