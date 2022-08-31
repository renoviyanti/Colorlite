<?php 
include 'koneksi.php';
session_start();
if($_SESSION['user_id'] == null){
  echo "<script>alert('Anda Belum Melakukan Login!!')</script>";
  header('location:admin.php');
}

$result=mysqli_query($mysqli, "SELECT * FROM users")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
		 <p><a href="tabeltanya.php">Ask Us</a></p>
		 <p><a href="upload.php">Question</a></p>
     <p><a href="user.php">Lihat soal</a></p>
     <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>