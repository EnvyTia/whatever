<?php
// Logging akses ke honeypot
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$timestamp = date('Y-m-d H:i:s');
$logEntry = "[$timestamp] IP: $ip | Agent: $agent | Akses: index.php\n";
file_put_contents('honeypot_access.log', $logEntry, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dinas Lingkungan Hidup Kota Malang</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f0f4f8;
      color: #333;
    }

    header {
      background-color: #004d40;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header img {
      height: 50px;
    }

    nav {
      background-color: #00695c;
      display: flex;
      justify-content: center;
    }

    nav a {
      color: white;
      padding: 1rem;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      background-color: #004d40;
    }

    .hero {
      background: url('malang-green.jpg') no-repeat center center/cover;
      color: white;
      padding: 4rem 2rem;
      text-align: center;
    }

    .hero h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 1rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    section {
      margin-bottom: 2rem;
    }

    section h2 {
      color: #004d40;
    }

    footer {
      background-color: #004d40;
      color: white;
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
    }

    .footer-link {
      display: block;
      font-size: 0.8rem;
      color: #ccc;
      text-decoration: none;
      margin-top: 0.3rem;
    }

    .footer-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <div>
      <img src="./images/pemkot.png" alt="Logo Pemkot Malang">
    </div>
    <h1>Dinas Lingkungan Hidup Kota Malang</h1>
  </header>

  <nav>
    <a href="index.php">Beranda</a>
    <a href="#">Berita</a>
    <a href="#">Layanan</a>
    <a href="#">Informasi Publik</a>
    <a href="#">Kontak</a>
  </nav>

  <div class="hero">
    <h1>Menuju Kota Malang yang Bersih, Sehat dan Lestari</h1>
    <p>Pelayanan dan pengelolaan lingkungan hidup yang berkelanjutan.</p>
  </div>

  <div class="container">
    <section>
      <h2>📢 Pengumuman Terkini</h2>
      <ul>
        <li>🌿 Program Adopsi Pohon dibuka untuk masyarakat umum sampai 30 Juni 2025.</li>
        <li>🛠️ Jadwal pengangkutan sampah rumah tangga mengalami penyesuaian mulai minggu depan.</li>
        <li>📄 Formulir Permohonan Izin Lingkungan versi terbaru sudah tersedia.</li>
      </ul>
    </section>

    <section>
      <h2>🌱 Layanan Kami</h2>
      <ul>
        <li>Pelaporan pencemaran air dan udara</li>
        <li>Permohonan penebangan pohon dengan izin</li>
        <li>Pengajuan Sertifikasi Pengelolaan Limbah</li>
        <li>Pengaduan lingkungan berbasis masyarakat</li>
      </ul>
    </section>
  </div>

  <footer>
    &copy; 2025 Dinas Lingkungan Hidup Kota Malang  
    <br>
    <a href="access-panel.php" class="footer-link">Sistem informasi internal</a>
  </footer>

</body>
</html>
