<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile - IronFit Gym</title>
  <script src="js/sql-storage-bridge.js"></script>
  <script>
    const user = JSON.parse(localStorage.getItem('loggedUser') || 'null');
    if (!user) {
      window.location.replace('login.php');
    } else if (user.role === 'admin') {
      window.location.replace('admin-dashboard.php');
    } else if (user.role === 'trainer') {
      window.location.replace('trainer-dashboard.php');
    } else {
      window.location.replace('dashboard.php#profile');
    }
  </script>
</head>
<body>
  <p>Redirecting to your profile...</p>
</body>
</html>
