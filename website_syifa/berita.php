<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Berita - SMKN 64 Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      min-height: 100vh;
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

    .card-title {
      font-weight: 600;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
  <div class="container">
    <img src="logo.png" width="40" height="40" class="me-2"/>
    <a class="navbar-brand fw-bold" href="index.php">SMKN 64 JAKARTA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="berita.php" class="nav-link active text-warning">Berita</a></li>
        <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Berita Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Berita Terbaru</h2>
    <div class="row g-4">
      <!-- Berita 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="gambar2.jpg" class="card-img-top" alt="Berita 1">
          <div class="card-body">
            <h5 class="card-title">Kegiatan MPLS 2025</h5>
            <p class="card-text">Masa Pengenalan Lingkungan Sekolah berjalan sukses dengan berbagai kegiatan yang bermanfaat dan menyenangkan.</p>
            <a href="berita1.php" class="btn btn-danger btn-sm">Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Berita 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="gambar1.jpg" class="card-img-top" alt="Berita 2">
          <div class="card-body">
            <h5 class="card-title">Peresmian Gedung Sekolah</h5>
            <p class="card-text">SMKN 64 Jakarta secara resmi meresmikan gedung baru sebagai upaya peningkatan sarana dan prasarana pendidikan demi mendukung proses belajar mengajar yang lebih optimal.</p>
            <a href="berita2.php" class="btn btn-danger btn-sm">Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Berita 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="gambar3.jpg" class="card-img-top" alt="Berita 3">
          <div class="card-body">
            <h5 class="card-title">SMKN 64 JAKARTA : Perayaan P5, Ajang Persiapan Siswa SMK Menuju Dunia Kerja</h5>
            <p class="card-text">Perayaan P5 SMK Negeri 64 Jakarta kali ini bertemakan ” Wonderful Future Sixtyfour”. Kegiatan ini diselenggarakan pada Kamis, 20 Juni 2024 di lapangan SMK Negeri 64 Jakarta. Tema kali ini berkaitan dengan kebekerjaan yang bertujuan untuk membantu siswa/siswi SMK Negeri 64 Jakarta dalam mempersiapkan diri menuju dunia kerja.</p>
            <a href="berita3.php" class="btn btn-danger btn-sm">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Berita Terbaru -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Berita Terbaru</h2>
    <div class="row g-4">
      <?php
      $result = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");
      if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <div class="col-md-4">
                <div class="berita-card bg-white border rounded shadow-sm p-3 h-100 d-flex flex-column">
                  <img
                    ssrc="assets/<?= htmlspecialchars($row['gambar']) ?>" 
                    alt="<?= htmlspecialchars($row['judul']) ?>" 
                    onerror="this.src='assets/default.jpg'" 
                    class="berita-img img-fluid"
                    style="object-fit: cover; max-height: 180px; width: 100%; border-radius: 0.5rem;"
                  />
                  <div class="berita-content mt-3 flex-grow-1 d-flex flex-column">
                    <h5 class="text-danger fw-bold"><?= htmlspecialchars($row['judul']) ?></h5>
                    <p class="text-muted flex-grow-1"><?= nl2br(htmlspecialchars(substr($row['isi'], 0, 120))) ?>...</p>
                    <a href="berita1.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger mt-auto align-self-start">
                      Baca Selengkapnya
                    </a>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo '<p class="text-center text-muted">Belum ada berita.</p>';
      }
      ?>
    </div>
  </div>
</section>
</section>

<footer class="pt-5" style="background-color: #121c53; color: white;">
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
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">#CLASSMEETING</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">#PERAYAANP5</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">PPDBJAKARTA2021</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">#SMKHEBAT</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">#SMKNEGERI64JAKARTA</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">PENGUMUMAN</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">POJOK-KISAH</span>
          <span style="background:#fff; color:#000; padding:5px 10px; border-radius:5px; font-size: 0.85em;">SMKN 64</span>
        </div>
      </div>

      <!-- Sosial Media -->
      <div style="flex: 1; min-width: 280px;">
        <h5 style="border-bottom: 2px solid #fff; padding-bottom: 10px;">Ikuti Kami</h5>
        <div style="margin-top: 10px;">
          <a href="#" title="Instagram" style="background: gold; width: 40px; height: 40px; display: inline-block; border-radius: 50%; text-align: center; line-height: 40px; margin-right: 10px; color: black; font-weight: bold;">IG</a>
          <a href="#" title="YouTube" style="background: #ff6239; width: 40px; height: 40px; display: inline-block; border-radius: 50%; text-align: center; line-height: 40px; color: white; font-weight: bold;">YT</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div style="text-align: center; padding: 15px; margin-top: 20px; background-color: #ff6239;">
    <small>&copy; 2020 - 2025 SMKN 64 Jakarta. All rights reserved. | Powered by sekolahku.web.id</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
