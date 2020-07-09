<?php 
include "database.php";
include "function.php";

$data = new database;

$hasil = $data->getDb()->query("SELECT * FROM mapel");
$mapel = $hasil->fetchAll();

//print_r($mapel);

?>

<form method="post" action="#">
	<label>Pilih Kelas</label>
	<select name="level">
		<option value="7">7</option>
		<option value="8">8</option>
	</select>
	<label>Pilih Mapel</label>
	<select name="mapel">
		<?php 
			foreach ($mapel as $m) :
		?>
		<option value="<?= $m['id']; ?>"><?= $m['nama']; ?></option>
		<?php 
			endforeach;
		?>
	</select>
	<label>Judul Materi:</label><input type="text" name="judul" />
	<label>Deskripsi singkat:</label><input type="textarea" name="deskripsi">
	<label>Video:</label><input type="text" name="video" />
	<label>Upload File Materi:</label><input type="text" name="judul" />
</form>