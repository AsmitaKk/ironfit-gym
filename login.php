<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IronFit Gym – Sign In</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/pages.css" />
  <script src="js/sql-storage-bridge.js"></script>
  <style>
    .login-card {
      background: var(--clr-bg2);
      padding: 40px;
      border-radius: 12px;
      max-width: 400px;
      width: 90%;
      margin: 80px auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: var(--clr-muted);
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 12px;
      background: var(--clr-bg);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 6px;
      color: var(--clr-light);
    }

    .error-msg {
      color: #ff4d4d;
      font-size: 0.9em;
      margin-bottom: 10px;
      text-align: center;
    }

    .btn-primary {
      background: var(--clr-primary);
      color: #fff;
      border: none;
      border-radius: 6px;
      padding: 12px;
      width: 100%;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="login-card">
    <h2 style="text-align:center; margin-bottom:10px;">Sign In</h2>
    <p id="loginErrorMsg" class="error-msg"></p>
    <form id="loginForm" onsubmit="handleDashboardLogin(event)">
      <div class="form-group" style="margin-bottom:20px;">
        <label for="loginUsername">ID / Username</label>
        <input type="text" id="loginUsername" name="username" placeholder="Enter your ID" required />
      </div>
      <div class="form-group" style="margin-bottom:20px;">
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required />
      </div>
      <button type="submit" class="btn-primary">Sign In</button>
    </form>
    <p style="text-align:center; margin-top:15px;">New here? <a href="register.php">Create an account</a></p>
  </div>

  <script src="js/auth.js"></script>
  <script src="js/main.js"></script>
</body>

</html>