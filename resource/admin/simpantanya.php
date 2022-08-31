<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$inputkan = mysqli_query($mysqli, "INSERT INTO tanyakami VALUES('', '$nama', '$email', '$pesan')");
if($mysqli){
	echo'';
	include'thanks.php';
}else{
	echo'Data gagal tersimpan';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>

</body>
</html>