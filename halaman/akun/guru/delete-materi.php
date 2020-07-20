<?php

require "log.php";
include "function.php";
include "database.php";

$data = new database();

$id = $_GET['id'];
$tampil_materi = $data->getDb()->query("SELECT * FROM materi WHERE id = $id");
$tampil = $tampil_materi->fetchAll();

foreach ($tampil as $t) {
    $id = $t['id'];
    $kode = $t['mapel_kode'];
    $level = $t['level_siswa'];
    $judul = $t['judul'];
    $deskripsi = $t['deskripsi'];
    $video = $t['video'];
    $datafile = $t['file'];
    $file = "../".$datafile;
    
    if ( file_exists($file) ) {
        unlink($file);
        $query = $data->getDb()->query("DELETE FROM materi WHERE id = $id");
        if ($query) {
            header("location: ".MAIN_URL."index.php");
        } else {
            echo "Gagal menghapus data..";
        }
    } else {
        $query = $data->getDb()->query("DELETE FROM materi WHERE id = $id");
        if ($query) {
            header("location: ".MAIN_URL."index.php");
        } else {
            echo "Gagal menghapus data..";
        }
    }
}
