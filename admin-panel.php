<?php
// Logging akses ke honeypot admin panel
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$timestamp = date('Y-m-d H:i:s');
$logEntry = "[$timestamp] IP: $ip | Agent: $agent | Akses: admin-panel.php\n";
file_put_contents('honeypot_access.log', $logEntry, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rekap Pengangkutan Sampah - Internal DLH Malang</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f1f8e9;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #33691e;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
    }

    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 1rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    h2 {
      color: #33691e;
      margin-bottom: 1rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 1rem;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 0.75rem;
      text-align: left;
    }

    th {
      background-color: #c5e1a5;
    }

    tr:nth-child(even) {
      background-color: #f9fbe7;
    }

    .footer-note {
      font-size: 0.9rem;
      color: #555;
      margin-top: 1rem;
      text-align: center;
    }

    .back-link {
      display: inline-block;
      margin-top: 1rem;
      color: #33691e;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <h1>Sistem Informasi Internal - DLH Kota Malang</h1>
    <p>Rekapitulasi Harian Pengangkutan Sampah Kota</p>
  </header>

  <div class="container">
    <h2>Data Operasional - April 2025</h2>
    <table>
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Zona</th>
          <th>Jumlah Truk</th>
          <th>Volume Sampah (m³)</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01/04/2025</td>
          <td>Klojen</td>
          <td>5</td>
          <td>125</td>
          <td>Selesai</td>
        </tr>
        <tr>
          <td>01/04/2025</td>
          <td>Lowokwaru</td>
          <td>6</td>
          <td>148</td>
          <td>Selesai</td>
        </tr>
        <tr>
          <td>02/04/2025</td>
          <td>Blimbing</td>
          <td>4</td>
          <td>110</td>
          <td>Tertunda</td>
        </tr>
        <tr>
          <td>02/04/2025</td>
          <td>Sukun</td>
          <td>7</td>
          <td>163</td>
          <td>Selesai</td>
        </tr>
        <tr>
          <td>03/04/2025</td>
          <td>Kedungkandang</td>
          <td>5</td>
          <td>132</td>
          <td>Diproses</td>
        </tr>
      </tbody>
    </table>

    <p class="footer-note">Data ini merupakan bagian dari monitoring internal Dinas Lingkungan Hidup Kota Malang.</p>
    <a href="index.php" class="back-link">← Kembali ke halaman utama</a>
  </div>

</body>
</html>
