<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Ekstrakurikuler - SATOEKSKUL</title>
    <link rel="stylesheet" href="../style/styles.css">
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    table thead {
        background-color: #007BFF;
        color: white;
    }
    table th, table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table tr:hover {
        background-color: #e6f2ff;
        transition: background-color 0.3s ease;
    }
    .schedule-section {
        margin-bottom: 30px;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .tambah-jadwal-section {
    margin-top: 30px;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.form-group {
    margin-bottom: 15px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
}
.form-group input, 
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #007BFF;
    border-radius: 5px;
}
</style>                
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Logo_SMK_Negeri_1_Kota_Bekasi.png/1920px-Logo_SMK_Negeri_1_Kota_Bekasi.png" alt="Logo SMKN 1 Bekasi">
        <span>SMKN NEGERI 1 KOTA BEKASI</span>
    </div>
    <ul class="nav-links">
        <li><a href="dashboard.php">Beranda</a></li>
        <li class="dropdown">
            <a href="#">Profil Ekstrakurikuler</a>
            <ul class="dropdown-menu">
                <li><a href="profil_ekstrakurikuler.php?section=sejarah">Sejarah</a></li>
                <li><a href="profil_ekstrakurikuler.php?section=visi-misi">Visi & Misi</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Jadwal Ekstrakurikuler</a>
            <ul class="dropdown-menu">
                <li><a href="jadwal_ekstrakurikuler.php?kategori=olahraga">Olahraga</a></li>
                <li><a href="jadwal_ekstrakurikuler.php?kategori=seni">Seni</a></li>
                <li><a href="jadwal_ekstrakurikuler.php?kategori=keilmuan">Keilmuan</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Manajemen Ekstrakurikuler</a>
            <ul class="dropdown-menu">
                <li><a href="manajemen_ekstrakurikuler.php?section=struktur">Struktur Organisasi</a></li>
                <li><a href="manajemen_ekstrakurikuler.php?section=kepengurusan">Kepengurusan</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Prestasi</a>
            <ul class="dropdown-menu">
                <li><a href="prestasi.php?kategori=nasional">Nasional</a></li>
                <li><a href="prestasi.php?kategori=internasional">Internasional</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Galery</a>
            <ul class="dropdown-menu">
                <li><a href="gallery.php?tipe=foto">Foto</a></li>
                <li><a href="gallery.php?tipe=video">Video</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Hubungi Kami</a>
            <ul class="dropdown-menu">
                <li><a href="kontak.php?section=kontak">Kontak</a></li>
                <li><a href="kontak.php?section=lokasi">Lokasi</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="logout.php">Logout</a>
        </li>
    </ul>
</nav>

    <div class="container">
        <h1>Jadwal Ekstrakurikuler</h1>

        <div class="schedule-section">
            <h2 id="olahraga">Olahraga</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ekstrakurikuler</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Futsal Satoe</td>
                        <td>Senin & Kamis</td>
                        <td>15:30 - 17:00</td>
                        <td>Lapangan Sekolah</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="schedule-section">
            <h2 id="seni">Seni</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ekstrakurikuler</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Band Satoe</td>
                        <td>Selasa</td>
                        <td>16:00 - 18:00</td>
                        <td>Ruang Musik</td>
                    </tr>
                    <tr>
                        <td>Tari Tradisional</td>
                        <td>Rabu</td>
                        <td>14:00 - 16:00</td>
                        <td>Ruang Seni</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="schedule-section">
            <h2 id="keilmuan">Keilmuan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ekstrakurikuler</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Club Neracode</td>
                        <td>Sabtu</td>
                        <td>10:00 - 14:00</td>
                        <td>Laboratorium RPL</td>
                    </tr>
                    <tr>
                        <td>Klub Inggris</td>
                        <td>Kamis</td>
                        <td>14:00 - 16:00</td>
                        <td>Laboratorium Bahasa</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tambah-jadwal-section">
    <h2>Tambah Jadwal Baru</h2>
    <?php 
    if (isset($success_message)) {
        echo "<p style='color: green;'>$success_message</p>";
    }
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama Ekstrakurikuler</label>
            <input type="text" name="ekstrakurikuler" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" required>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
                <option value="Keilmuan">Keilmuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Hari</label>
            <select name="hari" required>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
            </select>
        </div>
        <div class="form-group">
            <label>Waktu Mulai</label>
            <input type="time" name="waktu_mulai" required>
        </div>
        <div class="form-group">
            <label>Waktu Selesai</label>
            <input type="time" name="waktu_selesai" required>
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" required>
        </div>
        <button type="submit" name="tambah_jadwal" class="button">Tambah Jadwal</button>
    </form>
</div>
</body>
</html>
