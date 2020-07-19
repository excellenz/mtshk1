<?php
include "function.php";
include "database.php";

$data = new database();

$id = $_POST['id'];
$level_siswa = $_POST['level'];
$mapel_kode = $_POST['mapel'];
$judul = $_POST['judul_materi'];
$deskripsi = $_POST['deskripsi'];
$video = $_POST['video'];
$namaFile = $_FILES['file']['name'];
$extensionList = array ("ppt", "pptx", "pdf", "doc", "docx");
$pecah = explode (".", $namaFile);
$extensi = $pecah[1];
    
    if  ( empty($namaFile) ) {
        $query = "UPDATE `materi` SET mapel_kode='$mapel_kode', level_siswa='$level_siswa', judul='$judul', deskripsi='$deskripsi', video='$video' WHERE id = '$id'";
        $query_run = $data->getDb()->query($query);
        
        if ($query_run) {
    	header("location: ".MAIN_URL."index.php");
        }
    } elseif ( in_array ($extensi, $extensionList)) {
        $namaFile = $_FILES['file']['name'];
        $namaSementara = $_FILES['file']['tmp_name'];
        
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "asset/main/files/";
        $hasil = $dirUpload.$namaFile;
        
        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, "../".$dirUpload.$namaFile);
        
        if ($terupload) {
            $query = "UPDATE `materi` SET mapel_kode='$mapel_kode', level_siswa='$level_siswa', judul='$judul', deskripsi='$deskripsi', video='$video', file='$hasil' WHERE id = '$id'";
            $query_run = $data->getDb()->query($query);
        
            if ($query_run) {
            	header("location: ".MAIN_URL."index.php");
            }
        } else {
            echo "Upload Gagal!";
            }
    } else {
        echo "Upload gagal! Jenis file tidak diizinkan!";
    }




