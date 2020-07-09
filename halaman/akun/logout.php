<?php
session_start();
include "database.php";
include "function.php";
$absen = new database;
$nama = $_SESSION['username'];

$log = "INSERT INTO user_log(username, status, halaman) VALUES ('$nama', 'logout', 'logout')";
$hasil = $absen->getDb()->query($log);

unset($_SESSION['username']);
session_destroy();
header("location: https://mtshakadua.sch.id/index.php");