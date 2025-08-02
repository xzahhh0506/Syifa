<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda & Profil - SMKN 64 Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
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
    nav a:hover { background-color: #003566; }
    .banner {
  background: url('https://smkn64-jkt.sch.id/uploads/images/profil-sekolah.jpg') center/cover no-repeat;
  height: 260px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #000; /* ubah dari putih ke hitam */
  text-shadow: none; /* hilangkan efek bayangan */
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 30px;
}

    .container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      gap: 30px;
      padding: 0 20px 40px;
      flex-wrap: wrap;
    }
    .left {
      flex: 2;
      background: #fff;
      border: 1px solid #cbd5e0;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .left h2 {
      color: #003566;
      margin-bottom: 15px;
      font-size: 20px;
      border-bottom: 2px solid #cbd5e0;
      padding-bottom: 8px;
    }
    .left p, .left ol {
      margin-bottom: 12px;
    }
    .left strong {
      display: inline-block;
      width: 180px;
      font-weight: 600;
    }
    .left ol {
      margin-left: 20px;
    }
    .right {
      flex: 1;
      min-width: 280px;
    }
    .card {
      background: #fff;
      border: 1px solid #cbd5e0;
      border-radius: 6px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      overflow: hidden;
      text-align: center;
    }
    .card img {
      width: 100%;
      height: auto;
    }
    .card h3 {
      font-size: 16px;
      margin: 15px 0 5px;
      color: #003566;
    }
    .card small {
  display: block;
  margin-bottom: 15px;
  color: #000; /* warna hitam */
}

    .card p {
      padding: 0 15px 15px;
      font-size: 14px;
      color: #444;
    }
    .card a {
      display: block;
      background: #003566;
      color: #fff;
      text-decoration: none;
      padding: 12px;
      font-weight: 600;
      transition: background 0.3s;
    }
    .card a:hover {
      background: #001d3d;
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
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
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
    <a href="profil.php">Profil</a>
    <a href="berita.php">Berita</a>
    <a href="kontak.php">Kontak</a>
  </nav>

  <div class="banner">
    Selamat Datang di SMKN 64 Jakarta
  </div>

  <div class="container">
    <!-- Bagian Profil (kiri) -->
    <div class="left">
      <h2>Profil SMK Negeri 64 Jakarta</h2>
      <p><strong>Alamat:</strong> Jl. Mpo Nori RT 09 RW 03, Kel. Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, DKI Jakarta</p>
      <p><strong>E-Mail:</strong> info@smkn64-jkt.sch.id</p>
      <p><strong>NPSN:</strong> 69992315</p>
      <p><strong>Nama Pengawas:</strong> Drs. H. Ismail, M.Pd. (<em>NIP 196510101990021002</em>)</p>
      <p><strong>Kepala Sekolah:</strong> Dewi Puspitasari, M.Par. (<em>NIP 197102061995022002</em>)</p>
      <h2 style="margin-top: 25px;">Identitas & Kompetensi</h2>
      <p>SMKN 64 Jakarta adalah sekolah kejuruan berbasis teknologi informasi dengan 2 kompetensi unggulan:</p>
      <ol>
        <li>Rekayasa Perangkat Lunak (RPL)</li>
        <li>Desain Komunikasi Visual (DKV)</li>
      </ol>
      <p>Berdiri sejak 2019, SMKN 64 Jakarta menjaring lulusan SMP berminat kejuruan teknologi dan informasi.</p>
      <p>Rekayasa Perangkat Lunak (RPL) adalah jurusan yang berfokus pada pengembangan perangkat lunak, mencakup analisis, desain, pembuatan, pengujian, dan pemeliharaan aplikasi atau sistem berbasis teknologi. Jurusan ini sesuai bagi siswa yang tertarik dengan dunia pemrograman, teknologi, dan inovasi digital. Adapun mata pelajaran yang dipelajari dalam jurusan ini berupa Pemograman, Basis Data, Konsentrasi Keahlian RPL, Dasar-dasar PPLG, dan mapel pilihan RPL Perangkat Lunak Desain.</p>
      <p>Desain Komunikasi Visual (DKV) adalah jurusan yang menggabungkan seni, komunikasi, dan teknologi untuk menciptakan karya visual yang menarik dan bermakna. Jurusan ini sesuai untuk siswa yang memiliki kreativitas tinggi dan minat dalam desain, ilustrasi, fotografi, animasi, serta media digital. Adapun mata pelajaran yang dipelajari dalam jurusan DKV adalah Dasar-dasar DKV, Konsentrasi Keahlian DKV, mapel pilihan DKV Pemograman Web, dan Desain Brief.</p>
      <p>SMKN 64 Jakarta menyediakan berbagai fasilitas penunjang pendidikan bagi anak didiknya seperti laboratorium komputer, lapangan basket, perpustakaan, mushola, ruang tunggu siswa dan lainnya. SMKN 64 juga didukung oleh kehadiran guru-guru dengan kualitas terbaik di bidangnya.</p>
      <p>Kegiatan di sekolah ini juga beragam seperti Festival P5, Jumat Literasi, Jumat Sehat, Senin Dialog, Salat Zuhur Berjamaah, dan kegiatan siswa lainnya. Kegiatan ini rutin diselenggarakan secara bergilir setiap minggunya.</p>
      <p>Proses belajar dibuat senyaman mungkin bagi murid dan guru. Menjadi lembaga Pendidikan kejuruan yang mampu menghasilkan tenaga terampil sesuai standar global. Fokus pada kualitas, kurikulum, dan pembelajaran yang berbasis kompetensi. Mengembangkan profesionalisme dengan penguasaan bahasa asing dan disiplin tinggi. Menjawab tuntutan perusahaan akan tenaga trampil yang memiliki standar profesionalisme yang tinggi.</p>
    </div>

    <!-- Kartu Kepala Sekolah (kanan) -->
    <div class="right">
      <div class="card">
        <img src="kepsek.png">
        <h3>DEWI PUSPITASARI, S.ST.PAR, M.PAR</h3>
        <small>- Kepala Sekolah -</small>
        <p>SMKN 64 Jakarta tanggap terhadap perkembangan teknologi informasi. Dengan SDM berkualitas, siap membentuk generasi unggul.</p>
        <a href="kepala_sekolah.php">SELENGKAPNYA</a>
      </div>
    </div>
  </div>

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


  <script>
    // Shadow header saat scroll
    window.addEventListener('scroll', () => {
      document.querySelector('header').style.boxShadow = window.scrollY > 20
        ? '0 2px 8px rgba(0,0,0,0.2)'
        : 'none';
    });
  </script>
</body>
</html>
