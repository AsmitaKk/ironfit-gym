<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Contact IronFit Gym for memberships, training support, class schedules, and general enquiries." />
  <title>Contact Us - IronFit Gym</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pages.css" />
  <script src="js/sql-storage-bridge.js"></script>
</head>
<body>
  <header class="site-header" id="site-header">
    <div class="nav-container">
      <a href="index.php" class="nav-logo">
        <div class="logo-icon">
          <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z" />
            <path d="M6 15h12v6H6z" opacity="0.5" />
          </svg>
        </div>
        <div class="logo-text">IRON<span>FIT</span></div>
      </a>
      <nav class="nav-links" id="desktop-nav">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php" class="active">Contact Us</a>
        <a href="courses.php">Courses</a>
        <a href="courses.php">Courses</a>
        <a href="bmi-calculator.php">BMI Calculator</a>
        <span id="nav-auth-container" style="display: contents;"></span>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <section class="contact-hero section">
    <div class="container">
      <div class="contact-hero-grid">
        <div class="contact-hero-copy reveal">
          <div class="section-tag">Contact IronFit</div>
          <h1 class="section-title">WE'RE HERE TO HELP YOU <span>GET STARTED</span></h1>
          <p class="section-subtitle">
            Reach out for memberships, training guidance, class schedules, or any support you need on your fitness journey.
          </p>
          <div class="contact-hero-actions">
            <a href="#contact-form-section" class="btn btn-primary btn-lg">Send a Message</a>
            <a href="courses.php" class="btn btn-outline btn-lg">View Courses</a>
          </div>
          <div class="contact-hero-highlights">
            <div class="contact-highlight">
              <strong>Fast</strong>
              <span>Same-day replies during working hours</span>
            </div>
            <div class="contact-highlight">
              <strong>Easy</strong>
              <span>Call, email, or visit us directly</span>
            </div>
            <div class="contact-highlight">
              <strong>Helpful</strong>
              <span>Membership and trainer support</span>
            </div>
          </div>
        </div>

        <div class="contact-hero-panel reveal delay-1">
          <div class="contact-panel-card">
            <div class="contact-panel-badge">Support Desk</div>
            <h2>Need help fast?</h2>
            <p>Use the details below to contact the right team for memberships, training, or general queries.</p>
            <div class="contact-panel-list">
              <div><span>Phone</span><strong>+91 98765 43210</strong></div>
              <div><span>Email</span><strong>hello@ironfit.in</strong></div>
              <div><span>Hours</span><strong>Mon-Sun, 5:00 AM - 11:00 PM</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact-main-section" id="contact-form-section" style="background:var(--clr-bg);">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-sidebar reveal">
          <div class="section-tag">Get in Touch</div>
          <h2 class="section-title" style="text-align:left;">FIND US, CALL US, OR DROP BY</h2>
          <p class="section-subtitle" style="text-align:left; margin-left:0;">
            We keep communication simple and direct so you can get the information you need without delay.
          </p>

          <div class="contact-cards">
            <div class="contact-info-card">
              <div class="ci-icon">📍</div>
              <div>
                <h4>Address</h4>
                <p>123 Fitness Avenue, Mumbai, Maharashtra 400001</p>
              </div>
            </div>
            <div class="contact-info-card">
              <div class="ci-icon">📞</div>
              <div>
                <h4>Phone</h4>
                <p>+91 98765 43210</p>
              </div>
            </div>
            <div class="contact-info-card">
              <div class="ci-icon">✉️</div>
              <div>
                <h4>Email</h4>
                <p>hello@ironfit.in</p>
              </div>
            </div>
            <div class="contact-info-card">
              <div class="ci-icon">⏰</div>
              <div>
                <h4>Working Hours</h4>
                <p>Mon-Sun: 5:00 AM - 11:00 PM</p>
              </div>
            </div>
          </div>

          <div class="social-strip">
            <h3>Follow Us</h3>
            <div class="social-pill-row">
              <a class="social-pill" href="#" aria-label="Facebook">Facebook</a>
              <a class="social-pill" href="#" aria-label="Instagram">Instagram</a>
              <a class="social-pill" href="#" aria-label="YouTube">YouTube</a>
            </div>
          </div>
        </div>

        <div class="contact-form-card reveal delay-1">
          <div class="contact-form-head">
            <h3>Send us a Message</h3>
            <p>Tell us what you need and our team will get back to you as soon as possible.</p>
          </div>
          <form id="contactForm" class="contact-form" onsubmit="event.preventDefault(); alert('Thank you, we will get back to you soon!'); this.reset();">
            <div class="form-row">
              <div class="form-group">
                <label for="cname">Name</label>
                <input type="text" id="cname" name="cname" placeholder="Your full name" required />
              </div>
              <div class="form-group">
                <label for="cemail">Email</label>
                <input type="email" id="cemail" name="cemail" placeholder="you@example.com" required />
              </div>
            </div>
            <div class="form-group">
              <label for="csubject">Subject</label>
              <input type="text" id="csubject" name="csubject" placeholder="Membership, training, classes..." required />
            </div>
            <div class="form-group">
              <label for="cmessage">Message</label>
              <textarea id="cmessage" name="cmessage" rows="6" placeholder="Write your message here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact-extra-section" style="background:var(--clr-bg2);">
    <div class="container">
      <div class="contact-extra-grid">
        <div class="map-placeholder reveal">
          <div class="map-inner">
            <div class="map-pin">📍</div>
            <p>IronFit Gym, Mumbai</p>
            <span>123 Fitness Avenue, Maharashtra 400001</span>
          </div>
        </div>
        <div class="contact-faq reveal delay-1">
          <div class="section-tag">Quick Answers</div>
          <h2 class="section-title" style="text-align:left;">FREQUENTLY ASKED <span>QUESTIONS</span></h2>
          <div class="faq-list" style="margin-top:20px;">
            <div class="faq-item">
              <div class="faq-question">How quickly do you respond? <span class="faq-arrow">⌄</span></div>
              <div class="faq-answer">We typically reply within the same business day for emails and messages.</div>
            </div>
            <div class="faq-item">
              <div class="faq-question">Can I ask about membership plans here? <span class="faq-arrow">⌄</span></div>
              <div class="faq-answer">Yes. Our team can guide you through plans, benefits, and upgrade options.</div>
            </div>
            <div class="faq-item">
              <div class="faq-question">Do you help with trainer bookings? <span class="faq-arrow">⌄</span></div>
              <div class="faq-answer">Absolutely. We can help you connect with a trainer based on your goal and schedule.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo-text">IRON<span>FIT</span></div>
        <p>Transform your body, elevate your life.</p>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook">
            <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/></svg>
          </a>
          <a href="#" aria-label="YouTube">
            <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a2.99 2.99 0 0 0-2.106-2.11C19.53 3.5 12 3.5 12 3.5s-7.53 0-9.392.576A2.99 2.99 0 0 0 .502 6.186 31.5 31.5 0 0 0 0 12a31.5 31.5 0 0 0 .502 5.814 2.99 2.99 0 0 0 2.106 2.11C4.47 20.5 12 20.5 12 20.5s7.53 0 9.392-.576a2.99 2.99 0 0 0 2.106-2.11A31.5 31.5 0 0 0 24 12a31.5 31.5 0 0 0-.502-5.814zM9.6 15.6V8.4l6.4 3.6-6.4 3.6z"/></svg>
          </a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="bmi-calculator.php">BMI Calculator</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>My Account</h4>
        <ul>
          <li><a href="login.php">Sign In</a></li>
          <li><a href="register.php">Create Account</a></li>
          <li><a href="courses.php">Explore Courses</a></li>
          <li><a href="#" onclick="logout(); return false;" style="color:#ff4d4d;">Logout</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>123 Fitness Avenue, Mumbai, Maharashtra 400001</div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>+91 98765 43210</div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></span>hello@ironfit.in</div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>Mon-Sun: 5:00 AM - 11:00 PM</div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 <span>IronFit Gym</span>. All rights reserved. Designed with <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="var(--clr-primary, #ff3d00)" stroke="none" style="margin: 0 4px; display: inline; vertical-align: middle;"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> for fitness.</p>
    </div>
  </footer>

  <script src="js/auth.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
