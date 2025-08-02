<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hubungi Kami - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #eef3fb;
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

    h2 {
      text-align: center;
      color: #003566;
      margin: 40px auto 20px;
      font-size: 24px;
      border-bottom: 3px solid #f44336;
      padding-bottom: 8px;
      width: fit-content;
    }

    .container {
  max-width: 1200px;
  margin: 0 auto 50px;
  padding: 0 20px;
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

/* Peta diperbesar */
.map-container {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 6px 16px rgba(0,0,0,0.05);
  flex: 2; /* lebih besar */
  min-width: 300px;
  max-width: 700px;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.map-container iframe {
  width: 100%;
  height: 450px; /* tinggi peta sedikit diperbesar */
  border: none;
}

/* Gambar diperkecil */
.profile-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 6px 16px rgba(0,0,0,0.05);
  flex: 1; /* lebih kecil */
  min-width: 250px;
  max-width: 400px;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.profile-card img {
  width: 100%;
  height: auto;
  max-height: 250px; /* batasi tinggi gambar */
  object-fit: cover;
}
@media (max-width: 768px) {
  .map-container, .profile-card {
    flex: 1 1 100%;
    max-width: 100%;
  }

  .map-container iframe {
    height: 350px;
  }

  .profile-card img {
    max-height: 200px;
  }
}

    .profile-card h3 {
      margin: 10px 0 5px;
      font-size: 16px;
      color: #003566;
      text-align: center;
    }

    .profile-card small {
      display: block;
      text-align: center;
      color: gray;
    }

    .profile-card p {
      padding: 0 15px 20px;
      font-size: 14px;
      color: #333;
      text-align: center;
    }

    footer {
      background-color: #121c53;
      color: #fff;
      padding-top: 40px;
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

    .footer-icon.insta { background-color: gold; }
    .footer-icon.yt { background-color: #ff6239; color: white; }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <header>
    <img src="logo.png">
    <h1>SMKN 64 Jakarta</h1>
  </header>

  <nav>
    <a href="index.php">Beranda</a>
    <a href="kontak.php">Kontak</a>
    <a href="profil.php">Profil</a>
    <a href="berita.php">Berita</a>
  </nav>

  <h2>HUBUNGI KAMI</h2>

  <div class="container">
    <!-- Peta -->
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3825111852277!2d106.90108851413849!3d-6.214679962587211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed730e4a0573%3A0xa38265d9a79a71e0!2sSMKN%2064%20Jakarta!5e0!3m2!1sid!2sid!4v1654436886583!5m2!1sid!2sid" allowfullscreen loading="lazy"></iframe>
    </div>

    <!-- Kepala Sekolah -->
    <div class="profile-card">
      <img src="kepsek.png" alt="Kepala Sekolah">
      <h3>DEWI PUSPITASARI, S.ST.PAR, M.PAR</h3>
      <small>- Kepala Sekolah -</small>
      <p>SMKN 64 Jakarta tanggap terhadap perkembangan teknologi informasi. Dengan SDM berkualitas, siap membentuk generasi unggul.</p>
      
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row" style="display:flex; flex-wrap:wrap; gap:30px; color:white; padding:20px;">
        <div style="flex:1; min-width:260px;">
          <h5 class="border-bottom pb-2">Hubungi Kami</h5>
          <p>SMKN 64 Jakarta · SUKSES (Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
          <p><strong>Alamat:</strong><br>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Cipayung, Jakarta Timur 13890</p>
          <p><strong>Telepon:</strong><br>08978891895 (Hilal)<br>081212001521 (Agus)</p>
          <p><strong>Email:</strong><br>info@smkn64-jkt.sch.id<br>info.smkn64jkt@gmail.com</p>
        </div>
        <div style="flex:1; min-width:260px;">
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
        <div style="flex:1; min-width:260px;">
          <h5 class="border-bottom pb-2">Ikuti Kami</h5>
          <div>
            <a href="#" class="footer-icon insta">IG</a>
            <a href="#" class="footer-icon yt">YT</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center py-3" style="background-color:#ff6239; text-align:center; padding:10px;">
      <small>&copy; 2020 - 2025 SMKN 64 Jakarta All rights reserved. | Powered by sekolahku.web.id</small>
    </div>
  </footer>

</body>
</html>
