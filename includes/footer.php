  <footer class="footer">
    <div class="container footer-main">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6">
          <div class="footer-brand d-flex align-items-center gap-3 mb-4">
            <img src="assets/jig-logo.png" alt="JIG CLAMPS Logo" class="footer-logo" />
            <span class="footer-brand-text">JIG CLAMPS</span>
          </div>
          <p class="footer-desc text-muted">
            Relentless reliability and high-performance engineering. We manufacture Skid Steer Loader attachments built to conquer demanding industrial applications.
          </p>
        </div>

        <div class="col-lg-2 col-md-6 offset-lg-1">
          <h5 class="footer-heading">Company</h5>
          <ul class="footer-links list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="process.php">Our Process</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6">
          <h5 class="footer-heading">Equipment</h5>
          <ul class="footer-links list-unstyled">
            <li><a href="products.php#jbh650">Backhoe Attachment</a></li>
            <li><a href="products.php#sw1600">Sweeper Collector</a></li>
            <li><a href="products.php#jpf600">Pallet Fork</a></li>
            <li><a href="products.php#jigb2x2">Grapple Bucket</a></li>
            <li><a href="products.php#jmp6in1">6-in-1 Bucket</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="footer-heading">Reach Us</h5>
          <ul class="footer-contact list-unstyled text-muted">
            <li class="mb-3 d-flex gap-2">
              <strong>A:</strong> GIDC, Halol, Gujarat, India
            </li>
            <li class="d-flex gap-2">
              <strong>E:</strong> <a href="mailto:info@jigclamps.com" class="text-muted">info@jigclamps.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> JIG CLAMPS. All Rights Reserved.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <span class="tagline text-muted fw-bold">ENGINEERED FOR THE EXTREME.</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to top (moved to LEFT side in CSS) -->
  <button class="back-to-top" id="backToTop" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
  </button>

  <!-- Floating Chatbot Widget on RIGHT side -->
  <div class="chatbot-widget" id="chatWidget">
    <button class="chatbot-toggle" id="chatToggle" aria-label="Open chat">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg>
    </button>
    <div class="chatbot-window" id="chatWindow">
      <div class="chat-header">
        <div>
          <h6 class="mb-0 fw-bold">JIG CLAMPS Support</h6>
          <small class="text-white-50">Online</small>
        </div>
        <button id="chatClose" aria-label="Close chat">&times;</button>
      </div>
      <div class="chat-body" id="chatBody">
        <div class="chat-msg bot">
          <div class="msg-avatar"><img src="assets/jig-logo.png" alt="Bot"></div>
          <div class="msg-bubble">Hello! How can we assist you with our attachments today?</div>
        </div>
      </div>
      <div class="chat-footer">
        <input type="text" id="chatInput" placeholder="Type your message...">
        <button id="chatSend" aria-label="Send message">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
