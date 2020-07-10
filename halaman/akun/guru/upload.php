<?php
include "function.php";
include "database.php";

$data = new database();
$username = $_POST['username'];
$level_siswa = $_POST['level'];
$mapel_kode = $_POST['mapel'];
$judul = $_POST['judul_materi'];
$deskripsi = $_POST['deskripsi'];
$video = $_POST['video'];
$namaFile = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "asset/main/files/";
$hasil = $dirUpload.$namaFile;

// pindahkan file
$terupload = move_uploaded_file($namaSementara, "../".$dirUpload.$namaFile);

if ($terupload) {
    $query = "INSERT INTO materi (mapel_kode, guru_username, level_siswa, judul, deskripsi, video, file) VALUES ('$mapel_kode', '$username', '$level_siswa', '$judul', '$deskripsi', '$video', '$hasil')";
    $query_run = $data->getDb()->query($query);

    if ($query_run) {
    	header("location: ".MAIN_URL."index.php");
    }
} else {
    echo "Upload Gagal!";
}


