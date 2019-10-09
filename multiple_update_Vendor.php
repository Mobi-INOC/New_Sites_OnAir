
<?php
session_start();
require_once('PDO.php');

if (isset($_POST['hidden_id'])) {
  date_default_timezone_set('Asia/Colombo');
  $site_name = $_POST['site_name'];
  $npa_config_status = $_POST['npa_config_status'];
  $npa_remark = $_POST['npa_remark'];
  //$defined_by = $_SESSION['user_name'];
  $npa_config_by = 'Vendor';
  $npa_config_date = date('Y-m-d H:i:s');
  $id = $_POST['hidden_id'];

  for ($count = 0; $count < count($id); $count++) {
     $data = array(
      ':site_name'   => $site_name[$count],
      ':npa_config_status'   => $npa_config_status[0],
      ':npa_remark'  => $npa_remark[0],
      ':npa_config_by'   => $npa_config_by,
      ':npa_config_date'   => $npa_config_date,
      ':id'   => $id[$count]
    );
    $query = "
  UPDATE sites 
  SET site_name = :site_name,npa_config_status = :npa_config_status, npa_remark = :npa_remark, npa_config_by = :npa_config_by, npa_config_date = :npa_config_date
  WHERE id = :id
  ";
  
    $statement = $connect->prepare($query);
    $statement->execute($data);
    header("Location: dashboard_Vendor.php");
  }
}
