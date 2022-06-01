<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010105";
$db = "klinik_312010105";
$conn = mysqli_connect("$host","$user","$pass","$db");

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();
}	
?>

