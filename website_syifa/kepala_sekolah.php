<?php
$nama = "Dewi Puspitasari, S.ST.Par, M.Par";
$jabatan = "Kepala Sekolah";
$deskripsi = "SMKN 64 Jakarta tanggap terhadap perkembangan teknologi informasi. Dengan SDM berkualitas, siap membentuk generasi unggul. Kami berkomitmen menciptakan lingkungan belajar yang aman, kreatif, dan inovatif, agar siswa dapat tumbuh menjadi insan berkarakter dan siap menghadapi tantangan global.";
$gambar = "kepsek.png"; // sesuaikan path gambar
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Kepala Sekolah - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap + Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #003566;
      color: #fff;
      padding: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    header img {
      width: 50px;
      margin-right: 10px;
    }

    header h1 {
      font-size: 24px;
      font-weight: 600;
      margin: 0;
    }

    nav {
      background-color: #001d3d;
      display: flex;
      justify-content: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 12px 20px;
      transition: background 0.3s;
      font-weight: 500;
    }

    nav a:hover {
      background-color: #003566;
    }

    .banner {
      background: url('https://smkn64-jkt.sch.id/uploads/images/profil-sekolah.jpg') center/cover no-repeat;
      height: 220px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
    }

    .content {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .profile-img {
      border-radius: 8px;
      width: 100%;
      max-height: 420px;
      object-fit: cover;
    }

    .text-black {
      color: #000 !important;
    }

    .text-jabatan {
  color: #000 !important;
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

    .btn-back {
      background-color: #003566;
      color: #fff;
    }

    .btn-back:hover {
      background-color: #001d3d;
    }
  </style>
</head>
<body>

<header>
  <img src="logo.png" alt="Logo">
  <h1>SMKN 64 Jakarta</h1>
</header>

<nav>
  <a href="index.php">Beranda</a>
  <a href="profil.php">Profil</a>
  <a href="berita.php">Berita</a>
  <a href="kontak.php">Kontak</a>
</nav>

<div class="banner">Kepala Sekolah</div>

<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="content d-flex flex-column flex-md-row align-items-center gap-4">
        <div class="col-md-4">
          <img src="<?= $gambar ?>" alt="Kepala Sekolah" class="profile-img">
        </div>
        <div class="col-md-8">
          <h3 class="fw-bold text-primary"><?= $nama ?></h3>
          <p style="color: #000;">- <?= $jabatan ?> -</p>
          <p style="text-align: justify;"><?= $deskripsi ?></p>
          <a href="profil.php" class="btn btn-back mt-3"><i class="bi bi-arrow-left"></i> Kembali ke Profil</a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="pt-5">
  <div class="container" style="max-width: 1200px; margin: auto; padding: 0 20px;">
    <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
      <!-- Kontak -->
      <div style="flex: 1; min-width: 280px;">
        <h5 style="border-bottom: 2px solid #fff; padding-bottom: 10px;">Hubungi Kami</h5>
        <p><strong>SMKN 64 Jakarta</strong></p>
        <p>SUKSES (Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
        <p><strong>Alamat:</strong><br>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Cipayung, Jakarta Timur 13890</p>
        <p><strong>Telepon:</strong><br>08978891895 (Hilal)<br>081212001521 (Agus)</p>
        <p><strong>Email:</strong><br>info@smkn64-jkt.sch.id<br>info.smkn64jkt@gmail.com</p>
      </div>

      <!-- Tags -->
      <div style="flex: 1; min-width: 280px;">
        <h5 style="border-bottom: 2px solid #fff; padding-bottom: 10px;">Tags</h5>
        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
          <span>#CLASSMEETING</span>
          <span>#PERAYAANP5</span>
          <span>PPDBJAKARTA2021</span>
          <span>#SMKHEBAT</span>
          <span>#SMKNEGERI64JAKARTA</span>
          <span>PENGUMUMAN</span>
          <span>POJOK-KISAH</span>
          <span>SMKN 64</span>
        </div>
      </div>

      <!-- Sosial Media -->
      <div style="flex: 1; min-width: 280px;">
        <h5 style="border-bottom: 2px solid #fff; padding-bottom: 10px;">Ikuti Kami</h5>
        <div style="margin-top: 10px;">
          <a href="#" title="Instagram" class="footer-icon insta">IG</a>
          <a href="#" title="YouTube" class="footer-icon yt">YT</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div style="text-align: center; padding: 15px; margin-top: 20px; background-color: #ff6239;">
    <small>&copy; 2020 - 2025 SMKN 64 Jakarta. All rights reserved. | Powered by sekolahku.web.id</small>
  </div>
</footer>

</body>
</html>
