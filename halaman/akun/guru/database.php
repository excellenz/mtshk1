<?php

/**
* 
*/
include "env.php";

class database
{
	
	public function getDb()
	{
		$dbh = new PDO('mysql:host=localhost;dbname='.DB_DATABASENAME, DB_DATABASEUSER, DB_DATABASEPASS);
		return $dbh;
	}

	public function tampilMapel ($id)
	{
		# code...
		$hasil = $this->getDb()->query("SELECT * FROM mapel WHERE id = '$id'");
		$result = $hasil->fetchAll();

		return $result;
	}

	public function tampilMateribyGuru($username)
	{
		$hasil = $this->getDb()->query("SELECT materi.id as id, materi.judul as materi, mapel.nama AS nama_mapel, guru_mapel.guru_username AS usernameguru FROM materi, mapel, guru_mapel WHERE materi.mapel_kode = mapel.kode AND mapel.kode = guru_mapel.mapel_kode AND guru_mapel.guru_username = '$username'");
		$result = $hasil->fetchAll();

		return $result;
	}

	public function tampilMateribyMapel($kode)
	{
		$hasil = $this->getDb()->query("SELECT * FROM materi WHERE mapel_kode = '$kode'");
		$result = $hasil->fetchAll();

		return $result;
	}

	public function tampilGuru($id)
	{
		# code...
		$hasil = $this->getDb()->query("SELECT * FROM guru WHERE username = '$id'");
		$result = $hasil->fetchAll();

		return $result;
	}

	public function tampilGuruMapel($id)
	{
		# code...
		$hasil = $this->getDb()->query("SELECT guru.nama AS guru, mapel.nama AS mapel FROM guru, guru_mapel, mapel WHERE guru.username = guru_mapel.guru_username AND guru_mapel.mapel_kode = mapel.kode AND guru.username = '$id'");
		$result = $hasil->fetchAll();

		return $result;
	}

}
