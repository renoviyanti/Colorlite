<?php
include ("koneksi.php");
?>

<html>
	<head>
	<title>Tabel Soal</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
<div class="title"><img src="img/bbb.png" width="240" height="80" style="float;left;"></div>
	<center><h1>Tabel Soal</h1>
	<a href="http://localhost/buta-warna/resource/admin/homeadmin.php#"><button name="Home" class="home" value="home">Back to Home Admin</button></a>
	</center>
<br><table border="1">
	<tr>
	<th>No</th>
	<th>Soal</th>
	<th>Pilihan A</th>
	<th>Pilihan B</th>
	<th>Pilihan C</th>
	<th>Pilihan D</th>
	<th>Jawaban</th>
	<th colspan="2">Aksi</th>
	</tr>
<?php
 $result = mysqli_query($mysqli, "SELECT * FROM images");

    while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
	<td><p><?php echo $row['id'];?></p></td>
	<td><img src="images/<?php echo $row['image'];?>" height="100" width="100"></td>
    <td><p><?php echo $row['jawab_a'];?></p></td>
    <td><p><?php echo $row['jawab_b'];?></p></td>
    <td><p><?php echo $row['jawab_c'];?></p></td>
    <td><p><?php echo $row['jawab_d'];?></p></td>
    <td><p><?php echo $row['jawaban'];?></p></td>
<!--	<td><a href='editsoal.php?id=<?php $row['id'];?>'>Edit</a></td> -->
	<td><a href='hapussoal.php?id=<?php echo $row['id'];?>'>Delete</a></td>
	</tr>
<?php }
?>
</table>
</body>
</html>