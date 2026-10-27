<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="IronFit Gym Courses & Classes –  HIIT, Yoga, Powerlifting, Zumba and more. Book your class today." />
  <title>Courses & Classes – IronFit Gym</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pages.css" />
  <script src="js/sql-storage-bridge.js"></script>
  <script src="js/course-site.js"></script>
</head>

<body>

  <!-- ===== HEADER ===== -->
  <header class="site-header" id="site-header">
    <div class="nav-container">
      <a href="index.php" class="nav-logo">
        <div class="logo-icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24"
            fill="currentColor">
            <path
              d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z" />
            <path d="M6 15h12v6H6z" opacity="0.5" />
          </svg></div>
        <div class="logo-text">IRON<span>FIT</span></div>
      </a>
      <nav class="nav-links" id="desktop-nav">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="courses.php" class="active">Courses</a>
        <a href="bmi-calculator.php">BMI Calculator</a>
        <span id="nav-auth-container" style="display: contents;"></span>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <!-- ===== MOBILE NAV ===== -->
  <div class="mobile-nav" id="mobile-nav">
    <a href="index.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
        <polyline points="9 22 9 12 15 12 15 22" />
      </svg> Home</a>
    <a href="about.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
      </svg> About Us</a>
    <a href="contact.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2">
        <path
          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
      </svg> Contact Us</a>
    <a href="courses.php" class="active"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="1" />
        <circle cx="12" cy="12" r="5" />
        <circle cx="12" cy="12" r="9" />
      </svg> Courses</a>
    <a href="bmi-calculator.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;">
        <rect x="4" y="2" width="16" height="20" rx="2" ry="2" />
        <line x1="9" y1="22" x2="9" y2="16" />
        <line x1="8" y1="12" x2="16" y2="12" />
        <line x1="12" y1="16" x2="12" y2="18" />
        <line x1="12" y1="20" x2="12" y2="22" />
        <rect x="8" y="5" width="8" height="4" />
      </svg> BMI Calculator</a>
    <span id="mobile-nav-auth-container" style="display: contents;"></span>
  </div>

  <!-- ===== PAGE HERO ===== -->
  <section class="page-hero">
    <div class="page-hero-content">
      <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">›</span><span>Courses</span></div>
      <h1>OUR <span>COURSES</span></h1>
      <p>Over 100 weekly classes across 10+ disciplines. Find your perfect fit and book instantly.</p>
    </div>
  </section>

  <section class="section-sm course-intro-band">
    <div class="container">
      <div class="course-intro-grid">
        <div class="course-intro-copy reveal">
          <div class="section-tag">Class Schedule</div>
          <h2 class="section-title">TRAIN SMART WITH OUR <span>COURSES</span></h2>
          <p class="section-subtitle">
            Explore strength, cardio, wellness, dance, and martial arts sessions designed for every fitness level.
          </p>
        </div>
        <div class="course-intro-cards reveal delay-1">
          <div class="course-stat-card">
            <strong>10+</strong>
            <span>Training styles</span>
          </div>
          <div class="course-stat-card">
            <strong>100+</strong>
            <span>Weekly sessions</span>
          </div>
          <div class="course-stat-card">
            <strong data-trainer-count data-trainer-suffix="+">Expert</strong>
            <span>Certified trainers</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FILTER + COURSES ===== -->
  <section class="section" style="background:var(--clr-bg)">
    <div class="container">

      <!-- Filter Tabs -->
      <div class="course-filters reveal">
        <button class="filter-btn active" onclick="filterCourses('all', this)">All Classes</button>
        <button class="filter-btn" onclick="filterCourses('strength', this)"><svg class="inline-icon" width="1em"
            height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z" />
            <path d="M6 15h12v6H6z" opacity="0.5" />
          </svg> Strength</button>
        <button class="filter-btn" onclick="filterCourses('cardio', this)"><svg class="inline-icon" width="1em"
            height="1em" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M13.5 1.515a3 3 0 0 0-3 0C7.5 3.467 3 7.121 3 11.972a9 9 0 0 0 15.002 6.126A9.01 9.01 0 0 0 21 11.972c0-4.85-4.5-8.504-7.5-10.457z" />
          </svg> Cardio</button>
        <button class="filter-btn" onclick="filterCourses('wellness', this)"><svg class="inline-icon" width="1em"
            height="1em" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="4" r="2" />
            <path d="M12 8v4M6 14l6-4 6 4v4l-6 2-6-2v-4z" fill="none" stroke="currentColor" stroke-width="1.5" />
            <path d="M8 20h8" stroke="currentColor" stroke-width="1.5" />
          </svg> Wellness</button>
        <button class="filter-btn" onclick="filterCourses('dance', this)"><svg class="inline-icon" width="1em"
            height="1em" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="6" r="3" />
            <path d="M8 10h8l-1 4 1 8H7l1-8-1-4z" />
            <path d="M16 10l2 2-1 4 2 6M8 10L6 12l1 4-2 6" />
          </svg> Dance</button>
        <button class="filter-btn" onclick="filterCourses('martial', this)"><svg class="inline-icon" width="1em"
            height="1em" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="10" r="2" />
            <path d="M12 4v4m0 8v4M8 12H4m12 0h4" />
            <path d="M8 8l-2.828-2.828M16 8l2.828-2.828M8 16l-2.828 2.828M16 16l2.828 2.828" />
          </svg> Martial Arts</button>
      </div>

      <!-- Courses Grid -->
      <div class="courses-grid" id="courses-grid">

        <div class="course-card reveal" data-cat="cardio">
          <div class="course-banner" style="background:linear-gradient(135deg,#ff6b35,#ff3d00)">
            <img class="course-visual" src="assets/hit.jpg" alt="HIIT training visual" />
            <div class="course-badges-top"><span class="badge badge-primary">High Intensity</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 45 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 20</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>HIIT Blast</h3>
            <p>Explosive high-intensity interval training to maximize calorie burn and boost metabolism all day long.
            </p>
            <div class="course-trainer">
              <div class="ct-avatar">VK</div>
              <div><strong>Vikram Kumar</strong><span>HIIT Specialist</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Wed, Fri</span><span>6:00 AM</span></div>
              <div class="schedule-row"><span>Tue, Thu</span><span>7:00 PM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-1" data-cat="strength">
          <div class="course-banner" style="background:linear-gradient(135deg,#6b35ff,#3d00ff)">
            <img class="course-visual" src="assets/powerlifting.jpg" alt="Power lifting visual" />
            <div class="course-badges-top"><span class="badge badge-gold">Strength</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 60 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 15</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> Intermediate</span>
            </div>
            <h3>Power Lifting</h3>
            <p>Build raw strength with structured progressive overload. Squats, deadlifts, and bench press mastery.</p>
            <div class="course-trainer">
              <div class="ct-avatar">RM</div>
              <div><strong>Raj Malhotra</strong><span>Head Trainer</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Wed, Fri</span><span>8:00 AM</span></div>
              <div class="schedule-row"><span>Saturday</span><span>10:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-2" data-cat="wellness">
          <div class="course-banner" style="background:linear-gradient(135deg,#35c1ff,#0066ff)">
            <img class="course-visual" src="assets/yoga.jpg" alt="Yoga and mindfulness visual" />
            <div class="course-badges-top"><span class="badge badge-green">Wellness</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 50 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 25</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>Yoga & Mindfulness</h3>
            <p>Restore balance, improve flexibility, and cultivate inner peace with guided yoga and breathing
              techniques.</p>
            <div class="course-trainer">
              <div class="ct-avatar">AP</div>
              <div><strong>Ananya Patel</strong><span>Yoga Coach</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Tue, Thu, Sat</span><span>7:00 AM</span></div>
              <div class="schedule-row"><span>Sun</span><span>9:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal" data-cat="cardio">
          <div class="course-banner" style="background:linear-gradient(135deg,#ff35a1,#ff006e)">
            <img class="course-visual" src="assets/cycling.jpg" alt="Spin cycling visual" />
            <div class="course-badges-top"><span class="badge badge-primary">Cardio</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 45 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 30</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>Spin Cycling</h3>
            <p>High-energy indoor cycling class with music-driven intervals that torch fat and strengthen your legs.</p>
            <div class="course-trainer">
              <div class="ct-avatar">VK</div>
              <div><strong>Vikram Kumar</strong><span>Cardio Expert</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Wed</span><span>6:30 PM</span></div>
              <div class="schedule-row"><span>Saturday</span><span>8:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-1" data-cat="dance">
          <div class="course-banner" style="background:linear-gradient(135deg,#ffc107,#ff9800)">
            <img class="course-visual" src="assets/zumba fitnes.jpg" alt="Zumba fitness visual" />
            <div class="course-badges-top"><span class="badge badge-gold">Dance</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 60 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 30</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> Beginner</span>
            </div>
            <h3>Zumba Fitness</h3>
            <p>Dance your way to fitness with this fun, high-energy Latin-inspired workout. No experience needed!</p>
            <div class="course-trainer">
              <div class="ct-avatar">SK</div>
              <div><strong>Sneha Kapoor</strong><span>Zumba Instructor</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Tue, Thu</span><span>6:00 PM</span></div>
              <div class="schedule-row"><span>Saturday</span><span>11:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-2" data-cat="martial">
          <div class="course-banner" style="background:linear-gradient(135deg,#2d2d2d,#ff4d4d)">
            <img class="course-visual" src="assets/boxing.jpg" alt="Boxing bootcamp visual" />
            <div class="course-badges-top"><span class="badge badge-primary">Martial Arts</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 60 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 20</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>Boxing Bootcamp</h3>
            <p>Learn proper boxing technique while getting an incredible full-body workout. Gloves provided.</p>
            <div class="course-trainer">
              <div class="ct-avatar">RM</div>
              <div><strong>Raj Malhotra</strong><span>Boxing Coach</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Wed, Fri</span><span>5:30 PM</span></div>
              <div class="schedule-row"><span>Saturday</span><span>9:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal" data-cat="strength">
          <div class="course-banner" style="background:linear-gradient(135deg,#00c9a7,#00876a)">
            <img class="course-visual" src="assets/CrossFit WOD.webp" alt="CrossFit WOD visual" />
            <div class="course-badges-top"><span class="badge badge-green">Strength</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 50 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 12</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> Advanced</span>
            </div>
            <h3>CrossFit WOD</h3>
            <p>Constantly varied functional movements performed at high intensity. The ultimate fitness challenge.</p>
            <div class="course-trainer">
              <div class="ct-avatar">RM</div>
              <div><strong>Raj Malhotra</strong><span>CrossFit Coach</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Tue, Thu</span><span>7:00 AM</span></div>
              <div class="schedule-row"><span>Sat, Sun</span><span>8:00 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-1" data-cat="wellness">
          <div class="course-banner" style="background:linear-gradient(135deg,#9b59b6,#6c3483)">
            <img class="course-visual" src="assets/Pilates Core.jpg" alt="Pilates core visual" />
            <div class="course-badges-top"><span class="badge badge-green">Wellness</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 45 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 20</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>Pilates Core</h3>
            <p>Strengthen your core, improve posture, and build long, lean muscle with precision Pilates exercises.</p>
            <div class="course-trainer">
              <div class="ct-avatar">AP</div>
              <div><strong>Ananya Patel</strong><span>Pilates Instructor</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Mon, Wed, Fri</span><span>9:00 AM</span></div>
              <div class="schedule-row"><span>Sunday</span><span>10:30 AM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

        <div class="course-card reveal delay-2" data-cat="cardio">
          <div class="course-banner" style="background:linear-gradient(135deg,#e74c3c,#922b21)">
            <img class="course-visual" src="assets/Treadmill HIIT.jpeg" alt="Treadmill HIIT visual" />
            <div class="course-badges-top"><span class="badge badge-primary">Cardio</span></div>
          </div>
          <div class="course-body">
            <div class="course-meta-row">
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg> 40 min</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg> Max 20</span>
              <span class="cm-item"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  style="vertical-align: middle; margin-right:4px;">
                  <path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z" />
                </svg> All Levels</span>
            </div>
            <h3>Treadmill HIIT</h3>
            <p>Speed and incline interval training on the treadmill for maximum cardiovascular improvement and fat loss.
            </p>
            <div class="course-trainer">
              <div class="ct-avatar">VK</div>
              <div><strong>Vikram Kumar</strong><span>Cardio Expert</span></div>
            </div>
            <div class="course-schedule">
              <div class="schedule-row"><span>Tue, Thu, Sat</span><span>5:00 AM</span></div>
              <div class="schedule-row"><span>Wed, Fri</span><span>7:00 PM</span></div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book
              Course</button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo-text">IRON<span>FIT</span></div>
        <p>Transform your body, elevate your life. Join the most dedicated fitness community and start your journey to
          greatness today.</p>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M24 12.073c0-6.627-5.373-12-12-12S0 5.446 0 12.073c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg></a>
          <a href="#" aria-label="Instagram"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z" />
            </svg></a>
          <a href="#" aria-label="YouTube"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M23.498 6.186a2.99 2.99 0 0 0-2.106-2.11C19.53 3.5 12 3.5 12 3.5s-7.53 0-9.392.576A2.99 2.99 0 0 0 .502 6.186 31.5 31.5 0 0 0 0 12a31.5 31.5 0 0 0 .502 5.814 2.99 2.99 0 0 0 2.106 2.11C4.47 20.5 12 20.5 12 20.5s7.53 0 9.392-.576a2.99 2.99 0 0 0 2.106-2.11A31.5 31.5 0 0 0 24 12a31.5 31.5 0 0 0-.502-5.814zM9.6 15.6V8.4l6.4 3.6-6.4 3.6z" />
            </svg></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Home</a></li>
          <li><a href="about.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>About Us</a></li>
          <li><a href="courses.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Courses</a></li>
          <li><a href="bmi-calculator.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>BMI Calculator</a></li>
          <li><a href="contact.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>My Account</h4>
        <ul>
          <li><a href="login.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Sign In</a></li>
          <li><a href="register.php"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Create Account</a></li>
          <li><a href="#"><svg class="inline-icon arrow-icon" width="0.8em" height="0.8em" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                style="margin-right: 6px;">
                <polyline points="9 18 15 12 9 6" />
              </svg>Logout</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg></span><span>123 Fitness Avenue, Mumbai, Maharashtra 400001</span></div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg></span><span>+91 98765 43210</span></div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg></span><span>hello@ironfit.in</span></div>
        <div class="footer-contact-item"><span class="icon"><svg class="inline-icon" width="1em" height="1em"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <polyline points="12 6 12 12 16 14" />
            </svg></span><span>Mon–Sun: 5:00 AM – 11:00 PM</span></div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 <span>IronFit Gym</span>. All rights reserved. Designed with <svg class="inline-icon" width="1em"
          height="1em" viewBox="0 0 24 24" fill="var(--clr-primary, #ff3d00)" stroke="none"
          style="margin: 0 4px; display: inline; vertical-align: middle;">
          <path
            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
        </svg> for fitness.</p>
      <p><a href="#" style="color:var(--clr-muted);margin:0 8px;">Privacy Policy</a> &middot; <a href="#"
          style="color:var(--clr-muted);">Terms of Service</a></p>
    </div>
  </footer>

  <script src="js/main.js"></script>
  <script>
    function normalizeCourseCategory(category) {
      const value = String(category || '').toLowerCase();
      if (value.includes('strength')) return 'strength';
      if (value.includes('cardio')) return 'cardio';
      if (value.includes('wellness') || value.includes('yoga') || value.includes('pilates')) return 'wellness';
      if (value.includes('dance') || value.includes('zumba')) return 'dance';
      if (value.includes('martial') || value.includes('boxing')) return 'martial';
      return value.replace(/\s+/g, '-');
    }

    function renderCoursesPage() {
      const grid = document.getElementById('courses-grid');
      if (!grid || typeof getWebsiteCourses !== 'function') return;

      const courses = getWebsiteCourses();
      grid.innerHTML = courses.map(course => {
        const badgeClass = course.category === 'Strength' ? 'badge-gold' : course.category === 'Dance' ? 'badge-gold' : course.category === 'Wellness' ? 'badge-green' : 'badge-primary';
        const imageSrc = course.image || 'assets/course-hiit.svg';
        const planCount = Array.isArray(course.plans) ? course.plans.length : 3;
        return `
          <div class="course-card reveal" data-cat="${normalizeCourseCategory(course.category || course.badge)}" data-course-slug="${course.slug}">
            <div class="course-banner">
              <img class="course-visual" src="${imageSrc}" alt="${course.name} visual" />
              <div class="course-badges-top"><span class="badge ${badgeClass}">${course.badge || course.category || 'Course'}</span></div>
            </div>
            <div class="course-body">
              <div class="course-meta-row">
                <span class="cm-item"> ${course.duration || '45 min'}</span>
                <span class="cm-item"> Max ${course.capacity || 20}</span>
                <span class="cm-item"> ${course.level || 'All Levels'}</span>
              </div>
              <h3>${course.name}</h3>
              <p>${course.subtitle || course.description || ''}</p>
              <div class="course-trainer">
                <div class="ct-avatar">${String(course.trainerName || 'IF').split(' ').map(x => x[0] || '').join('').slice(0, 2).toUpperCase()}</div>
                <div><strong>${course.trainerName || '-'}</strong><span>${course.category || 'Course'}</span></div>
              </div>
              <div class="course-schedule">
                <div class="schedule-row"><span>${course.schedule || 'Schedule TBA'}</span><span>${planCount} Plans</span></div>
              </div>
              <button class="btn btn-primary" style="width:100%;justify-content:center" onclick="bookClass(this)">Book Course</button>
            </div>
          </div>
        `;
      }).join('');

      grid.querySelectorAll('.reveal').forEach(el => el.classList.add('revealed'));
    }

    function filterCourses(cat, btn) {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.querySelectorAll('.course-card').forEach(card => {
        if (cat === 'all' || card.dataset.cat === cat) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    }
    function bookClass(btn) {
      const card = btn.closest('.course-card');
      const courseId = card?.dataset?.courseSlug || '';
      if (!courseId) {
        alert('Course details not found.');
        return;
      }

      const targetUrl = `course-detail.php?course=${encodeURIComponent(courseId)}`;
      window.location.assign(targetUrl);
    }

    document.addEventListener('DOMContentLoaded', renderCoursesPage);
  </script>
  <script src="js/auth.js"></script>

  <!-- ===== DASHBOARD LOGIN MODALS REMOVED ===== -->

</body>

</html>
