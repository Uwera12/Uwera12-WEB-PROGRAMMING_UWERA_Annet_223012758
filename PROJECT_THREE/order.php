<?php
session_start();
require_once 'config.php';

$success = '';
$error   = '';

$preselect = isset($_GET['item']) ? htmlspecialchars($_GET['item']) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn      = getDB();
    $full_name = $conn->real_escape_string(trim($_POST['full_name'] ?? ''));
    $email     = $conn->real_escape_string(trim($_POST['email'] ?? ''));
    $phone     = $conn->real_escape_string(trim($_POST['phone'] ?? ''));
    $menu_item = $conn->real_escape_string(trim($_POST['menu_item'] ?? ''));
    $address   = $conn->real_escape_string(trim($_POST['address'] ?? ''));
    $date      = $conn->real_escape_string(trim($_POST['date'] ?? ''));

    if (!$full_name || !$email || !$phone || !$menu_item || !$date) {
        $error = 'Please fill in all required fields.';
    } else {
        $sql = "INSERT INTO orders (full_name, email, phone, menu_item, address, date)
                VALUES ('$full_name','$email','$phone','$menu_item','$address','$date')";
        if ($conn->query($sql)) {
            $success = "Thank you, $full_name! Your order for <strong>$menu_item</strong> has been placed successfully.";
        } else {
            $error = "Database error: " . $conn->error;
        }
    }
    $conn->close();
}

include 'includes/header.php';
?>

<div class="section">
  <h2 class="section-title">You can order <span>Here</span></h2>
  <div class="divider"></div>

  <?php if ($success): ?>
    <div class="msg-success"><?= $success ?></div>
  <?php endif; ?>
  <?php if ($error): ?>
    <div class="msg-error"><?= $error ?></div>
  <?php endif; ?>

  <div class="form-card">
    <h2>Register For Ordering.</h2>
    <form action="order.php" method="POST">

      <div class="form-group">
        <label for="full_name">Full Name *</label>
        <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required />
      </div>

      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="your@email.com" required />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number *</label>
        <input type="tel" id="phone" name="phone" placeholder="+250 7XX XXX XXX" required />
      </div>

      <div class="form-group">
        <label for="menu_item">Select Menu Item *</label>
        <select id="menu_item" name="menu_item" required>
          <option value="">-- Choose a dish --</option>
          <optgroup label="Fish Dishes">
            <option value="Grilled Tilapia"    <?= ($preselect=='Grilled Tilapia')    ?'selected':'' ?>>Grilled Tilapia — 15,000 RWF</option>
            <option value="Fried Nile Perch"   <?= ($preselect=='Fried Nile Perch')   ?'selected':'' ?>>Fried Nile Perch — 9,500 RWF</option>
            <option value="Fish Curry"         <?= ($preselect=='Fish Curry')         ?'selected':'' ?>>Fish Curry — 14,800 RWF</option>
            <option value="Smoked Salmon Salad"<?= ($preselect=='Smoked Salmon Salad')?'selected':'' ?>>Smoked Salmon Salad — 8,000 RWF</option>
          </optgroup>
          <optgroup label="Main Courses">
            <option value="Beef Brochette"    <?= ($preselect=='Beef Brochette')    ?'selected':'' ?>>Beef Brochette — 11,500 RWF</option>
            <option value="Chicken Stew"      <?= ($preselect=='Chicken Stew')      ?'selected':'' ?>>Chicken Stew — 15,000 RWF</option>
            <option value="Goat Meat Isombe"  <?= ($preselect=='Goat Meat Isombe')  ?'selected':'' ?>>Goat Meat (Isombe) — 7,500 RWF</option>
            <option value="Vegetarian Platter"<?= ($preselect=='Vegetarian Platter')?'selected':'' ?>>Vegetarian Platter — 8,000 RWF</option>
          </optgroup>
          <optgroup label="Fresh Juices">
            <option value="Mango Juice"         <?= ($preselect=='Mango Juice')         ?'selected':'' ?>>Mango Juice — 1,500 RWF</option>
            <option value="Passion Fruit Juice" <?= ($preselect=='Passion Fruit Juice') ?'selected':'' ?>>Passion Fruit Juice — 1,500 RWF</option>
            <option value="Pineapple Juice"     <?= ($preselect=='Pineapple Juice')     ?'selected':'' ?>>Pineapple Juice — 1,500 RWF</option>
            <option value="Smoothie"       <?= ($preselect=='Smoothie')       ?'selected':'' ?>>Smoothie — 8,000 RWF</option>
            <option value="Fresh Juice Combo"   <?= ($preselect=='Fresh Juice Combo')   ?'selected':'' ?>>Mixed Fruit Cocktail — 3,500 RWF</option>
          </optgroup>
          <optgroup label="Drinks">
            <option value="Mitsizing Beer">Mitsizing Beer — 2,000 RWF</option>
            <option value="Heineken Beer">Heineken Beer — 3,500 RWF</option>
            <option value="Red Wine Glass">Red Wine (Glass) — 6,000 RWF</option>
            <option value="Cocktail of the Day">Cocktail shot — 5,500 RWF</option>
          </optgroup>
        </select>
      </div>

      <div class="form-group">
        <label for="address">Delivery Address</label>
        <textarea id="address" name="address" placeholder="Enter your delivery address (optional for dine-in)"></textarea>
      </div>

      <div class="form-group">
        <label for="date">Preferred Date *</label>
        <input type="date" id="date" name="date" min="<?= date('Y-m-d') ?>" required />
      </div>

      <button type="submit" class="btn form-submit">Place Order</button>
    </form>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
