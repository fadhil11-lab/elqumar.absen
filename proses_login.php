<?php
session_start();

$user = "admin";
$pass = "123";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal. <a href='login.html'>Coba lagi</a>";
}
?>