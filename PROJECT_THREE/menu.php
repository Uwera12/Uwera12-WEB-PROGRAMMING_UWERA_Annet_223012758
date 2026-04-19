<?php
session_start();
require_once 'config.php';
include 'includes/header.php';
?>

<div class="section">
  <h2 class="section-title">Our <span>Menu</span></h2>
  <div class="divider"></div>

  <!-- STARTERS -->
  <div class="menu-section">
    <h2>🥗 Starters & Soups</h2>
    <table class="menu-table">
      <thead>
        <tr><th>#</th><th>Dish Name</th><th>Description</th><th>Price (RWF)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Burrata & Heirloom Tomato</td><td>Creamy burrata with heirloom tomatoes, basil oil and Maldon salt</td><td class="price">7,500</td></tr>
        <tr><td>2</td><td>Smoked Salmon Blinis</td><td>Hand-carved Norwegian salmon on buckwheat blinis with crème fraîche and dill</td><td class="price">9,000</td></tr>
        <tr><td>3</td><td>French Onion Soup</td><td>Classic caramelised onion broth with a gruyère-topped crouton</td><td class="price">6,000</td></tr>
        <tr><td>4</td><td>Rwandan Bean Soup</td><td>Traditional umukeke bean velouté with smoked paprika oil and crusty bread</td><td class="price">4,500</td></tr>
        <tr><td>5</td><td>Tuna Tartare</td><td>Sashimi-grade tuna, avocado, sesame, pickled ginger and wonton crisps</td><td class="price">10,000</td></tr>
      </tbody>
    </table>
  </div>

  <!-- MAINS -->
  <div class="menu-section">
    <h2>🍽️ Main Courses</h2>
    <table class="menu-table">
      <thead>
        <tr><th>#</th><th>Dish</th><th>Description</th><th>Price (RWF)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Wagyu Beef Tenderloin</td><td>200g wagyu fillet, truffle jus, grilled asparagus, dauphinoise potatoes</td><td class="price">22,000</td></tr>
        <tr><td>2</td><td>Pan-Seared Sea Bass</td><td>Fillet of sea bass, saffron beurre blanc, capers, herb-roasted baby potatoes</td><td class="price">12,000</td></tr>
        <tr><td>3</td><td>Rack of Lamb</td><td>Herb-crusted rack of lamb, rosemary jus, ratatouille, and fondant potato</td><td class="price">18,000</td></tr>
        <tr><td>4</td><td>Duck Confit</td><td>Slow-cooked duck leg, cherry reduction, braised red cabbage and polenta</td><td class="price">16,000</td></tr>
        <tr><td>5</td><td>Brochette Royale</td><td>Premium beef and prawn skewers, chimichurri, grilled corn and saffron rice</td><td class="price">13,500</td></tr>
        <tr><td>6</td><td>Vegetarian Wellington</td><td>Wild mushroom and spinach en croûte, roasted root vegetables, red wine reduction</td><td class="price">10,000</td></tr>
        <tr><td>7</td><td>Grilled Nile Perch</td><td>East African Nile perch, lemon-caper butter, sautéed greens and crushed potatoes</td><td class="price">11,000</td></tr>
      </tbody>
    </table>
  </div>

  <!-- DESSERTS -->
  <div class="menu-section">
    <h2>🍮 Desserts</h2>
    <table class="menu-table">
      <thead>
        <tr><th>#</th><th>Dessert</th><th>Description</th><th>Price (RWF)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Chocolate Fondant</td><td>Warm dark chocolate lava cake, vanilla bean ice cream, raspberry coulis</td><td class="price">5,500</td></tr>
        <tr><td>2</td><td>Crème Brûlée</td><td>Classic Madagascar vanilla custard with a caramelised sugar crust</td><td class="price">4,800</td></tr>
        <tr><td>3</td><td>Mango Panna Cotta</td><td>Silky coconut panna cotta, fresh Rwandan mango and passion fruit compote</td><td class="price">4,500</td></tr>
        <tr><td>4</td><td>Cheese Board</td><td>Selection of fine cheeses, honeycomb, quince jelly and artisan crackers</td><td class="price">8,000</td></tr>
      </tbody>
    </table>
  </div>

  <!-- SIGNATURE COCKTAILS -->
  <div class="menu-section">
    <h2>🍸 Signature Cocktails</h2>
    <table class="menu-table">
      <thead>
        <tr><th>#</th><th>Cocktail</th><th>Description</th><th>Price (RWF)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Azure Blue</td><td>Blue curaçao, elderflower liqueur, prosecco, lime zest — the house signature</td><td class="price">5,500</td></tr>
        <tr><td>2</td><td>Kigali Sunset</td><td>Rwandan waragi, passion fruit, grenadine, ginger beer over crushed ice</td><td class="price">5,000</td></tr>
        <tr><td>3</td><td>Silver Mule</td><td>Premium vodka, fresh ginger, elderflower and sparkling water</td><td class="price">4,800</td></tr>
        <tr><td>4</td><td>Rooftop Negroni</td><td>Gin, Campari, sweet vermouth — stirred perfectly and served on a sphere of ice</td><td class="price">5,200</td></tr>
        <tr><td>5</td><td>Virgin Azure Spritz</td><td>Blue butterfly pea flower, lime, mint, coconut water and soda</td><td class="price">3,500</td></tr>
      </tbody>
    </table>
  </div>

  <!-- WINES & BEVERAGES -->
  <div class="menu-section">
    <h2>🍷 Wines & Beverages</h2>
    <table class="menu-table">
      <thead>
        <tr><th>#</th><th>Item</th><th>Description</th><th>Price (RWF)</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Red Wine (Glass)</td><td>Stellenbosch Cabernet Sauvignon — South Africa</td><td class="price">6,000</td></tr>
        <tr><td>2</td><td>White Wine (Glass)</td><td>Marlborough Sauvignon Blanc — New Zealand</td><td class="price">6,000</td></tr>
        <tr><td>3</td><td>Champagne (Flute)</td><td>Moët & Chandon Brut Impérial</td><td class="price">12,000</td></tr>
        <tr><td>4</td><td>Craft Beer</td><td>Selection of local and imported craft ales and lagers</td><td class="price">3,000</td></tr>
        <tr><td>5</td><td>Fresh Juice</td><td>Mango, passion fruit, pineapple, avocado or mixed — pressed daily</td><td class="price">2,500</td></tr>
        <tr><td>6</td><td>Specialty Coffee</td><td>Rwanda fine-grade single-origin espresso, cappuccino, or cold brew</td><td class="price">2,000</td></tr>
        <tr><td>7</td><td>Mineral Water (750ml)</td><td>Still or sparkling</td><td class="price">1,200</td></tr>
      </tbody>
    </table>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
