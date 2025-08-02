<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "website_syifa");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM berita WHERE id = $id");
    header("Location: admin_berita.php");
    exit;
}

if (isset($_POST['tambah'])) {
    $judul = $conn->real_escape_string($_POST['judul']);
    $isi = $conn->real_escape_string($_POST['isi']);
    $tanggal = $_POST['tanggal'];
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    if (!empty($gambar)) {
        move_uploaded_file($tmp_name, "uploads/" . $gambar);
    }

    $conn->query("INSERT INTO berita (judul, isi, tanggal, gambar) 
                  VALUES ('$judul', '$isi', '$tanggal', '$gambar')");
    header("Location: admin_berita.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #ffffff);
            padding: 40px 20px;
        }

        .container {
            max-width: 1080px;
            margin: auto;
        }

        h2 {
            color: #003566;
            font-weight: 700;
        }

        .btn-primary {
            background-color: #003566;
            border: none;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #002855;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #b52a37;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .card-header {
            background-color: #003566;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }

        .table th {
            background-color: #003566;
            color: white;
            vertical-align: middle;
        }

        .table td {
            vertical-align: middle;
            background-color: #f8f9fa;
        }

        img.preview {
            width: 100px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .welcome-text {
            font-size: 1rem;
            color: #333;
        }

        .logout-link {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-bar">
        <div>
            <h2>Kelola Berita</h2>
            <p class="welcome-text">Halo, <strong><?= htmlspecialchars($_SESSION['user']) ?></strong> 👋</p>
        </div>
        <div>
            <a href="logout.php" class="btn btn-danger btn-sm logout-link">Logout</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">📝 Tambah Berita Baru</div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">+ Tambah Berita</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">📰 Daftar Berita</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $berita = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
                    while ($b = $berita->fetch_assoc()):
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($b['judul']) ?></td>
                            <td><?= nl2br(htmlspecialchars(substr($b['isi'], 0, 100))) ?>...</td>
                            <td><?= htmlspecialchars($b['tanggal']) ?></td>
                            <td>
                                <?php if (!empty($b['gambar'])): ?>
                                    <img src="uploads/<?= htmlspecialchars($b['gambar']) ?>" class="preview">
                                <?php else: ?>
                                    <span class="text-muted">Tidak ada</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="admin_berita.php?hapus=<?= $b['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
