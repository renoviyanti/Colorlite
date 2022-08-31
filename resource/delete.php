<?php
session_start();
session_destroy();
echo "<script>window.open('bio.php','_self')</script>";
?>