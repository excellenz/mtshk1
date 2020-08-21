<?php
date_default_timezone_set('Asia/Jakarta');
echo "a".date('d-m-Y  h:i a');
echo "<br>";
$now = strtotime("22-08-2020 01:10 am");
$konv = date('d-m-Y  h:i a', $now);
echo "b".$konv;
if (date('d-m-Y  h:i a') > $konv) {
	# code...
	echo "<br>OK";
} else {
	echo "<br>NO";
}