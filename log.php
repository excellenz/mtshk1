<?php

date_default_timezone_set('Asia/Jakarta');

// ini utk melihat type browser
$agent = $_SERVER['HTTP_USER_AGENT'];

// ini utk melihat script di eksekusi dari mana GET(URL)
$uri = $_SERVER['REQUEST_URI'];

// ini utk melihat IP Pengunjung
$ip = $_SERVER['REMOTE_ADDR'];

// ini utk melihat script di refer dari mana
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No Refferer';

// ini utk melihat Proxy pengunjung
$asli = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : 'No Proxy detected';

// ini utk melihat koneksi pengunjung
$via = isset($_SERVER['HTTP_VIA']) ? $_SERVER['HTTP_VIA'] : '-';

// ini variabel tanggal
$dtime = date('r');

// perhatian jika pengunjung pakai Proxy transparent
// maka $_SERVER['HTTP_X_FORWARDED_FOR'] akan menampilkan IP Asli pengunjung
// sebaliknya $_SERVER['REMOTE_ADDR'] akan menampilkan Proxy
// Untuk Lebih jelas nya tentang macam2 Proxy saya akan jelaskan di tutorial yang lain

// ini adalah deskripsi variabel entry_line:
$entry_line = "Waktu: $dtime | IP asli: $ip | Browser: $agent? | URL: $uri | Referrer: $ref | Proxy: $asli | Koneksi: $via
";// <-- perhatian!! ini harus new line alias kamu enter sekali supaya hasilnya jadi new line

// "fopen()" utk fungsi membuka file, "a" ini yg paling penting.!!,
// ini berfungsi jika file "jejak.txt" tidak ada dalam server maka PHP akan menciptakannya
$fp = fopen("log_index_".date("m-Y").".txt", "a");

// "fputs()" fungsinya utk menulis log dlm file
fputs($fp, $entry_line);

// "fclose()" fungsinya untuk menutup file
fclose($fp);

?>