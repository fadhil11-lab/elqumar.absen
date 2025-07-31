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
  <title>Form Karyawan</title>
</head>
<body>
  <h2>Tambah Karyawan</h2>
  <form action="simpan_karyawan.php" method="POST">
    Nama: <input type="text" name="nama"><br><br>
    Jabatan: <input type="text" name="jabatan"><br><br>
    Alamat: <input type="text" name="alamat"><br><br>
    No HP: <input type="text" name="no_hp"><br><br>
    <button type="submit">Simpan</button>
  </form>
</body>
</html>