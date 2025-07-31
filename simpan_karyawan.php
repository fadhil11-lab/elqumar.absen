<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}

$koneksi = new mysqli("localhost", "root", "", "db_karyawan");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO karyawan (nama, jabatan, alamat, no_hp) 
        VALUES ('$nama', '$jabatan', '$alamat', '$no_hp')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil disimpan. <a href='dashboard.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>