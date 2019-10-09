<?php
session_start();
require_once('PDO.php');

if (isset($_POST['hidden_id'])) {
  date_default_timezone_set('Asia/Colombo');
  $site_name = $_POST['site_name'];
  $cs_config_status = $_POST['cs_config_status'];
  $cs_remark = $_POST['cs_remark'];
  //$defined_by = $_SESSION['user_name'];
  $cs_config_by = $_SESSION['user_name'];
  $cs_config_date = date('Y-m-d H:i:s');
  $id = $_POST['hidden_id'];

  for ($count = 0; $count < count($id); $count++) {
     $data = array(
      ':cs_config_status'   => $cs_config_status[0],
      ':cs_remark'  => $cs_remark[0],
      ':cs_config_by'   => $cs_config_by,
      ':cs_config_date'   => $cs_config_date,
      ':id'   => $id[$count]
    );
    $query = "
  UPDATE sites 
  SET cs_config_status = :cs_config_status, cs_remark = :cs_remark, cs_config_by = :cs_config_by, cs_config_date = :cs_config_date
  WHERE id = :id
  ";
  
    $statement = $connect->prepare($query);
    $statement->execute($data);
    header("Location: dashboard_CS.php");
  }
}
