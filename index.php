<?php 
include 'pages/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN UTAMA SATOEKSUL</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Logo_SMK_Negeri_1_Kota_Bekasi.png/1920px-Logo_SMK_Negeri_1_Kota_Bekasi.png" alt="Logo SMKN 1 Bekasi">
            <span>SMKN NEGERI 1 KOTA BEKASI</span>
        </div>
        <ul class="nav-links">
            <li><a href="#">Beranda</a></li>
            <li class="dropdown">
                <a href="#">Profil Ekstrakurikuler</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Visi & Misi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Jadwal Ekstrakurikuler</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Olahraga</a></li>
                    <li><a href="#">Seni</a></li>
                    <li><a href="#">Keilmuan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Manajemen Ekstrakurikuler</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li><a href="#">Kepengurusan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Prestasi</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Nasional</a></li>
                    <li><a href="#">Internasional</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Galery</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Foto</a></li>
                    <li><a href="#">Video</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Hubungi Kami</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Lokasi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Akun</a>
            </li>
        </ul>
    </nav>

    <!-- HEADER -->
    <header>
    <div class="hero">
        <div class="hero-content">
            <div class="tagline">
                <h1>Selamat Datang di SATOEKSKUL</h1>
                <p>Portal Ekstrakurikuler SMKN 1 Kota Bekasi</p>
            </div>
        </div>
    </div>
</header>

    <!-- Login or Register -->
    <div class="button-container">
        <a href="pages/login.php" class="button">Login</a>
        <a href="pages/register.php" class="button">Register</a>
    </div>

    <!-- Secondary Content -->
    <div class="grid-container">
        <div class="grid-item">
            <img src="foto1.jpg" alt="Prestasi 1">
            <h3>Prestasi Ekskul 1</h3>
        </div>
        <div class="grid-item">
            <img src="foto2.jpg" alt="Prestasi 2">
            <h3>Prestasi Ekskul 2</h3>
        </div>
        <div class="grid-item">
            <img src="foto3.jpg" alt="Prestasi 3">
            <h3>Prestasi Ekskul 3</h3>
        </div>
        <div class="grid-item">
            <img src="foto4.jpg" alt="Prestasi 4">
            <h3>Prestasi Ekskul 4</h3>
        </div>
        <div class="grid-item">
            <img src="foto5.jpg" alt="Prestasi 5">
            <h3>Prestasi Ekskul 5</h3>
        </div>
        <div class="grid-item">
            <img src="foto6.jpg" alt="Prestasi 6">
            <h3>Prestasi Ekskul 6</h3>
        </div>
        <div class="grid-item">
            <img src="foto7.jpg" alt="Prestasi 7">
            <h3>Prestasi Ekskul 7</h3>
        </div>
        <div class="grid-item">
            <img src="foto8.jpg" alt="Prestasi 8">
            <h3>Prestasi Ekskul 8</h3>
        </div>
        <div class="grid-item">
            <img src="foto9.jpg" alt="Prestasi 9">
            <h3>Prestasi Ekskul 9</h3>
        </div>
    </div>

<!-- JAVASCRIPT -->
    <script src="script.js"></script>
</body>
</html>
