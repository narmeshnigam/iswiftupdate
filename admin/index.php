<?php
/**
 * Admin login page.
 *
 * Presents a simple login form and performs authentication against
 * the users table. Successful logins establish a session and
 * redirect to dashboard.php. Invalid credentials result in an error
 * message displayed above the form.
 */
session_start();
require_once __DIR__ . '/../backend/config.php';
require_once __DIR__ . '/../backend/utils.php';

// If already logged in, go to dashboard
if (isset($_SESSION['uid'])) {
    redirect('dashboard.php');
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = sanitize($_POST['email'] ?? '');
    $password = sanitize($_POST['password'] ?? '');
    if ($email && $password) {
        $stmt = $mysqli->prepare('SELECT id, name, role, password_plaintext FROM users WHERE email = ?');
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $res = $stmt->get_result();
            $row = $res->fetch_assoc();
            if ($row && $password === $row['password_plaintext']) {
                // Valid credentials
                $_SESSION['uid']  = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['role'] = $row['role'];
                $stmt->close();
                redirect('dashboard.php');
            }
            $stmt->close();
        }
    }
    $error = 'Invalid email or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
  <div class="container" style="max-width:400px;padding-top:4rem;">
    <h1 class="text-center" style="margin-bottom:2rem;">Admin Login</h1>
    <?php if ($error): ?>
      <div style="background:#FDECEA;color:#B91C1C;padding:1rem;border-radius:0.5rem;margin-bottom:1rem;">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>
    <form method="post" action="">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%;">Log In</button>
    </form>
  </div>
  <script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>
</body>
</html>
