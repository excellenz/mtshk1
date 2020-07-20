<?php
session_start();
require "log.php";
include "database.php";
include "function.php";

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800))
{
	session_unset();
	session_destroy();
	header("location: ".MAIN_URL."config.php");
}

$_SESSION['LAST_ACTIVITY'] = time();

$data = new database;

$file = $_GET['page'];

if (!isset($_GET['id'])) {
	# code...
	$id = "";
} else {
	$id = $_GET['id'];
}


$content = $file.".php";

if (!isset($_SESSION['username']))
{
	header("location: ".MAIN_URL."config.php");
}
else
{
	$nama = $_SESSION['username'];
	$halaman = $file;
	$log = "INSERT INTO user_log(username, status, halaman) VALUES ('$nama', 'akses', '$halaman')";
	$hasil = $data->getDb()->query($log);
	require "template.php";
}

