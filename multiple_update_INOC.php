<?php
session_start();
require_once('PDO.php');

if (isset($_POST['hidden_id'])) {
  date_default_timezone_set('Asia/Colombo');
  $vendor = $_POST['vendor'];
  $band = $_POST['band'];
  $type = $_POST['type'];
  $site_id = $_POST['site_id'];

  $site_name = $_POST['site_name'];
  $on_air = $_POST['on_air'];
  $activated_by = $_SESSION['user_name'];
  $activated_date = date('Y-m-d H:i:s');
  $activation_informed_by = $_POST['activation_informed_by'];
  $sms = $_POST['sms'];
  $id = $_POST['hidden_id'];

  for ($count = 0; $count < count($id); $count++) {

    if($on_air[$count]=='Done'){
     $data = array(
      ':site_name'   => $site_name[$count],
      ':on_air'   => $on_air[0],
      ':activated_by'   => $activated_by,
      ':activated_date'   => $activated_date,
      ':activation_informed_by'   => $activation_informed_by[0],
      ':sms'   => 'New '.$vendor[$count].' '.$band[$count].' '.$type[$count].' on air at '.$site_name[$count].' ('.$site_id[$count].') '.$sms[$count],
      ':id'   => $id[$count]
    );
   // New ' + $(this).data("vendor") + ' ' + $(this).data("band") + ' ' + $(this).data("type") + ' on air at ' + $(this).data("site_name") + ' (' + $(this).data("site_id") + ')

    $query = "
  UPDATE sites 
  SET site_name = :site_name,on_air = :on_air, activated_by = :activated_by, activated_date = :activated_date, activation_informed_by = :activation_informed_by, sms = :sms
  WHERE id = :id
  ";
    }else{

      $data = array(
        ':site_name'   => $site_name[$count],
        ':on_air'   => $on_air[0],
        ':activated_by'   => $activated_by,
        ':activated_date'   => $activated_date,
        ':activation_informed_by'   => $activation_informed_by[0],
        ':id'   => $id[$count]
      );
     // New ' + $(this).data("vendor") + ' ' + $(this).data("band") + ' ' + $(this).data("type") + ' on air at ' + $(this).data("site_name") + ' (' + $(this).data("site_id") + ')
  
      $query = "
    UPDATE sites 
    SET site_name = :site_name,on_air = :on_air, activated_by = :activated_by, activated_date = :activated_date, activation_informed_by = :activation_informed_by,
    WHERE id = :id
    ";

    }
  $statement = $connect->prepare($query);
  $statement->execute($data);
  header("Location: dashboard_INOC.php");
  }
}
?>