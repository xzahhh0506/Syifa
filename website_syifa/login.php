<?php
session_start();

// Redirect jika sudah login
if (isset($_SESSION['user'])) {
    header("Location: admin_berita.php");
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin123') {
    $_SESSION['user'] = $username;
    header("Location: admin_berita.php");
    exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login Admin - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      width: 100%;
      max-width: 420px;
      background-color: #ffffff;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .login-card h4 {
      color: #003566;
    }

    .btn-login {
      background-color: #ff6239;
      border: none;
      font-weight: 600;
    }

    .btn-login:hover {
      background-color: #e0522d;
    }

    .form-label {
      color: #003566;
    }

    .back-link {
      color: #003566;
      font-weight: 500;
    }

    .back-link:hover {
      text-decoration: underline;
    }

    .alert-danger {
      background-color: #ffd6d6;
      color: #a94442;
      border-color: #f5c2c7;
    }
  </style>
</head>
<body>

<div class="login-card">
  <h4 class="mb-4 text-center fw-bold">Login Admin</h4>

  <?php if ($error): ?>
    <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>

  <form method="post" action="login.php">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" id="username" name="username" class="form-control" required autofocus />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" required />
    </div>
    <button type="submit" class="btn btn-login w-100">Login</button>
  </form>

  <div class="text-center mt-3">
    <a href="index.php" class="back-link"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
