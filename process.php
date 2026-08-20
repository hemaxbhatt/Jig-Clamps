<?php
$currentPage = 'process';
$pageTitle = 'Our Process';
$pageDescription = 'JIG CLAMPS core competence process - from customer needs analysis to production, processing, inspection and shipment.';
include 'includes/header.php';
?>

  <section class="page-banner">
    <div class="container reveal">
      <h1 class="fw-black">Core Competence</h1>
      <div class="breadcrumb">
        <a href="index.php">Home</a><span>/</span><span>Process</span>
      </div>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <div class="row mb-5 reveal">
        <div class="col-lg-8">
          <h2 class="section-title">The Engineering Workflow</h2>
          <p class="section-subtitle">
            Our structured workflow ensures precision from concept to delivery. We maintain absolute clarity, speed, and manufacturing control across all six stages.
          </p>
        </div>
      </div>

      <div class="row g-5">
        <div class="col-lg-4 reveal">
          <div class="hero-image-wrap sticky-top" style="top: 120px; border: 1.5px solid var(--brand-dark); box-shadow: 10px 10px 0 var(--brand-teal);">
            <img src="assets/1.png" alt="Process Flow Diagram" style="width: 100%; height: auto; object-fit: contain;" />
          </div>
        </div>
        
        <div class="col-lg-7 offset-lg-1">
          <div class="timeline-container">
            <!-- Step 1 -->
            <div class="timeline-item reveal delay-100">
              <div class="timeline-num">1</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Customer Needs</h3>
                <p class="mb-0">Deep understanding of application requirements, machine compatibility, and ultimate end-use expectations.</p>
              </div>
            </div>
            
            <!-- Step 2 -->
            <div class="timeline-item reveal delay-200">
              <div class="timeline-num">2</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Analysis</h3>
                <p class="mb-0">Evaluating engineering feasibility, harsh operating conditions, and determining the optimal solution direction.</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-item reveal delay-100">
              <div class="timeline-num">3</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Proposals</h3>
                <p class="mb-0">Presenting solid product concepts and highly practical configurations perfectly aligned with client needs.</p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-item reveal delay-200">
              <div class="timeline-num">4</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Production</h3>
                <p class="mb-0">Precision fabrication and rapid assembly leveraging our strictly controlled manufacturing processes.</p>
              </div>
            </div>

            <!-- Step 5 -->
            <div class="timeline-item reveal delay-100">
              <div class="timeline-num">5</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Processing</h3>
                <p class="mb-0">Comprehensive finishing, fitment reviews, and stringent readiness checks prior to dispatch.</p>
              </div>
            </div>

            <!-- Step 6 -->
            <div class="timeline-item reveal delay-200">
              <div class="timeline-num">6</div>
              <div class="timeline-content">
                <h3 class="fw-black text-uppercase mb-3">Inspection & Shipment</h3>
                <p class="mb-0">Final uncompromising quality inspection, industrial-grade packing, and rapid shipment execution.</p>
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
