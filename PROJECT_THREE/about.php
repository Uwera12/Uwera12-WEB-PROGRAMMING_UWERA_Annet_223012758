<?php
session_start();
require_once 'config.php';
include 'includes/header.php';
?>

<div class="section">
  <h2 class="section-title">About <span>Us</span></h2>
  <div class="divider"></div>

  <div class="about-grid">
    <div class="about-text">
      <h2>Our Story</h2>
      <p>
        Darry's Grand Hotel was born from a vision to bring world-class urban luxury to the heart of Kigali.
        Founded in 2010 by a group of Rwandan entrepreneurs and hospitality veterans, we set out to create
        a destination that would rival the finest hotels across the African continent.
      </p>
      <p>
        From a boutique city hotel of 40 rooms, Darry's Grand has grown into a full-service luxury complex
        spanning 12 floors, housing 180 rooms and suites, three restaurants, a rooftop bar, a spa,
        and a state-of-the-art conference centre.
      </p>
      <p>
        Today we are proud to be Kigali's most awarded five-star hotel, celebrated for our fusion of
        contemporary design, Rwandan heritage, and genuinely heartfelt service.
      </p>
      <a href="menu.php" class="btn" style="margin-top:16px; display:inline-block;">Explore Our Menu</a>
    </div>
    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?w=800&q=80" alt="Darry's Grand Hotel" style="width:100%;height:350px;object-fit:cover;border-radius:12px;" />
  </div>

  <!-- HISTORY TIMELINE -->
  <h2 class="section-title" style="margin-top:70px;">Our <span>History</span></h2>
  <div class="divider"></div>

  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-year">2010</div>
      <h4>Foundation</h4>
      <p>Darry's Grand Hotel opens its doors with 40 rooms, a restaurant, and a rooftop terrace overlooking Kigali's skyline.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-year">2013</div>
      <h4>First Expansion</h4>
      <p>We doubled our capacity to 100 rooms and launched the Darry's Skyline Bar — which rapidly became one of the city's most celebrated venues.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-year">2016</div>
      <h4>Five-Star Recognition</h4>
      <p>Darry's Grand receives its first five-star certification from the Rwanda Development Board, becoming one of only three hotels in the country to hold the distinction.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-year">2018</div>
      <h4>The Grand Wing</h4>
      <p>A landmark extension adds 80 luxury suites, a world-class spa, an indoor pool, and a 500-seat conference centre — firmly placing us on the global MICE circuit.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-year">2021</div>
      <h4>Culinary Excellence Award</h4>
      <p>Our Executive Chef leads Darry's Grand to win East Africa's top culinary honour, recognised for the innovative fusion of French technique and Rwandan ingredients.</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-year">2024</div>
      <h4>Sustainability Milestone</h4>
      <p>Darry's Grand becomes Kigali's first carbon-neutral luxury hotel, completing a solar installation, rainwater harvesting system, and a zero-waste kitchen programme.</p>
    </div>
  </div>

  <!-- TEAM SECTION -->
  <h2 class="section-title" style="margin-top:70px;">Our <span>Team</span></h2>
  <div class="divider"></div>
  <div class="cards">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1566554273541-37a9ca77b91f?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Chef Alianne Mutesi" style="width:100%;height:220px;object-fit:cover;" />
      <div class="card-body">
        <h3>Chef Alianne Mutesi</h3>
        <p><strong>Executive Chef</strong> — Trained at Le Cordon Bleu Paris and the Culinary Institute of Africa. 18 years crafting world-class menus with a distinctly Rwandan soul.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1617244147299-5ef406921c35?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Samuel Nshimiye" style="width:100%;height:220px;object-fit:cover;" />
      <div class="card-body">
        <h3>Samuel Nshimiye</h3>
        <p><strong>General Manager</strong> — A hospitality veteran with over 20 years across London, Dubai, and Nairobi. Samuel is the architect of the Darry's Grand guest experience.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1662104935762-707db0439ecd?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="John Derrick" style="width:100%;height:220px;object-fit:cover;" />
      <div class="card-body">
        <h3>John Derrick</h3>
        <p><strong>Head Sommelier & Bar Director</strong> — Award-winning sommelier specialising in African wines and inventive cocktail programmes that have defined Darry's signature style.</p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
