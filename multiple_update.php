<?php
session_start();
require_once ('PDO.php');

if(isset($_POST['hidden_id']))
{
date_default_timezone_set('Asia/Colombo'); 
 $status = $_POST['status'];
 $status_remark = $_POST['status_remark'];
 //$defined_by = $_SESSION['user_name'];
 $defined_by = 'RO';
 $defined_date=date('Y-m-d H:i:s'); 
 $id = $_POST['hidden_id'];

 for($count = 0; $count < count($id); $count++)
 {
  
   $data = array(
   
   ':status'   => $status[$count],
   ':status_remark'  => $status_remark[0],
   ':defined_by'   => $defined_by,
   ':defined_date'   => $defined_date,
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE sites 
  SET status = :status, status_remark = :status_remark, defined_by = :defined_by, defined_date = :defined_date
  WHERE id = :id
  ";
 
  $statement = $connect->prepare($query);
  $statement->execute($data); 
  header("Location: dashboard.php");
 }
 
}

?>
