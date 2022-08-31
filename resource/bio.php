<?php
include "../db/conn.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/biobaru.css">
  <link rel="shortcut icon" type="images" href="../assets/img/lg.png">
  <script src="main.js"></script>
</head>

<body>
  <form action="bio.php" method="POST">
  <div class="title"><img src="../assets/img/bbb.png" width="240" height="80" ></div>
    <div class="hallo"> 
      <!-- <h1><?php echo $_SESSION['user']?></h1> -->
            <h3>Hey You!</h3>
      <div class="form-item">
        <input type="text" name="user" placeholder="Write Your Name...." autofocus required="required" data-validation-required-message="Please enter your name.">
      </div>

      <div class="button-panel">
        <a href="Start.php"><button type="submit" class="button" name="Submit" value="Submit" >Submit</button></a>
      </div>
    </div>
  </form>
  <?php
    if(isset($_POST['Submit'])){
      $user = $_POST['user'];
      $_SESSION['user'] = $user;
      echo "<script>window.open('Start.php','_self')</script>";
    }
  ?>
</body>

</html>