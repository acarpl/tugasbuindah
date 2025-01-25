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
    <title>Hubungi Kami - SATOEKSKUL</title>
    <link rel="stylesheet" href="../style/styles.css">
    <style>
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        .contact-form, .contact-info {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
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
        <h1>Hubungi Kami</h1>
        
        <div class="contact-grid">
            <div class="contact-form">
                <h2>Kirim Pesan</h2>
                <form>
                    <input type="text" placeholder="Nama" required>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Pesan Anda" rows="5" required></textarea>
                    <button type="submit" class="button">Kirim Pesan</button>
                </form>
            </div>

            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                <p>Alamat: Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134</p>
                <p>Telepon: (021) 88951151</p>
                <p>Email: info@smkn1bekasi.sch.id</p>
            </div>
        </div>
    </div>
</body>
</html>