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
    <title>Prestasi - SATOEKSKUL</title>
    <link rel="stylesheet" href="../style/styles.css">
    <style>
      /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Main container styling */
.container {
    width: 80%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

/* Section styling */
section {
    margin-bottom: 30px;
}

h1 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
    color: #007bff;
}

h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

h3 {
    font-size: 20px;
    color: #007bff;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

/* Achievement grid */
.achievement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.achievement-card {
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.achievement-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Table styling for achievement display */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
    font-size: 16px;
}

table th {
    background-color: #007bff;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    /* Ensure cards are responsive and stack on smaller screens */
    .achievement-grid {
        grid-template-columns: 1fr;
    }
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
        <h1>Prestasi Ekstrakurikuler</h1>
        
        <section>
            <h2>Prestasi Nasional</h2>
            <div class="achievement-grid">
                <div class="achievement-card">
                    <h3>Futsal Series Region Bekasi</h3>
                    <p>Juara 2 Tahun 2023</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Prestasi Internasional</h2>
            <div class="achievement-grid">
                <div class="achievement-card">
                    <h3>EAFCMOBILE Futsal Championship</h3>
                    <p>Juara 2 Tahun 2023</p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>