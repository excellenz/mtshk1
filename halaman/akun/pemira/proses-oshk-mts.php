<?php

include "function.php";
include "database.php";

$data = new database();

$username = $_POST['nama'];
$pilihan = $_POST['nourut'];

$query = "INSERT INTO hasil_oshk_mts (siswa_user_name, de_oshk_mts_id) VALUES ('$username', '$pilihan')";
$insert = $data->getDb()->query($query);

if ($insert) {
	header("location: ".MAIN_URL."index.php");
} else {
	echo "Gagal vote!";
}
