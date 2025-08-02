<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SMKN 64 Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar-custom {
      background-color: #003566;
    }
    .nav-link, .navbar-brand {
      color: white !important;
    }
    .nav-link:hover {
      color: #ffc107 !important;
    }
    .hero {
      background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('64.jpeg') center/cover no-repeat;
      height: 80vh;
    }
    footer {
      background-color: #121c53;
      color: #fff;
    }
    .footer-tags span {
      display: inline-block;
      background-color: #fff;
      color: #000;
      padding: 5px 10px;
      margin: 3px;
      border-radius: 5px;
      font-size: 0.9em;
    }
    .footer-icon {
      display: inline-block;
      width: 35px;
      height: 35px;
      line-height: 35px;
      border-radius: 50%;
      text-align: center;
      margin-right: 10px;
    }
    .footer-icon.insta {
      background-color: gold;
    }
    .footer-icon.yt {
      background-color: #ff6239;
      color: white;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
  <div class="container">
    <img src="logo.png" alt="Logo SMKN 64" width="40" height="40" class="me-2"/>
    <a class="navbar-brand fw-bold" href="index.php">SMKN 64 JAKARTA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="berita.php" class="nav-link">Berita</a></li>
        <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero d-flex align-items-center text-center text-white">
  <div class="container">
    <h1 class="display-4 fw-bold">SMKN 64 JAKARTA</h1>
    <p class="lead">SMK BISA, SMK HEBAT!</p>
  </div>
</section>

<!-- Konten Beranda -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center g-4 justify-content-center">
      <div class="col-md-4">
        <div class="p-4 bg-light shadow rounded">
          <i class="bi bi-mortarboard-fill fs-1 text-primary"></i>
          <h5 class="mt-2 fw-semibold">Siswa Aktif</h5>
          <p class="fs-4 fw-bold text-primary">360</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-light shadow rounded">
          <i class="bi bi-person-badge-fill fs-1 text-primary"></i>
          <h5 class="mt-2 fw-semibold">Guru & Staf</h5>
          <p class="fs-4 fw-bold text-primary">30</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-light shadow rounded">
          <i class="bi bi-stars fs-1 text-primary"></i>
          <h5 class="mt-2 fw-semibold">Ekstrakurikuler</h5>
          <p class="fs-4 fw-bold text-primary">11</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer Lengkap -->
<footer class="pt-5">
  <div class="container">
    <div class="row text-white">
      <div class="col-md-4 mb-4">
        <h5 class="border-bottom pb-2">Hubungi Kami</h5>
        <p>SMKN 64 Jakarta · SUKSES (Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
        <p><strong>Alamat:</strong><br>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Cipayung, Jakarta Timur 13890</p>
        <p><strong>Telepon:</strong><br>08978891895 (Hilal)<br>081212001521 (Agus)</p>
        <p><strong>Email:</strong><br>info@smkn64-jkt.sch.id<br>info.smkn64jkt@gmail.com</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="border-bottom pb-2">Tags</h5>
        <div class="footer-tags">
          <span>#CLASSMEETING</span>
          <span>#PERAYAANP5</span>
          <span>PPDBJAKARTA2021</span>
          <span>BERITA</span>
          <span>#SMKHEBAT</span>
          <span>#SMKNEGERI64JAKARTA</span>
          <span>PENGUMUMAN</span>
          <span>POJOK-KISAH</span>
          <span>SMKN 64</span>
          <span>PPDB 2021</span>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="border-bottom pb-2">Ikuti Kami</h5>
        <div>
          <a href="#" class="footer-icon insta"><i class="bi bi-instagram"></i></a>
          <a href="#" class="footer-icon yt"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-3 mt-3" style="background-color:#ff6239;">
    <small>&copy; 2020 - 2025 SMKN 64 Jakarta All rights reserved. | Powered by sekolahku.web.id</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
