<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'onairdb';

$con = new mysqli($hostname,$username,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
