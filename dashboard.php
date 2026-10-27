<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="IronFit Gym –  User Dashboard. Track your progress and workouts." />
  <title>User Dashboard –  IronFit Gym</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pages.css" />
  <script src="js/sql-storage-bridge.js"></script>
  <script src="js/auth.js"></script>
  <script src="js/user-protect.js"></script>
  <style>
    @keyframes qr-pulse {
      0% { transform: scale(1); opacity: 0.6; }
      100% { transform: scale(1.4); opacity: 0; }
    }
    .pulse-ring {
      animation: qr-pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    .scanner-overlay {
      position: fixed;
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.85);
      z-index: 10000;
      display: none;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(8px);
    }
    .scanner-container {
      background: var(--clr-bg2);
      border: 1px solid rgba(255, 107, 53, 0.3);
      border-radius: var(--radius-lg);
      width: 90%;
      max-width: 480px;
      padding: 30px;
      position: relative;
      box-shadow: var(--shadow-lg);
      text-align: center;
    }
    .scanner-viewfinder {
      width: 260px;
      height: 260px;
      margin: 20px auto;
      border: 3px solid rgba(255, 255, 255, 0.15);
      border-radius: var(--radius);
      position: relative;
      overflow: hidden;
      background: #000;
      box-shadow: inset 0 0 20px rgba(0,0,0,0.8);
    }
    .scanner-corner {
      position: absolute;
      width: 20px;
      height: 20px;
      border: 3px solid var(--clr-primary);
      z-index: 2;
    }
    .sc-tl { top: 10px; left: 10px; border-right: none; border-bottom: none; }
    .sc-tr { top: 10px; right: 10px; border-left: none; border-bottom: none; }
    .sc-bl { bottom: 10px; left: 10px; border-right: none; border-top: none; }
    .sc-br { bottom: 10px; right: 10px; border-left: none; border-top: none; }
    
    .scanner-laser {
      position: absolute;
      width: calc(100% - 20px);
      height: 2px;
      background: var(--clr-primary);
      box-shadow: 0 0 10px var(--clr-primary);
      top: 10px;
      left: 10px;
      z-index: 1;
      animation: laser-anim 2.5s ease-in-out infinite;
    }
    @keyframes laser-anim {
      0% { top: 10px; }
      50% { top: 248px; }
      100% { top: 10px; }
    }
    .sim-btn-group {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      margin-top: 15px;
    }
    .sim-btn {
      padding: 10px;
      border-radius: var(--radius);
      font-size: 0.8rem;
      font-weight: 600;
      cursor: pointer;
      border: 1px solid rgba(255,255,255,0.1);
      transition: var(--transition);
    }
    .sim-btn-success { background: rgba(34, 197, 94, 0.15); color: #22c55e; border-color: rgba(34, 197, 94, 0.3); }
    .sim-btn-success:hover { background: rgba(34, 197, 94, 0.3); }
    .sim-btn-fail { background: rgba(239, 68, 68, 0.15); color: #ef4444; border-color: rgba(239, 68, 68, 0.3); }
    .sim-btn-fail:hover { background: rgba(239, 68, 68, 0.3); }
  </style>
</head>
<body class="dashboard-page">

  <!-- ===== HEADER ===== -->
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
        <a href="courses.php">Courses</a>
        <a href="bmi-calculator.php">BMI Calculator</a>
        <div class="nav-account" id="nav-account">
          <button class="nav-account-btn" id="account-btn">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            My Account
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="account-dropdown">
            <a href="dashboard.php#profile" style="display: flex; align-items: center;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <circle cx="12" cy="12" r="5"/>
                <path d="M12 2v4M12 18v4M2 12h4M18 12h4"/>
              </svg>
              My Profile
            </a>
            <a href="courses.php">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <path d="M12 2L2 7v6c0 5 5 9 10 9s10-4 10-9V7l-10-5z"/>
              </svg>
            <a href="dashboard.php#workout">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <path d="M12 2v20M2 12h20"/>
              </svg>
              Workout Plan
            </a>
            <a href="courses.php">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/>
              </svg>
              Our Courses
            </a>
            <a href="dashboard.php">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2v10z"/>
              </svg>
              Review and Feedback
            </a>
            <a href="#" class="logout" onclick="logout(); return false;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
              </svg>
              Logout
            </a>
          </div>
        </div>
      </nav>
      <button class="hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </header>

  <!-- ===== PAGE HERO ===== -->
  <section class="page-hero">
    <div class="page-hero-content">
      <h1>User Dashboard</h1>
      <p>Track your progress and workouts.</p>
    </div>
  </section>

  <!-- ===== MAIN SECTION ===== -->
  <section class="section" style="background:var(--clr-bg); padding:40px 0;">
    <div class="container">
      <div class="account-layout">
        <!-- Sidebar -->
        <aside class="account-sidebar reveal">
          <div class="sidebar-header">
            <div class="sidebar-avatar" id="userAvatar">US</div>
            <div class="sidebar-name" id="userName">Member</div>
            <div class="sidebar-plan" id="userPlan">Member</div>
          </div>
          <nav class="sidebar-nav">
            <a href="#" class="active" onclick="switchUserModule('profile', this); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
              My Profile
            </a>
            <a href="#" onclick="switchUserModule('attendance', this); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              My Attendance
            </a>
            <a href="#" onclick="switchUserModule('workout', this); return false;">
              <svg class="inline-icon" width="1.2em" height="1.2em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6.5 6.5 11 11"/><path d="m21 21-1-1"/><path d="m3 3 1 1"/><path d="m18 22 4-4"/><path d="m2 6 4-4"/><path d="m3 10 7-7"/><path d="m14 21 7-7"/></svg>
              Workout Plan
            </a>
            <a href="#courses" onclick="switchUserModule('courses', this); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
              Our Courses
            </a>
            <a href="#" onclick="switchUserModule('notifications', this); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
              Notifications
            </a>
            <a href="#" onclick="switchUserModule('reviews', this); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10z"/></svg>
              Review & Feedback
            </a>
            <a href="#" style="color:#ff4d4d;" onclick="logout(); return false;">
              <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
              Logout
            </a>
          </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="account-main" id="userDashboardMain">

          <!-- Global History Panel -->
          <div id="globalHistoryPanel" class="account-panel glass-card" style="display:none; border:2px solid var(--clr-primary); margin-bottom: 24px;">
            <div class="panel-header">
              <h3 id="historyTitle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:8px;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg> History Log</h3>
              <button class="btn btn-outline btn-sm" onclick="closeHistory()">Close</button>
            </div>
            <div class="panel-body">
              <ul id="historyList" style="list-style:none; padding:0; margin:0;"></ul>
            </div>
          </div>

          <!-- MODULE 1: My Profile -->
          <div id="module-profile" class="dashboard-module" style="display:block;">
            <div class="account-panel reveal glass-card">
              <div class="panel-header">
                <h3>My Profile</h3>
                <div>
                  <button class="btn btn-outline btn-sm" onclick="toggleEdit('profile')">Edit Profile</button>
                  <button class="btn btn-outline btn-sm" onclick="showHistory('Profile')">History</button>
                </div>
              </div>
              <div class="panel-body">
                <!-- Profile View Mode -->
                <div id="profile-view">
                  <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <p><strong>Full Name:</strong> <span id="v-name"></span></p>
                    <p><strong>User ID:</strong> <span id="v-username"></span></p>
                    <p><strong>Email Address:</strong> <span id="v-email"></span></p>
                    <p><strong>Phone Number:</strong> <span id="v-phone"></span></p>
                    <p><strong>Date of Birth:</strong> <span id="v-dob"></span></p>
                    <p style="grid-column: span 2;"><strong>Address:</strong> <span id="v-address"></span></p>
                  </div>
                </div>
                <!-- Profile Edit Mode -->
                <div id="profile-edit" style="display:none;">
                  <form onsubmit="saveProfile(event)" class="contact-form">
                    <div class="form-row">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" id="e-name" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                      <div class="form-group">
                        <label>User ID / Username</label>
                        <input type="text" id="e-username" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" id="e-email" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                      <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" id="e-current-password" placeholder="Required to change username/password" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" id="e-phone" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" id="e-dob" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" id="e-new-password" placeholder="Leave blank to keep current password" style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                      <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" id="e-confirm-password" placeholder="Repeat the new password" style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="e-address" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 15px;">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                      <button type="button" class="btn btn-outline" onclick="toggleEdit('profile')">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- MODULE 2: My Attendance History -->
          <div id="module-attendance" class="dashboard-module" style="display:none;">
            <!-- Entrance QR Check-In Status Card -->
            <div class="attendance-card reveal glass-card" id="userAttendanceCard" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: var(--radius-lg); padding: 24px; margin-bottom: 24px; display: flex; align-items: center; gap: 24px; transition: var(--transition);">
              <div class="attendance-icon-wrap" style="flex-shrink: 0; width: 70px; height: 70px; background: rgba(255, 107, 53, 0.1); border: 1px solid rgba(255, 107, 53, 0.3); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; position: relative;">
                <span class="pulse-ring" style="position: absolute; width: 100%; height: 100%; border: 2px solid var(--clr-primary); border-radius: var(--radius); opacity: 0;"></span>
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--clr-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                  <rect x="7" y="7" width="3" height="3"/>
                  <rect x="14" y="7" width="3" height="3"/>
                  <rect x="7" y="14" width="3" height="3"/>
                  <path d="M14 14h3v3h-3z"/>
                </svg>
              </div>
              <div class="attendance-info" style="flex-grow: 1;">
                <h3 style="font-family: var(--ff-sub); font-size: 1.2rem; color: var(--clr-white); margin-bottom: 4px; display: flex; align-items: center; gap: 10px; margin-top: 0;">
                  Gym Entrance Check-In
                  <span id="attendanceBadge" class="badge badge-gold" style="font-size: 0.7em; padding: 2px 8px;">Checking Status...</span>
                </h3>
                <p style="color: var(--clr-muted); font-size: 0.9rem; margin: 0; line-height: 1.5;" id="attendanceMsg">
                  Scan the physical QR code at the entrance to log your presence today.
                </p>
                <div style="margin-top: 14px; max-width: 420px;">
                  <label for="attendanceCourseSelect" style="display:block; margin-bottom:6px; font-size:0.8rem; color:var(--clr-muted);">Select course for QR check-in</label>
                  <select id="attendanceCourseSelect" onchange="handleAttendanceCourseChange()" style="width:100%; padding: 10px 12px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                    <option value="">Choose a course</option>
                  </select>
                  <small id="attendanceCourseHint" style="display:block; margin-top:6px; color:var(--clr-muted);">Pick the course first. The QR scanner will open right after you select it.</small>
                </div>
              </div>
              <div class="attendance-action" style="flex-shrink: 0;">
                <button class="btn btn-primary" id="btnScanQR" onclick="openScannerModal()" style="display: inline-flex; align-items: center; gap: 8px;">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                  </svg> Open QR Scanner
                </button>
              </div>
            </div>

            <div style="display: grid; grid-template-columns: 240px 1fr; gap: 20px; align-items: start;">
              <!-- Monthly Summary Count Card -->
              <div class="account-panel reveal glass-card" style="background: var(--clr-surface); border: 1px solid var(--clr-border);">
                <div class="panel-header">
                  <h3 style="margin: 0; font-size: 0.95rem;">Monthly Attendance</h3>
                </div>
                <div class="panel-body" style="text-align: center; padding: 30px 20px;">
                  <div id="monthlyAttendanceCount" style="font-family: var(--ff-head); font-size: 4rem; color: var(--clr-primary); line-height: 1; margin-bottom: 5px;">0</div>
                  <div style="color: var(--clr-muted); font-size: 0.85rem; font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Sessions checked in</div>
                </div>
              </div>
              
              <!-- Attendance Log Table -->
              <div class="account-panel reveal glass-card" style="background: var(--clr-surface); border: 1px solid var(--clr-border); flex-grow: 1;">
                <div class="panel-header">
                  <h3 style="margin: 0;">Attendance Log</h3>
                </div>
                <div class="panel-body" style="padding: 0;">
                  <table style="width: 100%; border-collapse: collapse; text-align: left;" class="table-full">
                    <thead>
                      <tr style="border-bottom: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.02);">
                        <th style="padding: 15px 20px; font-weight: 600; font-size: 0.9rem;">Date</th>
                        <th style="padding: 15px 20px; font-weight: 600; font-size: 0.9rem;">Time</th>
                        <th style="padding: 15px 20px; font-weight: 600; font-size: 0.9rem;">Course</th>
                        <th style="padding: 15px 20px; font-weight: 600; font-size: 0.9rem;">Category</th>
                        <th style="padding: 15px 20px; font-weight: 600; font-size: 0.9rem;">Status</th>
                      </tr>
                    </thead>
                    <tbody id="userAttendanceLogBody">
                      <!-- Rendered by JS -->
                    </tbody>
                  </table>
                  <div id="userAttendanceEmptyMsg" style="padding: 30px; text-align: center; color: var(--clr-muted); display: none;">
                    No attendance records found. Scan the gym entrance QR code to check in.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- MODULE 3: Workout Plan -->
          <div id="module-workout" class="dashboard-module" style="display:none;">
            <div class="account-panel reveal glass-card">
              <div class="panel-header">
                <h3>My Workout Plan</h3>
                <div>
                  <button class="btn btn-outline btn-sm" onclick="window.print()">Print Plan</button>
                  <button class="btn btn-outline btn-sm" onclick="showHistory('Workout Plans')">History</button>
                </div>
              </div>
              <div class="panel-body">
                <p style="color: var(--clr-muted); margin-bottom: 20px;">Your workout plans are shown course-wise from the courses you have booked:</p>
                <div id="userWorkoutPlans" style="display:flex; flex-direction:column; gap:15px;"></div>
                <div id="userWorkoutPlansEmpty" style="padding:30px; text-align:center; color:var(--clr-muted); display:none;">No course-wise workout plan found yet.</div>
              </div>
            </div>
          </div>

          <!-- MODULE 4: Our Courses -->
          <div id="module-courses" class="dashboard-module" style="display:none;">
            <div class="account-panel reveal glass-card">
              <div class="panel-header">
                <h3>My Booked Courses</h3>
                <div>
                  <button class="btn btn-outline btn-sm" onclick="showHistory('Courses')">History</button>
                </div>
              </div>
              <div style="padding: 0 20px 15px; color: var(--clr-muted); font-size: 0.9rem;">
                Only courses you have booked will appear here.
              </div>
              <div class="panel-body" style="padding: 0;">
                <table class="table-full" style="width: 100%;">
                  <thead>
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.02);">
                      <th style="padding: 15px 20px;">Course</th>
                      <th style="padding: 15px 20px;">Category</th>
                      <th style="padding: 15px 20px;">Booked On</th>
                      <th style="padding: 15px 20px;">Status</th>
                    </tr>
                  </thead>
                  <tbody id="userCoursesBody"></tbody>
                </table>
                <div id="userCoursesEmpty" style="padding: 30px; text-align: center; color: var(--clr-muted); display:none;">No booked courses yet.</div>
              </div>
            </div>
          </div>

          <!-- MODULE 6: Notifications -->
          <div id="module-notifications" class="dashboard-module" style="display:none;">
            <div class="account-panel reveal glass-card">
              <div class="panel-header">
                <h3>Notifications & Updates</h3>
                <div>
                  <span class="badge badge-primary" id="userNotificationsCount">0</span>
                </div>
              </div>
              <div class="panel-body">
                <div id="userNotificationsList" style="display:flex; flex-direction:column; gap:15px;"></div>
                <div id="userNotificationsEmpty" style="padding:30px; text-align:center; color:var(--clr-muted); display:none;">No active notifications right now.</div>
              </div>
            </div>
          </div>

          <!-- MODULE 7: Review & Feedback -->
          <div id="module-reviews" class="dashboard-module" style="display:none;">
            <div class="account-panel reveal glass-card">
              <div class="panel-header">
                <h3>My Reviews & Feedback</h3>
                <div>
                  <button class="btn btn-primary btn-sm" onclick="toggleEdit('new-review')">Write a Review</button>
                  <button class="btn btn-outline btn-sm" onclick="showHistory('Reviews')">History</button>
                </div>
              </div>
              <div class="panel-body">
                <!-- Review Form -->
                <div id="new-review-edit" style="display:none; margin-bottom: 25px; padding: 20px; background: rgba(255,255,255,0.03); border: 1px solid var(--clr-border); border-radius: var(--radius);">
                  <form onsubmit="saveReview(event)" class="contact-form">
                    <div class="form-row">
                      <div class="form-group">
                        <label>Review Target</label>
                        <select id="r-target" style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                          <option value="General Gym Feedback">General Gym Feedback</option>
                          <option value="Vikram Kumar (HIIT Trainer)">Vikram Kumar (HIIT Trainer)</option>
                          <option value="Sneha Kapoor (Zumba Trainer)">Sneha Kapoor (Zumba Trainer)</option>
                          <option value="HIIT Blast Course">HIIT Blast Course</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Rating</label>
                        <select id="r-rating" style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white);">
                          <option value="5">⭐⭐⭐⭐⭐ (5/5)</option>
                          <option value="4">⭐⭐⭐⭐ (4/5)</option>
                          <option value="3">⭐⭐⭐ (3/5)</option>
                          <option value="2">⭐⭐ (2/5)</option>
                          <option value="1">⭐ (1/5)</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Your Review</label>
                      <textarea id="r-text" required style="padding: 10px; border-radius: var(--radius); border: 1px solid var(--clr-border); background: var(--clr-bg3); color: var(--clr-white); min-height: 100px;" placeholder="Write your review here..."></textarea>
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 10px;">
                      <button type="submit" class="btn btn-primary">Submit Review</button>
                      <button type="button" class="btn btn-outline" onclick="toggleEdit('new-review')">Cancel</button>
                    </div>
                  </form>
                </div>

                <!-- Reviews List -->
                <div id="reviews-list" style="display: flex; flex-direction: column; gap: 15px;"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ===== QR SCANNER MODAL ===== -->
  <div class="scanner-overlay" id="qrScannerModal">
    <div class="scanner-container">
      <button onclick="closeScannerModal()" style="position: absolute; top: 15px; right: 20px; background: none; border: none; color: var(--clr-text); font-size: 28px; cursor: pointer; z-index: 10;">&times;</button>
      
      <h3 style="font-family: var(--ff-sub); font-size: 1.4rem; color: var(--clr-white); margin-bottom: 5px; margin-top: 0;">Scan Gym QR Code</h3>
      <p style="color: var(--clr-muted); font-size: 0.85rem; margin-bottom: 20px;">Position the IronFit entrance QR code within the frame to check in.</p>
      <div id="scannerSelectedCourse" style="margin-bottom: 12px; padding: 10px 12px; border: 1px solid var(--clr-border); border-radius: var(--radius); background: rgba(255,255,255,0.03); color: var(--clr-white); font-size: 0.85rem;">
        Selected course: -
      </div>
      
      <!-- Viewfinder with scanning laser -->
      <div class="scanner-viewfinder" id="viewfinder">
        <div class="scanner-corner sc-tl"></div>
        <div class="scanner-corner sc-tr"></div>
        <div class="scanner-corner sc-bl"></div>
        <div class="scanner-corner sc-br"></div>
        <div class="scanner-laser" id="scannerLaser"></div>
        <div id="reader" style="width: 100%; height: 100%;"></div>
      </div>
      
      <div id="scannerFeedback" style="min-height: 24px; font-size: 0.9rem; margin: 15px 0; font-weight: 500; color: var(--clr-muted);">
        Initializing camera...
      </div>

      <div style="margin-bottom: 12px;">
        <button type="button" class="btn btn-outline btn-sm" onclick="requestScannerCameraAccess()">Enable Camera Access</button>
      </div>

      <div style="margin-top: 12px; padding: 14px; border: 1px dashed var(--clr-border); border-radius: var(--radius); background: rgba(255,255,255,0.03); text-align: left;">
        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--clr-muted); margin-bottom: 8px; font-weight: 600;">Scan from Photo</div>
        <input type="file" id="scannerPhotoInput" accept="image/*" onchange="handleScannerPhotoUpload(event)" style="display:block; width:100%; color: var(--clr-muted);" />
        <small style="display:block; margin-top:6px; color:var(--clr-muted);">Take a photo of the QR code and upload it here to mark attendance.</small>
      </div>
      
      <!-- Simulation Controls -->
      <div style="border-top: 1px solid var(--clr-border); padding-top: 15px; margin-top: 15px;">
        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--clr-muted); margin-bottom: 10px; font-weight: 600;">Testing / Simulation Panel</div>
        
        <div style="margin: 10px auto; width: 120px; height: 120px; border: 1px solid var(--clr-border); padding: 5px; background: #fff; border-radius: var(--radius);">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=110x110&data=IRONFIT_ENTRANCE_QR&color=ff6b35&bgcolor=ffffff" alt="Entrance QR Code" style="width: 100%; height: 100%; object-fit: contain;" />
        </div>
        <div style="font-size: 0.7rem; color: var(--clr-muted); margin-bottom: 12px;">Entrance QR Value: <code style="color: var(--clr-primary); font-weight: bold;">IRONFIT_ENTRANCE_QR</code></div>

        <div class="sim-btn-group">
          <button type="button" class="sim-btn sim-btn-success" onclick="simulateScan('IRONFIT_ENTRANCE_QR')">Simulate Valid Scan</button>
          <button type="button" class="sim-btn sim-btn-fail" onclick="simulateScan('INVALID_CODE')">Simulate Invalid Scan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== FOOTER ===== -->
  <footer class="site-footer">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo-text">IRON<span>FIT</span></div>
        <p>Transform your body, elevate your life.</p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">→ Home</a></li>
          <li><a href="about.php">→ About Us</a></li>
          <li><a href="courses.php">→ Courses</a></li>
          <li><a href="bmi-calculator.php">→ BMI Calculator</a></li>
          <li><a href="contact.php">→ Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 IronFit Gym. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://unpkg.com/html5-qrcode"></script>
  <script>
    document.addEventListener('DOMContentLoaded', async () => {
      // Inject name and ID
      const loggedUser = JSON.parse(localStorage.getItem('loggedUser') || 'null');
      if (!loggedUser || loggedUser.role !== 'user') {
        return;
      }
      
      // Set sidebar details
      const nameEl = document.getElementById('userName');
      const avatarEl = document.getElementById('userAvatar');
      if (nameEl) nameEl.textContent = loggedUser.name;
      if (avatarEl && loggedUser.name) {
        avatarEl.textContent = loggedUser.name.split(' ').map(n => n[0]).join('').toUpperCase().substring(0, 2);
      }
      
      // Fetch user profile from database
      try {
        const res = await fetch('api/users');
        if (res.ok) {
          const users = await res.json();
          const user = users.find(u => u.id === loggedUser.id || u.name === loggedUser.name);
          if (user) {
            // Set profile fields
            document.getElementById('v-name').textContent = user.name || '';
            document.getElementById('v-username').textContent = user.username || loggedUser.username || '';
            document.getElementById('v-email').textContent = user.email || '';
            document.getElementById('v-phone').textContent = user.phone || '';
            document.getElementById('v-dob').textContent = user.dob || '';
            document.getElementById('v-address').textContent = user.address || '';
            
            document.getElementById('e-name').value = user.name || '';
            document.getElementById('e-username').value = user.username || loggedUser.username || '';
            document.getElementById('e-email').value = user.email || '';
            document.getElementById('e-phone').value = user.phone || '';
            document.getElementById('e-dob').value = user.dob || '';
            document.getElementById('e-address').value = user.address || '';
            
            if (document.getElementById('userPlan')) {
              document.getElementById('userPlan').textContent = 'Member';
            }
          } else {
            document.getElementById('v-username').textContent = loggedUser.username || '';
            document.getElementById('e-username').value = loggedUser.username || '';
          }
        } else {
          document.getElementById('v-username').textContent = loggedUser.username || '';
          document.getElementById('e-username').value = loggedUser.username || '';
        }
      } catch (e) {
        console.error('Error fetching user profile:', e);
        document.getElementById('v-username').textContent = loggedUser.username || '';
        document.getElementById('e-username').value = loggedUser.username || '';
      }
    });
  </script>

  <!-- ===== MOBILE NAV ===== -->
  <div class="mobile-nav" id="mobile-nav">
    <a href="index.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Home Home</a>
    <a href="about.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> About Us</a>
    <a href="contact.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> Contact Us</a>
    <a href="courses.php"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="9"/></svg> Courses</a>
    <a href="bmi-calculator.php">BMI Calculator</a>
    <a href="#" class="mobile-account-trigger"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> My Account <span class="acc-arrow" style="margin-left:auto;"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></span></a>
    <div class="mobile-account-sub">
      
      <h3 style="font-family: var(--ff-sub); font-size: 1.4rem; color: var(--clr-white); margin-bottom: 5px; margin-top: 0;">Scan Gym QR Code</h3>
      <p style="color: var(--clr-muted); font-size: 0.85rem; margin-bottom: 20px;">Position the IronFit entrance QR code within the frame to check in.</p>
      
      <!-- Viewfinder with scanning laser -->
      <div class="scanner-viewfinder" id="viewfinder">
        <div class="scanner-corner sc-tl"></div>
        <div class="scanner-corner sc-tr"></div>
        <div class="scanner-corner sc-bl"></div>
        <div class="scanner-corner sc-br"></div>
        <div class="scanner-laser" id="scannerLaser"></div>
        <div id="reader" style="width: 100%; height: 100%;"></div>
      </div>
      
      <div id="scannerFeedback" style="min-height: 24px; font-size: 0.9rem; margin: 15px 0; font-weight: 500; color: var(--clr-muted);">
        Initializing camera...
      </div>
      
      <!-- Simulation Controls -->
      <div style="border-top: 1px solid var(--clr-border); padding-top: 15px; margin-top: 15px;">
        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--clr-muted); margin-bottom: 10px; font-weight: 600;">Testing / Simulation Panel</div>
        
        <!-- Entrance QR code preview (small image for webcam pointing or visual preview) -->
        <div style="margin: 10px auto; width: 120px; height: 120px; border: 1px solid var(--clr-border); padding: 5px; background: #fff; border-radius: var(--radius);">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=110x110&data=IRONFIT_ENTRANCE_QR&color=ff6b35&bgcolor=ffffff" alt="Entrance QR Code" style="width: 100%; height: 100%; object-fit: contain;" />
        </div>
        <div style="font-size: 0.7rem; color: var(--clr-muted); margin-bottom: 12px;">Entrance QR Value: <code style="color: var(--clr-primary); font-weight: bold;">IRONFIT_ENTRANCE_QR</code></div>

        <div class="sim-btn-group">
          <button type="button" class="sim-btn sim-btn-success" onclick="simulateScan('IRONFIT_ENTRANCE_QR')">Simulate Valid Scan</button>
          <button type="button" class="sim-btn sim-btn-fail" onclick="simulateScan('INVALID_CODE')">Simulate Invalid Scan</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
  <script src="js/notifications.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/dashboard-mobile.js"></script>
</body>
</html>
