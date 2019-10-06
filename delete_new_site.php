<?php
require_once ('connect.php');

$id = $_GET['id']; // $id is now defined


mysqli_query($con,"DELETE FROM sites WHERE id='".$id."' AND `status`='pending..'");

  mysqli_close($con);
  header("Location: dashboard.php");
?> 