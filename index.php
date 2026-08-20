<?php
$currentPage = 'home';
$pageTitle = 'Home';
$pageDescription = 'JIG CLAMPS - Technology-driven manufacturer of Skid Steer Loader attachments for infrastructure, construction, agriculture and recycling industries.';
include 'includes/header.php';
?>

  <header class="hero" id="home">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <div class="hero-brand-badge d-flex align-items-center gap-3 mb-4">
            <img src="assets/jig-logo.png" alt="JIG CLAMPS Logo" class="hero-mini-logo" />
            <span class="hero-mini-text text-uppercase fw-bold">JIG CLAMPS</span>
          </div>
          <h1 class="fw-black">Demanding Applications.<br>Relentless Reliability.</h1>
          <p class="hero-lead">
            We engineer and manufacture high-performance Skid Steer Loader attachments built to conquer infrastructure, construction, agriculture, and recycling sectors.
          </p>
          <div class="d-flex flex-wrap gap-4 mt-5">
            <a href="products.php" class="btn btn-brand btn-massive">Explore Equipment</a>
          </div>
        </div>

        <div class="col-lg-5 offset-lg-1 reveal delay-200">
          <div class="hero-image-wrap">
            <img src="assets/jig-logo.png" alt="JIG CLAMPS Company Logo" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section-padding">
    <div class="container">
      <div class="row mb-5 reveal">
        <div class="col-lg-8">
          <h2 class="section-title">The JIG Advantage</h2>
          <p class="section-subtitle">
            We don't just build attachments; we engineer industrial solutions. By combining deep application understanding with elite manufacturing capabilities, we deliver equipment that performs when it matters most.
          </p>
        </div>
      </div>

      <div class="row g-5">
        <div class="col-md-6 col-lg-3 reveal delay-100">
          <div class="editorial-card">
            <h3 class="fw-black text-uppercase">15K<br>Sq.Ft.</h3>
            <p class="text-muted mb-0">State-of-the-art manufacturing facility located at GIDC, Halol, Gujarat.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal delay-200">
          <div class="editorial-card">
            <h3 class="fw-black text-uppercase">4<br>Sectors</h3>
            <p class="text-muted mb-0">Providing dedicated equipment for construction, agriculture, infrastructure & recycling.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal delay-300">
          <div class="editorial-card">
            <h3 class="fw-black text-uppercase">100%<br>Tested</h3>
            <p class="text-muted mb-0">Rigorous inspection and readiness checks before any unit leaves our floor.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 reveal delay-400">
          <div class="editorial-card">
            <h3 class="fw-black text-uppercase">End-to<br>End</h3>
            <p class="text-muted mb-0">From initial customer analysis to final dispatch and lifecycle support.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Resources Downloads Section -->
  <section class="section-padding" style="background-color: var(--brand-gray-ultra-light); border-top: 1px solid var(--brand-gray-light); border-bottom: 1px solid var(--brand-gray-light);">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 reveal">
          <h2 class="section-title">Technical Resources</h2>
          <p class="section-subtitle">
            Access our official engineering documentation, catalogues, and brochures to review JIG CLAMPS equipment specifications and capabilities.
          </p>
        </div>
        <div class="col-lg-6 reveal delay-200">
          <div class="row g-4">
            <div class="col-sm-6">
              <div class="editorial-card text-center d-flex flex-column align-items-center">
                <h4 class="fw-black text-uppercase mb-3">Company Profile</h4>
                <p class="small text-muted mb-4">View JIG CLAMPS manufacturing facilities, quality metrics, and company overview.</p>
                <a href="assets/docs/JIG Profile-New.pdf" class="btn btn-dark w-100 mt-auto" download>Download PDF</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="editorial-card text-center d-flex flex-column align-items-center">
                <h4 class="fw-black text-uppercase mb-3">Product Flyer</h4>
                <p class="small text-muted mb-4">A complete overview of our product configurations, features, and specs.</p>
                <a href="assets/docs/JIG Flyer-NEW.pdf" class="btn btn-dark w-100 mt-auto" download>Download PDF</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Global Request Quotation CTA -->
  <?php include 'includes/quote-cta.php'; ?>

<?php include 'includes/footer.php'; ?>
