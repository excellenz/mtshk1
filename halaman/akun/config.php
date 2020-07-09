<?php
include "function.php";
include "database.php";

$conn = new database;
$username = addslashes($_POST['username']);
$passwd = $_POST['passwd'];
// $username = '197008';
// $passwd = '250706';

if (!isset($username) || !isset($passwd))
{
	header("location: ".MAIN_URL."login.php");
}
elseif (empty($username) || empty($passwd))
{
	header("location: ".MAIN_URL."login.php");
}

else

{
	
	$hasil = $conn->getDb()->query("SELECT * FROM user WHERE user_name = '$username' AND user_password = '$passwd'");
	$data = $hasil->fetchAll();
	$rowCount = count($data);

	if ($rowCount == 1)
	{
		foreach ($data as $row)
		{
			$username = $row['user_name'];
			$sta = $row['level'];

			$log = "INSERT INTO user_log(username, status, halaman) VALUES ('$username', 'login', 'home')";
			$hasil = $conn->getDb()->query($log);

			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			$_SESSION['status'] = $sta;
			header("location: ".MAIN_URL."index.php");
		}
	}
	else
	{
		header("location: ".MAIN_URL."login.php");
	}
}
