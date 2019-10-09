<?php 
  require_once ('connect.php');
  //$query = "SELECT * FROM cbm_cell_block WHERE `date` BETWEEN '$date1' AND '$date2'";
 // $date = date('Y-m-d');
  //$date1=$_POST['date1'];
  //$date2=$_POST['date2'];
  $output = "";

if(isset($_POST['export'])){ 
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
   $query = "SELECT * FROM sites WHERE `date` BETWEEN '$date1' AND '$date2'";
   $result = mysqli_query($con, $query);
   if(mysqli_num_rows($result) > 0)
   {
    $output .= "
     <table class='table' bordered='1'>  
     <tr> 
     <th>Date</th>
     <th>Vendor</th>
     <th>Site ID</th>
     <th>Type</th>
     <th>Band</th>
     <th>Site Name</th>
     <th>Work Description</th>
     <th>PAT Status</th>
     <th>PAT Remark</th>
     <th>PAT defined_by</th>
     <th>PAT defined_date</th>
     <th>NPA-Config Status</th>
     <th>NPA Remark</th>
     <th>NPA config_by</th>
     <th>NPA config_date</th>
     <th>CS-Config Status</th>
     <th>CS Remark</th>
     <th>CS config_by</th>
     <th>CS config_date</th>
     <th>PCN-Config Status</th>
     <th>PCN Remark</th>
     <th>PCN config_by</th>
     <th>PCN config_date</th>
     <th>Activation Informed By</th>
     <th>On Air</th>
     <th>Activated Date</th>
     <th>Activated By</th>
     <th>SMS</th>
    </tr>
    ";

    // INSERT INTO `sites`(`id`, `date`, `site_id`, `type`, `band`, `vendor`, `site_name`, `wp`,
    //  `status`, `remark`, `defined_by`, `defined_date`, `npa_config_status`, `npa_remark`, 
    //  `npa_config_by`, `npa_config_date`, `cs_config_status`, `cs_config_by`, `cs_config_date`, 
    //  `cs_remark`, `pcn_config_status`, `pcn_config_by`, `pcn_config_date`, `pcn_remark`, `region`, 
    //  `activation_informed_by`, `on_air`, `activated_date`, `activated_by`, `alarms_on_activation`, 
    //  `sms`, `removed_date`, `removed_by`, `remove_remark`, `pat_pass`, `pat_by`, `pat_date`, `bsc`, `technology`)

    while($row = mysqli_fetch_array($result))
    {
                  $output .= "<tr> 
                                <td>".$row['date']."</td> 
                                <td>".$row['cell']."</td> 
                                <td>".$row['site_name']."</td> 
                                <td>".$row['technology']."</td> 
                                <td>".$row['requestor']."</td> 
                                <td>".$row['reason']."</td>
                                <td>".$row['block']."</td> 
                                <td>".$row['block_by']."</td> 
                                <td>".$row['block_time']."</td> 
                                <td>".$row['block_remarks']."</td> 
                                <td>".$row['deblock']."</td> 
                                <td>".$row['deblock_by']."</td>
                                <td>".$row['deblock_time']."</td> 
                                <td>".$row['deblock_remarks']."</td> 
                                </tr>";
    }
    $output .= "</table>";
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=Mobitel_On-Air_Report.xls');
    echo $output;
   }else{
     echo "Enter the correct date range";
   }
  }
  ?>