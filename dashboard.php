<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <h2>Selamat datang Admin!</h2>
  <p><a href="tambah_karyawan.php">Tambah Data Karyawan</a></p>
  <p><a href="logout.php">Logout</a></p>
</body>
</html>