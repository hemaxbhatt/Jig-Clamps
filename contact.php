<?php
$currentPage = 'contact';
$pageTitle = 'Contact Us';
$pageDescription = 'Contact JIG CLAMPS for product information, attachment requirements, quote requests or application discussions.';
include 'includes/header.php';
?>

  <section class="page-banner">
    <div class="container reveal">
      <h1 class="fw-black">Get In Touch</h1>
      <div class="breadcrumb">
        <a href="index.php">Home</a><span>/</span><span>Contact</span>
      </div>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5 reveal">
          <h2 class="section-title mb-5">Start A Conversation</h2>
          <p class="fs-5 text-dark mb-5">
            Whether you need product specifications, a custom attachment solution, or a direct quotation, our engineering and sales teams are ready to deploy.
          </p>

          <div class="mb-5">
            <h5 class="fw-black text-uppercase mb-3">Headquarters</h5>
            <p class="mb-0">JIG CLAMPS</p>
            <p class="text-muted">GIDC, Halol, Gujarat, India</p>
          </div>

          <div class="mb-5">
            <h5 class="fw-black text-uppercase mb-3">Direct Contact</h5>
            <p class="mb-0"><a href="mailto:info@jigclamps.com" class="text-dark fw-bold text-decoration-none">info@jigclamps.com</a></p>
          </div>
        </div>

        <div class="col-lg-6 offset-lg-1 reveal delay-200">
          <div style="background: var(--surface-white); padding: 50px; border: 1px solid var(--brand-gray-light); box-shadow: var(--shadow-widget);">
            <h3 class="fw-black text-uppercase mb-4">Send an Inquiry</h3>
            
            <form action="" method="POST">
              <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Name" required>
                <label for="name">Full Name</label>
              </div>
              
              <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
                <label for="email">Email Address</label>
              </div>
              
              <div class="form-floating">
                <input type="tel" class="form-control" id="phone" placeholder="Phone">
                <label for="phone">Phone Number</label>
              </div>
              
              <div class="form-floating">
                <select class="form-select" id="subject" required>
                  <option selected disabled value=""></option>
                  <option value="General Inquiry">General Inquiry</option>
                  <option value="Product Information">Product Information</option>
                  <option value="Request Quote">Request a Quote</option>
                  <option value="Custom Requirement">Custom Requirement</option>
                </select>
                <label for="subject">Nature of Inquiry</label>
              </div>

              <div class="form-floating mt-4">
                <textarea class="form-control" id="message" placeholder="Message" style="height: 120px" required></textarea>
                <label for="message">Your Message</label>
              </div>
              
              <button type="submit" class="btn btn-dark btn-massive w-100 mt-5">Submit Request</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notice: The Global Quote CTA is specifically omitted from this page per request -->

<?php include 'includes/footer.php'; ?>
