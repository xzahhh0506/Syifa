<?php
$judul = $_GET['judul'] ?? 'SMKN 64 JAKARTA : Perayaan P5, Ajang Persiapan Siswa SMK Menuju Dunia Kerja';
$isi = $_GET['isi'] ?? 'Perayaan P5 SMK Negeri 64 Jakarta kali ini bertemakan ” Wonderful Future Sixtyfour”. Kegiatan ini diselenggarakan pada Kamis, 20 Juni 2024 di lapangan SMK Negeri 64 Jakarta. Tema kali ini berkaitan dengan kebekerjaan yang bertujuan untuk membantu siswa/siswi SMK Negeri 64 Jakarta dalam mempersiapkan diri menuju dunia kerja. Bilamana tidak dipersiapkan secara dini, maka para siswa yang kelak akan menjadi pencari kerja akan secara otomatis tereliminasi. Kegiatan ini juga diharapkan dapat memberikan pengalaman bermakna bagi setiap siswa agar mampu bersaing dalam memperoleh pekerjaan yang layak.';
$gambar = $_GET['gambar'] ?? 'gambar3.jpg';
$tanggal = $_GET['tanggal'] ?? date('20-06-2024');
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($judul) ?> - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
      height: 240px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #000;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .container .card {
      border: 1px solid #cbd5e0;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .card-title {
      color: #003566;
      font-weight: 600;
    }

    .btn-outline-danger {
      color: #003566;
      border-color: #003566;
    }

    .btn-outline-danger:hover {
      background-color: #003566;
      color: white;
    }

    footer {
      background-color: #121c53;
      color: white;
      padding-top: 40px;
    }

    footer h5 {
      border-bottom: 2px solid #fff;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }

    .footer-tags span {
      background: #fff;
      color: #000;
      padding: 5px 10px;
      margin: 3px;
      border-radius: 5px;
      font-size: 0.85em;
      display: inline-block;
    }

    .footer-icon {
      width: 40px;
      height: 40px;
      line-height: 40px;
      border-radius: 50%;
      text-align: center;
      font-weight: bold;
      margin-right: 10px;
      display: inline-block;
    }

    .footer-icon.insta {
      background-color: gold;
      color: black;
    }

    .footer-icon.yt {
      background-color: #ff6239;
      color: white;
    }

    .copyright {
      background-color: #ff6239;
      text-align: center;
      padding: 15px 0;
      margin-top: 30px;
      font-size: 0.9em;
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

  <div class="banner">
    Detail Berita
  </div>

  <section class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card overflow-hidden">
          <img src="<?= htmlspecialchars($gambar) ?>" class="card-img-top" alt="Gambar Berita" style="object-fit: cover; max-height: 400px;">
          <div class="card-body">
            <h2 class="card-title"><?= htmlspecialchars($judul) ?></h2>
            <p class="text-muted"><i class="bi bi-calendar3"></i> <?= date('d M Y', strtotime($tanggal)) ?></p>
            <p class="fs-5" style="text-align: justify;"><?= nl2br(htmlspecialchars($isi)) ?></p>
            <a href="berita.php" class="btn btn-outline-danger mt-4"><i class="bi bi-arrow-left"></i> Kembali ke Berita</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container" style="max-width: 1200px;">
      <div class="row gy-4">
        <!-- Kontak -->
        <div class="col-md-4">
          <h5>Hubungi Kami</h5>
          <p><strong>SMKN 64 Jakarta</strong></p>
          <p>SUKSES (Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
          <p><strong>Alamat:</strong><br>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Cipayung, Jakarta Timur 13890</p>
          <p><strong>Telepon:</strong><br>08978891895 (Hilal)<br>081212001521 (Agus)</p>
          <p><strong>Email:</strong><br>info@smkn64-jkt.sch.id<br>info.smkn64jkt@gmail.com</p>
        </div>

        <!-- Tags -->
        <div class="col-md-4">
          <h5>Tags</h5>
          <div class="footer-tags">
            <span>#CLASSMEETING</span>
            <span>#PERAYAANP5</span>
            <span>#PPDBJAKARTA2021</span>
            <span>#SMKHEBAT</span>
            <span>#SMKNEGERI64JAKARTA</span>
            <span>#PENGUMUMAN</span>
            <span>#POJOK-KISAH</span>
            <span>#SMKN 64</span>
          </div>
        </div>

        <!-- Sosial Media -->
        <div class="col-md-4">
          <h5>Ikuti Kami</h5>
          <a href="#" title="Instagram" class="footer-icon insta">IG</a>
          <a href="#" title="YouTube" class="footer-icon yt">YT</a>
        </div>
      </div>
    </div>

    <div class="copyright">
      &copy; 2020 - <?= date('Y') ?> SMKN 64 Jakarta. All rights reserved. | Powered by sekolahku.web.id
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
