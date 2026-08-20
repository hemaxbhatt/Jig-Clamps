<?php
// Default values if not set
if (!isset($pageTitle)) $pageTitle = 'Skid Steer Loader Attachments Manufacturer';
if (!isset($pageDescription)) $pageDescription = 'JIG CLAMPS is a technology-driven manufacturer of Skid Steer Loader attachments for infrastructure, construction, agriculture and recycling industries.';
if (!isset($currentPage)) $currentPage = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $pageTitle; ?> | JIG CLAMPS</title>
  <meta name="description" content="<?php echo $pageDescription; ?>" />
  <meta name="keywords" content="JIG CLAMPS, Skid Steer Loader attachments, backhoe attachment, sweeper collector, pallet fork, industrial grapple bucket, Halol Gujarat" />
  <meta name="author" content="JIG CLAMPS" />
  <meta property="og:title" content="JIG CLAMPS | Engineering Attachments Manufacturer" />
  <meta property="og:description" content="Innovation-built Skid Steer Loader attachments for demanding industrial applications." />
  <meta property="og:image" content="assets/jig-logo.png" />
  <meta property="og:type" content="website" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-3" href="index.php" aria-label="JIG CLAMPS Home">
        <div class="brand-logo-wrap">
          <img src="assets/jig-logo.png" alt="JIG CLAMPS Logo" />
        </div>
        <span class="brand-text">JIG CLAMPS</span>
      </a>

      <!-- Custom Hamburger overlaying Bootstrap toggler -->
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link <?php echo $currentPage === 'home' ? 'active' : ''; ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $currentPage === 'about' ? 'active' : ''; ?>" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $currentPage === 'process' ? 'active' : ''; ?>" href="process.php">Process</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $currentPage === 'products' ? 'active' : ''; ?>" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu Overlay -->
  <div class="mobile-overlay" id="mobileOverlay"></div>
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
      <img src="assets/jig-logo.png" alt="JIG CLAMPS Logo" class="mobile-logo" />
      <button class="close-menu" aria-label="Close menu">&times;</button>
    </div>
    <div class="mobile-links">
      <a href="index.php" class="<?php echo $currentPage === 'home' ? 'active' : ''; ?>">Home</a>
      <a href="about.php" class="<?php echo $currentPage === 'about' ? 'active' : ''; ?>">About</a>
      <a href="process.php" class="<?php echo $currentPage === 'process' ? 'active' : ''; ?>">Process</a>
      <a href="products.php" class="<?php echo $currentPage === 'products' ? 'active' : ''; ?>">Products</a>
      <a href="contact.php" class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>">Contact</a>
    </div>
  </div>
