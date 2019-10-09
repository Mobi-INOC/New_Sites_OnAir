<?php
session_start();
require_once('PDO.php');

if (isset($_POST['hidden_id'])) {
  date_default_timezone_set('Asia/Colombo');
  $site_name = $_POST['site_name'];
  $on_air = $_POST['on_air'];
  //$defined_by = $_SESSION['user_name'];
  $activated_by = 'INOC';
  $activated_date = date('Y-m-d H:i:s');
  $id = $_POST['hidden_id'];

  for ($count = 0; $count < count($id); $count++) {
     $data = array(
      ':site_name'   => $site_name[$count],
      ':on_air'   => $on_air[0],
      ':activated_by'   => $activated_by,
      ':activated_date'   => $activated_date,
      ':id'   => $id[$count]
    );
    $query = "
  UPDATE sites 
  SET site_name = :site_name,on_air = :on_air, activated_by = :activated_by, activated_date = :activated_date
  WHERE id = :id
  ";
  
    $statement = $connect->prepare($query);
    $statement->execute($data);
    header("Location: dashboard_INOC.php");
  }
}
