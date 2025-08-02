<?php include 'koneksi.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $koneksi->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        header("Location: index.php?msg=registered");
        exit;
    } else {
        $error = "Gagal mendaftar! Mungkin username sudah digunakan.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Akun - Website Syifaa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #6dd5ed, #2193b0);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #ffffff;
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }
    .container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }
    .input-group {
      margin-bottom: 1rem;
    }
    .input-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1rem;
    }
    .btn {
      width: 100%;
      padding: 0.75rem;
      border: none;
      background: #007BFF;
      color: white;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .btn:hover {
      background: #0056b3;
    }
    .text-center {
      text-align: center;
      margin-top: 1rem;
    }
    .text-center a {
      color: #007BFF;
      text-decoration: none;
    }
    .error {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Daftar Akun</h2>
    <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
    <form method="POST">
      <div class="input-group">
        <input type="text" name="username" placeholder="Username" required />
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <button type="submit" class="btn">Daftar</button>
    </form>
    <div class="text-center">
      Sudah punya akun? <a href="index.php">Masuk di sini</a>
    </div>
  </div>
</body>
</html>
