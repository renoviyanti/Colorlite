<?php

/**
 * using mysqli_connect for database connection
 */
 //
// session_start();
$databaseHost = 'localhost';
$databaseName = 'butawarna';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
error_reporting(0);
?>