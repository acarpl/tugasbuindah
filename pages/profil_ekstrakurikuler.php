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
    <title>Profil Ekstrakurikuler - SATOEKSKUL</title>
    <style>/* Reset default margin and padding */
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

ul {
    list-style-type: square;
    margin-left: 20px;
    font-size: 16px;
}

ul li {
    margin-bottom: 8px;
}


/* Responsive design */
@media (max-width: 768px) {
     h1, h2, h3 {
        text-align: center;
    }
}
</style>
    <link rel="stylesheet" href="../style/styles.css">
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
        <h1>Profil Ekstrakurikuler</h1>
        
        <section>
            <h2>Sejarah Ekstrakurikuler</h2>
            <p>Sebagai pendiri ekstrakurikuler pertama di SMK Negeri 1 Kota Bekasi, saya merasa sangat bersemangat dan bangga bisa berkontribusi dalam menciptakan suatu wadah kegiatan yang bermanfaat bagi para siswa. Semua dimulai dengan ide sederhana: menciptakan ruang bagi para siswa untuk mengembangkan potensi diri mereka di luar kegiatan akademik yang padat.

Pada awalnya, sekolah kami tidak memiliki banyak pilihan ekstrakurikuler. Kami menyadari bahwa siswa tidak hanya membutuhkan ilmu dari buku pelajaran, tetapi juga pengalaman yang dapat membentuk karakter, keterampilan, dan bahkan kecintaan mereka terhadap bidang tertentu. Saya percaya bahwa setiap siswa memiliki bakat unik yang perlu digali, dan ekstrakurikuler adalah platform terbaik untuk itu.

Pada tahun pertama, saya memulai dengan mengumpulkan beberapa teman guru yang memiliki visi serupa. Kami berdiskusi tentang apa yang bisa ditawarkan kepada para siswa—mulai dari olahraga, seni, hingga teknologi. Tidak mudah memang, karena kami harus memulai dari nol, tetapi kami percaya bahwa semangat kami akan menarik minat siswa untuk ikut serta.

Dengan modal semangat dan sedikit sumber daya, kami memulai beberapa program, seperti klub sepak bola dan klub seni. Semua kegiatan ini dirancang agar para siswa bisa belajar sambil bersenang-senang, menumbuhkan rasa kebersamaan, dan yang paling penting, mengembangkan keterampilan baru. Kami melibatkan siswa dalam perencanaan dan pelaksanaan kegiatan, sehingga mereka merasa memiliki bagian dalam keberhasilan setiap program yang ada.

Prosesnya tidak selalu mulus. Ada banyak tantangan yang harus kami hadapi, mulai dari kekurangan fasilitas hingga kesulitan mencari pelatih atau pembimbing yang memiliki komitmen yang sama. Namun, dengan semangat juang dan keyakinan bahwa ini adalah sesuatu yang baik untuk masa depan siswa, perlahan-lahan ekstrakurikuler di SMK Negeri 1 Kota Bekasi mulai dikenal. Siswa-siswa mulai antusias bergabung, dan kami melihat perubahan yang luar biasa dalam diri mereka—baik dari segi keterampilan, rasa percaya diri, maupun kedisiplinan.

Kini, setelah beberapa tahun berjalan, saya melihat ekstrakurikuler yang kami bangun tidak hanya berkembang, tetapi juga menciptakan budaya positif di sekolah. Banyak siswa yang berhasil meraih prestasi di tingkat lokal hingga nasional, berkat dedikasi dan kerja keras yang mereka lakukan di luar jam pelajaran. Saya sangat bersyukur bisa menjadi bagian dari perjalanan ini dan melihat bagaimana ekstrakurikuler menjadi salah satu aspek penting dalam perkembangan para siswa.

Menciptakan ekstrakurikuler pertama di SMK Negeri 1 Kota Bekasi adalah pengalaman yang sangat berarti bagi saya. Saya berharap kegiatan ini terus berkembang, menjadi semakin beragam, dan mampu memberikan dampak yang lebih besar bagi siswa di masa depan. Dengan semangat yang terus berkobar, saya yakin bahwa prestasi dan potensi luar biasa dari para siswa akan terus terwujud melalui kegiatan ekstrakurikuler yang mereka ikuti.</p>
        </section>

        <section>
    <h2>Visi & Misi</h2>

    <h3>Visi</h3>
    <p>Visi ekstrakurikuler SMKN 1 Kota Bekasi adalah menciptakan wadah bagi siswa untuk mengembangkan potensi diri, memperkuat karakter, dan mempersiapkan mereka menjadi individu yang kompeten, berintegritas, serta siap menghadapi tantangan global di dunia profesional. Kami berkomitmen untuk menciptakan ekstrakurikuler yang inovatif, inklusif, dan berorientasi pada pengembangan keterampilan yang bermanfaat bagi kehidupan siswa baik di dalam maupun di luar dunia pendidikan.</p>

    <h3>Misi</h3>
    <ul>
        <li>Menyediakan berbagai kegiatan ekstrakurikuler yang dapat mengembangkan potensi siswa di berbagai bidang seperti olahraga, seni, dan keilmuan.</li>
        <li>Mendorong siswa untuk aktif berpartisipasi dalam kegiatan yang dapat meningkatkan kemampuan sosial, kepemimpinan, dan keterampilan lainnya.</li>
        <li>Membangun semangat kebersamaan dan kedisiplinan melalui pembinaan yang berkelanjutan, untuk mencetak siswa yang berprestasi, berkarakter, dan siap menghadapi tantangan masa depan.</li>
    </ul>
</section>

    </div>
</body>
</html>