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

     while($row = mysqli_fetch_array($result))
    {
                  $output .= "<tr> 
                                <td>".$row['date']."</td> 
                                <td>".$row['vendor']."</td> 
                                <td>".$row['site_id']."</td> 
                                <td>".$row['type']."</td> 
                                <td>".$row['band']."</td> 
                                <td>".$row['site_name']."</td>
                                <td>".$row['wp']."</td> 
                                <td>".$row['status']."</td> 
                                <td>".$row['remark']."</td> 
                                <td>".$row['defined_by']."</td> 
                                <td>".$row['defined_date']."</td> 
                                <td>".$row['npa_config_status']."</td>
                                <td>".$row['npa_remark']."</td> 
                                <td>".$row['npa_config_by']."</td> 
                                <td>".$row['npa_config_date']."</td> 
                                <td>".$row['cs_config_status']."</td> 
                                <td>".$row['cs_config_by']."</td> 
                                <td>".$row['cs_config_date']."</td> 
                                <td>".$row['cs_remark']."</td> 
                                <td>".$row['pcn_config_status']."</td> 
                                <td>".$row['pcn_remark']."</td> 
                                <td>".$row['pcn_config_by']."</td> 
                                <td>".$row['pcn_config_date']."</td> 
                                <td>".$row['activation_informed_by']."</td> 
                                <td>".$row['on_air']."</td> 
                                <td>".$row['activated_date']."</td> 
                                <td>".$row['activated_by']."</td> 
                                <td>".$row['sms']."</td> 
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