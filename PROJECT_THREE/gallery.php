<?php
session_start();
require_once 'config.php';
include 'includes/header.php';
?>

<div class="section">
  <h2 class="section-title">Our <span>Gallery</span></h2>
  <div class="divider"></div>
  <p style="text-align:center; color:#555; margin-bottom:30px;">
    Click any image to place an order for that dish!
  </p>

  <div class="gallery-grid">

    <div>
      <a href="order.php?item=Smoothie" class="gallery-item">
        <img src="https://images.unsplash.com/photo-1588929473475-d16ffd5d068c?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Smoothie" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Smoothie — 8,000 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Hot Chocolate" class="gallery-item">
        <img src="https://images.unsplash.com/photo-1654515684974-53c041beb12f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hot Chocolate" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Hot Chocolate — 10,000 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Beef+Brochette" class="gallery-item">
        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80" alt="Beef Brochette" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Beef Brochette — 11,500 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Fresh+Juice" class="gallery-item">
        <img src="https://images.unsplash.com/photo-1525385133512-2f3bdd039054?q=80&w=385&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Fresh Juice" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Fresh Juice — 6,500 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Chicken+Stew" class="gallery-item">
        <img src="https://plus.unsplash.com/premium_photo-1661419883163-bb4df1c10109?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Chicken Stew" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Chicken Stew — 15,000 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Mixed+Food" class="gallery-item">
        <img src="https://images.unsplash.com/photo-1702827496398-b906ab2dd926?q=80&w=909&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Mixed Food" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Mixed Food — 8,000 RWF</p>
    </div>

    <div>
      <a href="order.php?item=Fried+Fish" class="gallery-item">
        <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Fried-Fish-Fillet-1-600x600.jpg" alt="Fried Fish" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
      </a>
      <p class="gallery-caption">Fried Fish — 16,800 RWF</p>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>
