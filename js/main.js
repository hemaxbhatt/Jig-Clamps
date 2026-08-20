document.addEventListener('DOMContentLoaded', () => {
  
  // 1. Navbar Scroll Behavior (Translucent background only, no size change)
  const navbar = document.getElementById('mainNavbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });

  // 2. Mobile Menu Toggle
  const customToggler = document.querySelector('.custom-toggler');
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileOverlay = document.getElementById('mobileOverlay');
  const closeMenuBtn = document.querySelector('.close-menu');
  const mobileLinks = document.querySelectorAll('.mobile-links a');

  function toggleMenu() {
    hamburger.classList.toggle('active');
    mobileMenu.classList.toggle('show');
    mobileOverlay.classList.toggle('show');
    document.body.style.overflow = mobileMenu.classList.contains('show') ? 'hidden' : '';
  }

  function closeMenu() {
    hamburger.classList.remove('active');
    mobileMenu.classList.remove('show');
    mobileOverlay.classList.remove('show');
    document.body.style.overflow = '';
  }

  if (customToggler) {
    customToggler.removeAttribute('data-bs-toggle');
    customToggler.addEventListener('click', (e) => {
      e.preventDefault();
      toggleMenu();
    });
  }

  if (closeMenuBtn) closeMenuBtn.addEventListener('click', closeMenu);
  if (mobileOverlay) mobileOverlay.addEventListener('click', closeMenu);
  
  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // 3. Intersection Observer for Scroll Reveals
  const revealElements = document.querySelectorAll('.reveal');
  const revealOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target);
      }
    });
  }, revealOptions);

  revealElements.forEach(el => revealObserver.observe(el));

  // 4. Back to Top Button
  const backToTopBtn = document.getElementById('backToTop');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 500) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });
    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // 5. Chatbot Toggle Widget
  const chatToggle = document.getElementById('chatToggle');
  const chatWindow = document.getElementById('chatWindow');
  const chatClose = document.getElementById('chatClose');
  const chatSend = document.getElementById('chatSend');
  const chatInput = document.getElementById('chatInput');
  const chatBody = document.getElementById('chatBody');

  if (chatToggle && chatWindow && chatClose) {
    chatToggle.addEventListener('click', () => {
      chatWindow.classList.toggle('open');
    });

    chatClose.addEventListener('click', () => {
      chatWindow.classList.remove('open');
    });

    // Send message to Groq API
    const sendMessage = () => {
      const text = chatInput.value.trim();
      if (text !== '') {
        // User message HTML
        const userMsg = document.createElement('div');
        userMsg.className = 'chat-msg user mb-3 text-end';
        userMsg.innerHTML = `<div class="msg-bubble d-inline-block bg-dark text-white rounded-3 px-3 py-2" style="max-width: 80%;">${text}</div>`;
        chatBody.appendChild(userMsg);
        
        chatInput.value = '';
        chatBody.scrollTop = chatBody.scrollHeight;

        // Show typing indicator
        const typingMsg = document.createElement('div');
        typingMsg.className = 'chat-msg bot mb-3 d-flex gap-2 typing-indicator-msg';
        typingMsg.innerHTML = `
          <div class="msg-avatar" style="width: 36px; height: 36px; background: #f4c400; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; padding: 4px;">
            <img src="assets/jig-logo.png" alt="Bot" style="width: 100%;">
          </div>
          <div class="msg-bubble bg-white px-3 py-2 border rounded-3 text-muted" style="max-width: 80%; font-size: 0.95rem; font-style: italic;">
            Typing...
          </div>
        `;
        chatBody.appendChild(typingMsg);
        chatBody.scrollTop = chatBody.scrollHeight;

        // Fetch from backend API
        fetch('chatbot-api.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ message: text })
        })
        .then(response => response.json())
        .then(data => {
          // Remove typing indicator
          const indicator = chatBody.querySelector('.typing-indicator-msg');
          if (indicator) indicator.remove();

          // Append Bot reply
          const botMsg = document.createElement('div');
          botMsg.className = 'chat-msg bot mb-3 d-flex gap-2';
          botMsg.innerHTML = `
            <div class="msg-avatar" style="width: 36px; height: 36px; background: #f4c400; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; padding: 4px;">
              <img src="assets/jig-logo.png" alt="Bot" style="width: 100%;">
            </div>
            <div class="msg-bubble bg-white px-3 py-2 border rounded-3" style="max-width: 80%; font-size: 0.95rem; line-height: 1.5;">
              ${data.reply.replace(/\n/g, '<br>')}
            </div>
          `;
          chatBody.appendChild(botMsg);
          chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(error => {
          // Remove typing indicator
          const indicator = chatBody.querySelector('.typing-indicator-msg');
          if (indicator) indicator.remove();

          // Append error message
          const errorMsg = document.createElement('div');
          errorMsg.className = 'chat-msg bot mb-3 d-flex gap-2';
          errorMsg.innerHTML = `
            <div class="msg-avatar" style="width: 36px; height: 36px; background: #f4c400; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; padding: 4px;">
              <img src="assets/jig-logo.png" alt="Bot" style="width: 100%;">
            </div>
            <div class="msg-bubble bg-white px-3 py-2 border rounded-3 text-danger" style="max-width: 80%; font-size: 0.95rem;">
              Could not connect to chatbot server. Please check your WAMP settings.
            </div>
          `;
          chatBody.appendChild(errorMsg);
          chatBody.scrollTop = chatBody.scrollHeight;
        });
      }
    };

    if (chatSend) chatSend.addEventListener('click', sendMessage);
    if (chatInput) {
      chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
      });
    }
  }

});
