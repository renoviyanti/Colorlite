<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "butawarna");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$jawab_a = mysqli_real_escape_string($db, $_POST['jawab_a']);
	$jawab_b = mysqli_real_escape_string($db, $_POST['jawab_b']);
	$jawab_c = mysqli_real_escape_string($db, $_POST['jawab_c']);
	$jawab_d = mysqli_real_escape_string($db, $_POST['jawab_d']);
	$jawaban = mysqli_real_escape_string($db, $_POST['jawaban']);
	  
  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, jawab_a, jawab_b, jawab_c, jawab_d, jawaban) VALUES ('$image', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$jawaban')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Soal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<br>
	  	<div class="form-wrapper">
	  <center><h2 class="judul">Add New Question</h2>
		 <form method="POST" action="upload.php" enctype="multipart/form-data">
		 <input type="file" name="image">
  		<input type="hidden" name="size" value="1000000">
	<input type="hidden" name="id">
	<p><label>Pilihan A</label><br>
	<input type="text" name="jawab_a">
	<br>
	<br>
	<label>Pilihan B</label><br>
	<input type="text" name="jawab_b">
	<br>
	<br>
	<label>Pilihan C</label><br>
	<input type="text" name="jawab_c">
	<br>
	<br>
	<label>Pilihan D</label><br>
	<input type="text" name="jawab_d">
	<br>
	<br>
	<label>Jawaban</label><br>
	<input type="text" name="jawaban" >
	<div class="button-panel">
  		<button type="submit" name="upload">POST</button>
		<a href="http://localhost/buta-warna/resource/admin/homeadmin.php"><button name="Home" class="home" value="home">Cancel</button></a>
  	</div>
	<br>
	</center>	
  </form>
  </div>  

</body>
</html>