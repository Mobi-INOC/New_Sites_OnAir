<?php
session_start();
require_once('PDO.php');

if (isset($_POST['hidden_id'])) {
  date_default_timezone_set('Asia/Colombo');

  $site_name = $_POST['site_name'];
  $status = $_POST['status'];
  $remark = $_POST['remark'];
  //$defined_by = $_SESSION['user_name'];
  $defined_by = 'RO';
  $defined_date = date('Y-m-d H:i:s');
  $id = $_POST['hidden_id'];

  for ($count = 0; $count < count($id); $count++) {
    if (($status[$count] == 'Defined') || ($status[$count] == 'Pending..')) {
      $data = array(
        ':site_name'   => $site_name[$count],
        ':status'   => $status[0],
        ':remark'  => $remark[0],
        ':defined_by'   => $defined_by,
        ':defined_date'   => $defined_date,
        ':id'   => $id[$count]
      );
      $query = "
  UPDATE sites 
  SET site_name = :site_name,status = :status, remark = :remark, defined_by = :defined_by, defined_date = :defined_date
  WHERE id = :id
  ";
    }
    $statement = $connect->prepare($query);
    $statement->execute($data);
    header("Location: dashboard_RO.php");
  }
}
