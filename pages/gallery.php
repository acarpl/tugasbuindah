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
    <title>Galeri - SATOEKSKUL</title>
    <link rel="stylesheet" href="../style/styles.css">
    <style>
        .gallery-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .gallery-tabs button {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .gallery-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery-item {
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
        }
        .gallery-item img, .gallery-item video {
            width: 100%;
            border-radius: 10px;
        }
        .gallery-item h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #007bff;
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
        <h1>Galeri Ekstrakurikuler</h1>
        
        <div class="gallery-tabs">
            <button onclick="showGallery('foto')">Foto</button>
            <button onclick="showGallery('video')">Video</button>
        </div>

        <section>
            <h2>Foto</h2>
            <div class="gallery-container">
                <!-- Foto SMKN 1 Kota Bekasi -->
                <div class="gallery-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Logo_SMK_Negeri_1_Kota_Bekasi.png/1920px-Logo_SMK_Negeri_1_Kota_Bekasi.png" alt="Logo SMK Negeri 1 Kota Bekasi">
                    <h3>Logo SMKN 1 Kota Bekasi</h3>
                </div>
            </div>
        </section>

        <section>
            <h2>Video</h2>
            <div class="gallery-container">
                <!-- Video Tim Futsal SMKN 1 Kota Bekasi -->
                <div class="gallery-item">
                    <video controls>
                        <source src="https://www.youtube.com/watch?v=1" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Video Futsal SMKN 1 Kota Bekasi</h3>
                </div>
                <div class="gallery-item">
                    <video controls>
                        <source src="https://www.youtube.com/watch?v=2" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Video Futsal SMKN 1 Kota Bekasi</h3>
                </div>
                <div class="gallery-item">
                    <video controls>
                        <source src="https://www.youtube.com/watch?v=3" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Video Futsal SMKN 1 Kota Bekasi</h3>
                </div>
                <div class="gallery-item">
                    <video controls>
                        <source src="https://www.youtube.com/watch?v=4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h3>Video Futsal SMKN 1 Kota Bekasi</h3>
                </div>
            </div>

    <script>
        function showGallery(type) {
            document.getElementById('foto-gallery').style.display = type === 'foto' ? 'grid' : 'none';
            document.getElementById('video-gallery').style.display = type === 'video' ? 'grid' : 'none';
        }
    </script>
</body>
</html>