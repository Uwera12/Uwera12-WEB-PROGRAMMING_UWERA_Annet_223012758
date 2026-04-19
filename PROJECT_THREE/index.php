<?php
session_start();
require_once 'config.php';
include 'includes/header.php';
?>

<section class="hero" style="background: linear-gradient(rgba(10,24,40,0.75), rgba(13,42,74,0.75)), url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=1400&q=80') center/cover no-repeat;">
  <div class="hero-content">
    <h1>Darry's <span>Grand</span> Hotel</h1>
    <p>Where urban sophistication meets unrivalled luxury in the heart of Kigali.</p>
    <a href="order.php" class="btn">Order Now</a>
    <a href="menu.php" class="btn btn-outline">View Menu</a>
  </div>
</section>

<div class="section">
  <h2 class="section-title">Welcome to <span>Darry's Grand</span></h2>
  <div class="divider"></div>
  <p style="text-align:center; max-width:700px; margin:0 auto 40px; color:#555;">
    At Darry's Grand Hotel, we redefine city luxury — seamlessly blending world-class cuisine,
    sleek contemporary design, and warm personalised service. From boardroom to ballroom,
    every moment at Darry's Grand is crafted to exceed your expectations.
  </p>

  <div class="cards">
    <div class="card">
      <img class="card-img" src="https://res.klook.com/image/upload/c_crop,h_1250,w_2000,x_0,y_42,z_0.1/w_750,h_469,c_fill,q_85/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/hd5dpyhinrkpk3bnoc5m.jpg" alt="Skyline Dining" style="width:100%;height:200px;object-fit:cover;" />
      <div class="card-body">
        <h3>Skyline Dining</h3>
        <p>Elevated cuisine crafted by award-winning chefs, served with a breathtaking city panorama.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img" src="https://www.grandcanalhotel.ie/files-sbbasic/ba_grandcanal_ie/cocktail_bar_wide_shot-min.jpg?w=1200&h=627" alt="Signature Cocktails" style="width:100%;height:200px;object-fit:cover;" />
      <div class="card-body">
        <h3>The Grand Bar</h3>
        <p>Rare Vintages. Craft cocktails. Kigali's Finest.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img" src="https://imgservice.fvrentals.com/500x245/safe-heaven-apartmentnn-rw-gisenyi-ha-3214626265-0.jpg" alt="Luxury Suites" style="width:100%;height:200px;object-fit:cover;" />
      <div class="card-body">
        <h3>Executive Suites</h3>
        <p>Thoughtfully crafted suites with sweeping city views and world-class comforts.".</p>
      </div>
    </div>
  </div>
</div>

<div style="background: var(--cream); padding: 60px 20px;">
  <div style="max-width:1100px; margin:0 auto;">
    <h2 class="section-title">Today's <span>Specials</span></h2>
    <div class="divider"></div>
    <div class="cards">
      <div class="card">
        <img class="card-img" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&q=80" alt="Pan-Seared Sea Bass" style="width:100%;height:200px;object-fit:cover;" />
        <div class="card-body">
          <h3>Pan-Seared Sea Bass</h3>
          <p>Delicate sea bass with saffron beurre blanc, capers, and herb-roasted potatoes.</p>
          <p class="price">12,000 RWF</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80" alt="Wagyu Tenderloin" style="width:100%;height:200px;object-fit:cover;" />
        <div class="card-body">
          <h3>Wagyu Tenderloin</h3>
          <p>Premium wagyu beef, truffle jus, grilled asparagus and dauphinoise potatoes.</p>
          <p class="price">22,000 RWF</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img" src="https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?w=600&q=80" alt="Darry's Signature Cocktail" style="width:100%;height:200px;object-fit:cover;" />
        <div class="card-body">
          <h3>Darry's Signature Cocktail</h3>
          <p>House special: blue curaçao, elderflower, prosecco and a twist of lime zest.</p>
          <p class="price">5,500 RWF</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
