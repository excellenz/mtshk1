<?php

error_reporting(1);

$url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$url .= "://".$_SERVER['HTTP_HOST'];
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

define('MAIN_URL', $url);

function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

function awal_smt()
{
	if (date('m') > 6) {
		# code...
		$smt = 1;
	} else {
		# code...
		$smt = 2;
	}
	
	if ($smt == 1) {
		# code...
		$tahun = date('Y');
		$bulan = 07;
		return date('Y-m-d', strtotime('first day of '.$tahun.'-'.$bulan));
	} else {
		# code...
		$tahun = date('Y');
		$bulan = 01;
		return date('Y-m-d', strtotime('first day of '.$tahun.'-'.$bulan));
	}
	
}

function smt()
{
	$awal = awal_smt();
	$split = explode("-", $awal);
	if ($split[1] < 7) {
		return "Genap";
	}
	else {
		return "Ganjil";
	}
}

function tampil_level($lev)
{

	switch ($lev)
	{
	case "id" :
	    return "IDAD";
	    break;
	case "xa" :
	    return "X-IPA";
	    break;
	case "xs" :
	    return "X-IPS";
	    break;
	case "xk" :
	    return "X-PK";
	    break;
	case "xia" :
	    return "XI-IPA";
	    break;
	case "xis" :
	    return "XI-IPS";
	    break;
	case "xik" :
	    return "XI-PK";
	    break;
	case "xiia" :
	    return "XII-IPA";
	    break;
	case "xiis" :
	    return "XII-IPS";
	    break;
	case "xiik" :
	    return "XII-PK";
	    break;
	default :
	    return "N.A.";
	    break;
	}
}

function detail_kelas($kelas)
{
	$level = ['X' => 'X (Sepuluh)', 'XI' => 'XI (Sebelas)', 'XII' => 'XII (Dua belas)'];
	$program = ['IPA' => 'Matematika dan Ilmu Alam', 'IPS' => 'Ilmu-ilmu Sosial', 'PK' => 'Ilmu-ilmu Keagamaan'];
	$pecah = explode(" ", $kelas);

	$rinci = $level[$pecah[0]]."/".$program[$pecah[1]]."/".$pecah[2];

	$detail = explode("/", $rinci);

	return $detail;

}
