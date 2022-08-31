<?php
include("koneksi.php");
?>
<html>
<head>
	<title>Ask Us</title>
	<link rel="stylesheet" type="text/css" href="tabeltanya.css">
</head>
<body>
<div class="title"><img src="img/bbb.png" width="240" height="80" style="float;left;"></div>
	<p>
	<center><h1 class="ask">Ask Us</h1>
	<a href="http://localhost/buta-warna/resource/admin/homeadmin.php#"><button name="Home" class="home" value="home">Back to Home Admin</button></a>
	</center>
</body>
<br><br><table border="1">
	<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Pesan</th>
	</tr>
	</html>
<?php
$inputkan= mysqli_query($mysqli, "SELECT * FROM tanyakami");
while ($data = mysqli_fetch_assoc($inputkan)){
?>

<tr>
	<td><?php echo $data ['idtanya'] ?></td>
	<td><?php echo $data['nama'] ?></td>
	<td><?php echo $data['email'] ?></td>
	<td><?php echo $data ['pesan'] ?></td>
</tr>

<?php
	}
?>

</table>