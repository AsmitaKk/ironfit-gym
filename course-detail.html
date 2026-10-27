<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="IronFit course details and course membership plans." />
  <title>Course Details - IronFit Gym</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pages.css" />
  <script src="js/sql-storage-bridge.js"></script>
  <script src="js/course-site.js"></script>
  <style>
    .course-hero {
      padding: 120px 0 48px;
      background:
        radial-gradient(circle at top left, rgba(255, 123, 74, 0.12), transparent 28%),
        radial-gradient(circle at bottom right, rgba(255, 109, 53, 0.08), transparent 26%),
        linear-gradient(180deg, #0f0d0c 0%, #171212 54%, #120f0f 100%);
    }
    .course-detail-shell {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 24px;
      align-items: start;
    }
    .detail-card, .plan-card {
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
      border: 1px solid rgba(255, 180, 140, 0.12);
      border-radius: 22px;
      backdrop-filter: blur(18px);
      box-shadow: 0 24px 60px rgba(0,0,0,0.34);
    }
    .detail-card { padding: 24px; }
    .course-visual-banner {
      height: 200px;
      border-radius: 18px;
      margin-bottom: 18px;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(17, 15, 15, 0.96), rgba(34, 23, 21, 0.96));
      border: 1px solid rgba(255, 178, 140, 0.10);
    }
    .course-visual-banner::after {
      content: '';
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg, rgba(0,0,0,0.02), rgba(0,0,0,0.45)),
        radial-gradient(circle at center, rgba(255,255,255,0.14), transparent 38%);
    }
    .banner-text {
      position: absolute;
      left: 20px;
      right: 20px;
      bottom: 20px;
      z-index: 1;
      color: #fff;
    }
    .banner-text strong {
      display: block;
      font-size: 1.35rem;
      margin-bottom: 4px;
    }
    .banner-text span {
      font-size: 0.92rem;
      opacity: 0.9;
    }
    .plan-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }
    .plan-preview-grid {
      display: grid;
      gap: 12px;
      margin-top: 10px;
    }
    .plan-preview-item {
      padding: 14px 16px;
      border-radius: 16px;
      border: 1px solid rgba(255, 180, 140, 0.12);
      background: rgba(255, 255, 255, 0.03);
    }
    .plan-preview-item strong {
      display: block;
      color: var(--clr-white);
      margin-bottom: 4px;
    }
    .plan-preview-item span {
      color: var(--clr-muted);
      font-size: 0.88rem;
    }
    .course-note {
      margin-top: 8px;
      color: rgba(255, 235, 225, 0.68);
      font-size: 0.9rem;
      line-height: 1.6;
    }
    #course-plans {
      scroll-margin-top: 110px;
    }
    .plan-card { padding: 20px; position: relative; overflow: hidden; }
    .plan-card.featured {
      border-color: rgba(255, 190, 150, 0.26);
      box-shadow: 0 20px 44px rgba(0, 0, 0, 0.22);
      transform: translateY(-6px);
    }
    .popular-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      position: absolute;
      top: 16px;
      right: 16px;
      padding: 7px 12px;
      border-radius: 999px;
      background: rgba(255, 181, 127, 0.10);
      color: #ffbf8c;
      font-size: 0.78rem;
      font-weight: 700;
    }
    .plan-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 7px 12px;
      border-radius: 999px;
      background: rgba(255, 241, 233, 0.06);
      color: #ffcfb0;
      font-size: 0.84rem;
      margin-bottom: 14px;
    }
    .course-meta-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      margin-top: 18px;
    }
    .course-meta {
      padding: 14px;
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 180, 140, 0.10);
    }
    .course-meta span { display:block; color: rgba(255, 235, 225, 0.68); font-size: 0.82rem; margin-bottom: 4px; }
    .course-meta strong { color: #f7f1ed; font-size: 1rem; }
    .plan-price {
      font-size: 2rem;
      font-weight: 800;
      margin: 10px 0 4px;
      color: #f7f1ed;
    }
    .plan-price small { font-size: 0.9rem; color: rgba(255, 235, 225, 0.65); font-weight: 500; }
    .feature-list { list-style: none; padding: 0; margin: 18px 0 0; display: grid; gap: 10px; }
    .feature-list li { color: rgba(255, 240, 232, 0.78); display: flex; gap: 10px; align-items: flex-start; }
    .feature-list li svg { color: #ffb37d; flex-shrink: 0; margin-top: 3px; }
    .cta-row { display: flex; gap: 10px; margin-top: 18px; }
    .cta-row .btn { flex: 1; justify-content: center; }
    @media (max-width: 900px) {
      .course-detail-shell, .plan-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <header class="site-header" id="site-header">
    <div class="nav-container">
      <a href="index.php" class="nav-logo">
        <div class="logo-icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M11 15h2v4h-2zm3-8h2V3h-2zm0 8h2v4h-2zM4 11h3V2H4zm6-2h3V2h-3zm8 2h3V2h-3zm-3-4h2v2h-2zm-6 0h2v2H9z"/><path d="M6 15h12v6H6z" opacity="0.5"/></svg></div>
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

  <div class="mobile-nav" id="mobile-nav">
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
    <a href="courses.php" class="active">Courses</a>
    <a href="bmi-calculator.php">BMI Calculator</a>
    <span id="mobile-nav-auth-container" style="display: contents;"></span>
  </div>

  <section class="course-hero">
    <div class="container">
      <div class="breadcrumb" style="margin-bottom:16px;"><a href="courses.php">Courses</a><span class="sep">›</span><span id="courseBreadcrumb">Course Detail</span></div>
      <div class="course-detail-shell">
        <div class="detail-card reveal">
          <div class="course-visual-banner" id="courseVisualBanner">
            <div class="banner-text">
              <strong id="courseBannerTitle">Course Experience</strong>
              <span id="courseBannerSubtitle">Choose your best plan and start training today.</span>
            </div>
          </div>
          <div class="section-tag" id="courseTag">Course</div>
          <h1 class="section-title" id="courseTitle" style="margin-top:10px;">Course Title</h1>
          <p class="section-subtitle" id="courseSubtitle">Course summary will load here.</p>
          <div class="course-meta-grid">
            <div class="course-meta"><span>Duration</span><strong id="courseDuration">-</strong></div>
            <div class="course-meta"><span>Level</span><strong id="courseLevel">-</strong></div>
            <div class="course-meta"><span>Trainer</span><strong id="courseTrainer">-</strong></div>
            <div class="course-meta"><span>Schedule</span><strong id="courseSchedule">-</strong></div>
          </div>
          <div style="margin-top:18px; color:var(--clr-muted); line-height:1.7;" id="courseDescription"></div>
        </div>
        <div class="detail-card reveal delay-1">
          <div class="section-tag">Why This Course</div>
          <h2 class="section-title" style="font-size:2rem; margin-top:8px;">Membership <span>Plans</span></h2>
          <div class="plan-preview-grid" id="planPreviewGrid"></div>
          <h2 class="section-title" style="font-size:2rem; margin-top:24px;">Course <span>Highlights</span></h2>
          <ul class="feature-list" id="courseHighlights"></ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="course-plans" style="background:var(--clr-bg);">
    <div class="container">
      <div class="plan-grid" id="planGrid"></div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="footer-bottom">
      <p>&copy; 2025 <span>IronFit Gym</span>. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/main.js"></script>
  <script>
    let activeCourseSlug = '';
    const COURSE_DATA = {
      'hiit-blast': {
        title: 'HIIT Blast',
        tag: 'High Intensity',
        subtitle: 'Fast-paced interval training to burn calories, improve stamina, and build explosive fitness.',
        duration: '45 min',
        level: 'All Levels',
        trainer: 'Vikram Kumar',
        schedule: 'Mon, Wed, Fri | 6:00 AM',
        description: 'HIIT Blast combines short, intense bursts of exercise with recovery periods. It is ideal if you want fat loss, endurance, and a high-energy workout format.',
        highlights: ['Fast calorie burn', 'Improves cardiovascular fitness', 'Trainer-led interval structure', 'Perfect for weight-loss goals'],
        plans: [
          { name: 'Monthly', price: 1799, period: '/month', featured: true, benefits: ['8 classes', 'Priority booking', 'Trainer guidance'] },
          { name: '6 Months', price: 9599, period: '/6 months', featured: false, benefits: ['48 classes', 'Best value for regular training', 'Progress tracking'] },
          { name: 'Yearly', price: 17999, period: '/year', featured: false, benefits: ['Unlimited yearly access', 'Best yearly savings', 'Member perks included'] }
        ]
      },
      'power-lifting': {
        title: 'Power Lifting',
        tag: 'Strength',
        subtitle: 'Structured strength training focused on squats, bench press, deadlifts, and total-body power.',
        duration: '60 min',
        level: 'Intermediate',
        trainer: 'Raj Malhotra',
        schedule: 'Mon, Wed, Fri | 8:00 AM',
        description: 'Power Lifting is built for members who want measurable strength gains and disciplined lifting progress. You get coaching on technique, progression, and safe overload.',
        highlights: ['Build raw strength', 'Technique coaching', 'Progressive overload', 'Performance tracking'],
        plans: [
          { name: 'Monthly', price: 2299, period: '/month', featured: true, benefits: ['12 sessions', 'Form checks', 'Strength log'] },
          { name: '6 Months', price: 12499, period: '/6 months', featured: false, benefits: ['72 sessions', 'Program progression', 'Best mid-term value'] },
          { name: 'Yearly', price: 23999, period: '/year', featured: false, benefits: ['Year-round access', 'Priority slots', 'VIP member support'] }
        ]
      },
      'yoga-mindfulness': {
        title: 'Yoga & Mindfulness',
        tag: 'Wellness',
        subtitle: 'Improve flexibility, breathing, posture, and calm with guided yoga and mindfulness sessions.',
        duration: '50 min',
        level: 'All Levels',
        trainer: 'Ananya Patel',
        schedule: 'Tue, Thu, Sat | 7:00 AM',
        description: 'This course is designed to restore balance, reduce stress, and improve mobility. It is a calmer, restorative path for everyday wellness.',
        highlights: ['Flexibility and mobility', 'Breathwork and meditation', 'Stress reduction', 'Beginner-friendly pace'],
        plans: [
          { name: 'Monthly', price: 1599, period: '/month', featured: true, benefits: ['12 sessions', 'Morning batches', 'Guided breathing'] },
          { name: '6 Months', price: 8699, period: '/6 months', featured: false, benefits: ['72 sessions', 'Deep wellness routine', 'Flexible scheduling'] },
          { name: 'Yearly', price: 16999, period: '/year', featured: false, benefits: ['Full annual access', 'Member wellness perk', 'Best value plan'] }
        ]
      },
      'spin-cycling': {
        title: 'Spin Cycling',
        tag: 'Cardio',
        subtitle: 'Music-driven indoor cycling that pushes endurance and leg strength to the next level.',
        duration: '45 min',
        level: 'All Levels',
        trainer: 'Vikram Kumar',
        schedule: 'Mon, Wed | 6:30 PM',
        description: 'Spin Cycling is a high-energy cardio session designed to keep your heart rate up while building stamina and lower-body power.',
        highlights: ['Rhythm-based cardio', 'Leg endurance', 'Great fat-burning session', 'Motivating class vibe'],
        plans: [
          { name: 'Monthly', price: 1699, period: '/month', featured: true, benefits: ['8 rides', 'Music-driven sessions', 'Great cardio base'] },
          { name: '6 Months', price: 9199, period: '/6 months', featured: false, benefits: ['48 rides', 'Consistency savings', 'Trainer support'] },
          { name: 'Yearly', price: 17999, period: '/year', featured: false, benefits: ['Annual access', 'Priority bike booking', 'Member perks'] }
        ]
      },
      'zumba-fitness': {
        title: 'Zumba Fitness',
        tag: 'Dance',
        subtitle: 'Fun dance cardio with energetic music, beginner-friendly steps, and a lively group atmosphere.',
        duration: '60 min',
        level: 'Beginner',
        trainer: 'Sneha Kapoor',
        schedule: 'Tue, Thu | 6:00 PM',
        description: 'Zumba Fitness mixes dance and fitness so you can burn calories without feeling like you are doing a routine workout.',
        highlights: ['Dance cardio', 'Mood boost', 'Beginner-friendly', 'Community energy'],
        plans: [
          { name: 'Monthly', price: 1499, period: '/month', featured: true, benefits: ['8 classes', 'Weekend batch', 'Fun fat burn'] },
          { name: '6 Months', price: 7999, period: '/6 months', featured: false, benefits: ['48 classes', 'Long-term savings', 'Flexible batches'] },
          { name: 'Yearly', price: 14999, period: '/year', featured: false, benefits: ['Yearly access', 'Best savings', 'Member dance events'] }
        ]
      },
      'boxing-bootcamp': {
        title: 'Boxing Bootcamp',
        tag: 'Martial Arts',
        subtitle: 'Technique-based boxing training with cardio conditioning and full-body power.',
        duration: '60 min',
        level: 'All Levels',
        trainer: 'Raj Malhotra',
        schedule: 'Mon, Wed, Fri | 5:30 PM',
        description: 'Boxing Bootcamp blends striking fundamentals with stamina work so you improve reflexes, confidence, and conditioning together.',
        highlights: ['Technique and footwork', 'Cardio conditioning', 'Full-body workout', 'Confidence builder'],
        plans: [
          { name: 'Monthly', price: 1899, period: '/month', featured: true, benefits: ['8 sessions', 'Glove guidance', 'Coach corrections'] },
          { name: '6 Months', price: 10299, period: '/6 months', featured: false, benefits: ['48 sessions', 'Best progression window', 'Skill improvement'] },
          { name: 'Yearly', price: 19999, period: '/year', featured: false, benefits: ['Annual access', 'Top savings', 'Priority class slots'] }
        ]
      },
      'crossfit-wod': {
        title: 'CrossFit WOD',
        tag: 'Strength',
        subtitle: 'Functional, high-intensity training with constantly varied workouts and performance scaling.',
        duration: '50 min',
        level: 'Advanced',
        trainer: 'Raj Malhotra',
        schedule: 'Mon, Tue, Thu | 7:00 AM',
        description: 'CrossFit WOD is the most intense route in the course catalog. It is excellent for experienced members who want a measurable challenge.',
        highlights: ['Functional fitness', 'High intensity', 'Coach-led scaling', 'Strength and conditioning mix'],
        plans: [
          { name: 'Monthly', price: 2499, period: '/month', featured: true, benefits: ['12 WODs', 'Scaling guidance', 'Performance tracking'] },
          { name: '6 Months', price: 13499, period: '/6 months', featured: false, benefits: ['72 WODs', 'Serious progression', 'Best training value'] },
          { name: 'Yearly', price: 25999, period: '/year', featured: false, benefits: ['Annual access', 'Elite member perks', 'Top savings'] }
        ]
      },
      'pilates-core': {
        title: 'Pilates Core',
        tag: 'Wellness',
        subtitle: 'Core control, posture, and mobility training through precision-based pilates movement.',
        duration: '45 min',
        level: 'All Levels',
        trainer: 'Ananya Patel',
        schedule: 'Mon, Wed, Fri | 9:00 AM',
        description: 'Pilates Core is ideal if you want better posture, stronger core control, and a low-impact but highly effective workout.',
        highlights: ['Core strength', 'Posture improvement', 'Low-impact training', 'Precision movement'],
        plans: [
          { name: 'Monthly', price: 1599, period: '/month', featured: true, benefits: ['8 pilates classes', 'Core stability focus', 'Posture support'] },
          { name: '6 Months', price: 8699, period: '/6 months', featured: false, benefits: ['48 classes', 'Better consistency', 'Flexible practice'] },
          { name: 'Yearly', price: 16999, period: '/year', featured: false, benefits: ['Annual access', 'Maximum savings', 'Member wellness extras'] }
        ]
      },
      'treadmill-hiit': {
        title: 'Treadmill HIIT',
        tag: 'Cardio',
        subtitle: 'Fast, efficient treadmill interval workouts for endurance, fat loss, and speed.',
        duration: '40 min',
        level: 'All Levels',
        trainer: 'Vikram Kumar',
        schedule: 'Tue, Thu, Sat | 5:00 AM',
        description: 'Treadmill HIIT combines incline work, sprint intervals, and recovery to make cardio training efficient and results-driven.',
        highlights: ['Fat-loss focused', 'Speed intervals', 'Endurance building', 'Quick session length'],
        plans: [
          { name: 'Monthly', price: 1699, period: '/month', featured: true, benefits: ['8 treadmill sessions', 'Interval pacing', 'Coach support'] },
          { name: '6 Months', price: 9199, period: '/6 months', featured: false, benefits: ['48 sessions', 'Long-term consistency', 'Best time savings'] },
          { name: 'Yearly', price: 17999, period: '/year', featured: false, benefits: ['Annual access', 'Best overall value', 'Priority timings'] }
        ]
      }
    };

    function normalizeCourseText(value) {
      return String(value || '')
        .toLowerCase()
        .replace(/&/g, 'and')
        .replace(/[^a-z0-9]+/g, ' ')
        .trim();
    }

    function getCourseSlug() {
      const params = new URLSearchParams(window.location.search);
      return (params.get('course') || '').toLowerCase();
    }

    function renderCourseDetail() {
      const slug = getCourseSlug();
      activeCourseSlug = slug;
      const siteCourse = typeof getWebsiteCourseBySlug === 'function' ? getWebsiteCourseBySlug(slug) : null;
      const course = siteCourse || COURSE_DATA[slug] || COURSE_DATA['hiit-blast'];
      const isFallback = !siteCourse && !COURSE_DATA[slug];
      const courseTitle = course.name || course.title || 'Course';
      const courseSubtitle = course.subtitle || course.description || '';
      const courseTrainer = course.trainerName || course.trainer || '-';
      const courseBadge = course.badge || course.tag || 'Course';
      document.title = `${courseTitle} - IronFit Gym`;
      document.getElementById('courseBreadcrumb').textContent = courseTitle;
      document.getElementById('courseTag').textContent = courseBadge;
      document.getElementById('courseTitle').textContent = courseTitle;
      document.getElementById('courseSubtitle').textContent = courseSubtitle;
      document.getElementById('courseBannerTitle').textContent = courseTitle;
      document.getElementById('courseBannerSubtitle').textContent = courseSubtitle;
      document.getElementById('courseDuration').textContent = course.duration;
      document.getElementById('courseLevel').textContent = course.level;
      document.getElementById('courseTrainer').textContent = courseTrainer;
      document.getElementById('courseSchedule').textContent = course.schedule;
      document.getElementById('courseDescription').textContent = course.description;
      document.getElementById('courseHighlights').innerHTML = (course.highlights || []).map(item => `
        <li><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M20 6L9 17l-5-5"/></svg><span>${item}</span></li>
      `).join('');
      if (isFallback) {
        const note = document.createElement('p');
        note.className = 'course-note';
        note.textContent = 'Selected course details were not found, so we opened HIIT Blast as a default course.';
        document.querySelector('.detail-card .section-tag').after(note);
      }

      const accent = {
        'hiit-blast': 'linear-gradient(135deg,#171313,#241816)',
        'power-lifting': 'linear-gradient(135deg,#171313,#221715)',
        'yoga-mindfulness': 'linear-gradient(135deg,#161212,#211613)',
        'spin-cycling': 'linear-gradient(135deg,#181414,#251816)',
        'zumba-fitness': 'linear-gradient(135deg,#171312,#231815)',
        'boxing-bootcamp': 'linear-gradient(135deg,#151313,#251614)',
        'crossfit-wod': 'linear-gradient(135deg,#161312,#201816)',
        'pilates-core': 'linear-gradient(135deg,#171313,#231715)',
        'treadmill-hiit': 'linear-gradient(135deg,#171313,#261815)'
      }[slug] || 'linear-gradient(135deg,#171313,#241816)';

      document.querySelector('.course-hero').style.background =
        `radial-gradient(circle at top left, rgba(255, 140, 90, 0.08), transparent 34%), radial-gradient(circle at bottom right, rgba(255, 122, 68, 0.06), transparent 30%), ${accent}`;
      const visualBanner = document.getElementById('courseVisualBanner');
      visualBanner.style.background = accent;
      if (course.image) {
        visualBanner.style.backgroundImage = `linear-gradient(135deg, rgba(15,15,15,0.15), rgba(15,15,15,0.45)), url('${course.image}')`;
        visualBanner.style.backgroundSize = 'cover';
        visualBanner.style.backgroundPosition = 'center';
        visualBanner.style.backgroundRepeat = 'no-repeat';
      }

      const coursePlans = Array.isArray(course.plans) ? course.plans : [];
      const planGrid = document.getElementById('planGrid');
      planGrid.innerHTML = coursePlans.map(plan => `
        <div class="plan-card ${plan.featured ? 'featured' : ''} reveal">
          ${plan.featured ? '<div class="popular-badge">Most Popular</div>' : ''}
          <div class="plan-pill">${plan.name}</div>
          <h3 style="margin:0 0 4px;">${courseTitle}</h3>
          <div class="plan-price">₹${Number(plan.price || 0).toLocaleString('en-IN')} <small>${plan.period || plan.durationLabel || ''}</small></div>
          <p style="color:var(--clr-muted); margin:0;">${plan.featured ? 'Recommended for regular members.' : 'Flexible option for this course.'}</p>
          <ul class="feature-list">
            ${(Array.isArray(plan.benefits) ? plan.benefits : []).map(item => `<li><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor"><path d="M20 6L9 17l-5-5"/></svg><span>${item}</span></li>`).join('')}
          </ul>
          <div class="cta-row">
            <a href="#" class="btn ${plan.featured ? 'btn-primary' : 'btn-outline'}" onclick="bookCoursePlan('${courseTitle}', '${plan.name}'); return false;">Book This Plan</a>
          </div>
        </div>
      `).join('');

      const planPreviewGrid = document.getElementById('planPreviewGrid');
      if (planPreviewGrid) {
        planPreviewGrid.innerHTML = coursePlans.map(plan => `
          <div class="plan-preview-item">
            <strong>${plan.name} - ₹${Number(plan.price || 0).toLocaleString('en-IN')}${plan.period || plan.durationLabel || ''}</strong>
            <span>${plan.featured ? 'Most popular option' : 'Flexible course plan'} | Book below</span><br />
            <a href="#course-plans" class="btn btn-outline" style="margin-top:10px; width:100%; justify-content:center;" onclick="bookCoursePlan('${courseTitle}', '${plan.name}'); return false;">Book This Plan</a>
          </div>
        `).join('');
      }

      window.setTimeout(() => {
        document.getElementById('course-plans')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }, 150);
    }

    function bookCoursePlan(courseName, planName) {
      const loggedUser = JSON.parse(localStorage.getItem('loggedUser') || 'null');
      if (!loggedUser || !loggedUser.id) {
        alert('Please log in first to book a course.');
        window.location.href = 'login.php';
        return;
      }

      const course = typeof getWebsiteCourseBySlug === 'function' ? getWebsiteCourseBySlug(activeCourseSlug) : null;
      const enrollments = JSON.parse(localStorage.getItem('courseEnrollments') || '[]');
      const courseId = course?.id || `course-${activeCourseSlug}`;
      const courseCategory = course?.category || course?.badge || 'General';
      const existing = enrollments.find(item =>
        String(item.studentId) === String(loggedUser.id) &&
        String(item.courseId) === String(courseId)
      );
      const payload = {
        id: existing?.id || `enr-${Date.now()}`,
        studentId: loggedUser.id,
        studentName: loggedUser.name || loggedUser.username || 'Member',
        courseId,
        courseSlug: course?.slug || activeCourseSlug,
        courseName: courseName || course?.name || activeCourseSlug,
        category: courseCategory,
        planName,
        trainerName: course?.trainerName || '',
        enrolledAt: existing?.enrolledAt || new Date().toISOString(),
        updatedAt: new Date().toISOString()
      };

      if (existing) {
        const idx = enrollments.findIndex(item => item.id === existing.id);
        if (idx !== -1) enrollments[idx] = payload;
      } else {
        enrollments.unshift(payload);
      }

      localStorage.setItem('courseEnrollments', JSON.stringify(enrollments));
      const bookings = JSON.parse(localStorage.getItem('courseBookings') || '[]');
      bookings.unshift({
        id: `cb-${Date.now()}`,
        courseName,
        planName,
        courseId,
        studentId: loggedUser.id,
        createdAt: new Date().toISOString()
      });
      localStorage.setItem('courseBookings', JSON.stringify(bookings));
      if (typeof showToast === 'function') {
        showToast(`${courseName} - ${planName} booked.`, '✓');
      } else {
        alert(`${courseName} - ${planName} booked.`);
      }
      if (window.opener && !window.opener.closed) {
        try { window.opener.location.reload(); } catch (e) {}
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      renderCourseDetail();
    });
  </script>
  <script src="js/auth.js"></script>
</body>
</html>
