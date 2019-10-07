<?php include 'common/header.php'; ?>

<?php include 'common/navigation.php'; ?>

<?php include 'common/topbar.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Date</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                      date_default_timezone_set('Asia/Colombo');
                                                                      $time = date('Y-m-d');
                                                                      echo $time;
                                                                      ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">On-air Site count</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calculator fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending On-air Site count</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Uploader --->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Multi-New Site Uploader</h6>
        </div>
        <div class="card-body">
          <form method="post" action="" enctype="multipart/form-data">

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>Upload your Multi-CELL Excel File :</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="excelfile" id="excelfile" class="">
                    <!-- <label class="" for="inputGroupFile01">Choose file</label> -->
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <button class="btn btn-success">Upload</button>
                </div>


          </form>

          <?php

          use Box\Spout\Reader\ReaderFactory;
          use Box\Spout\Common\Type;

          require_once('connect.php');
          require_once('Spout/Autoloader/autoload.php');

          if (!empty($_FILES['excelfile']['name'])) {

            $pathinfo = pathinfo($_FILES['excelfile']['name']);

            if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls')
              && $_FILES['excelfile']['size'] > 0
            ) {
              $file = $_FILES['excelfile']['tmp_name'];

              $reader = ReaderFactory::create(Type::XLSX);

              $reader->open($file);
              $count = 0;

              foreach ($reader->getSheetIterator() as $sheet) {

                foreach ($sheet->getRowIterator() as $row) {

                  if ($count > 0) {

                    date_default_timezone_set('Asia/Colombo');

                    $vendor = $row[0];
                    $site_id = strtoupper($row[1]);
                    $type = strtoupper($row[2]);
                    $band = $row[3];
                    $site_name = $row[4];
                    $wp = $row[5];
                    $status = 'Pending..';
                    $npa_config_status = 'Pending..';
                    $cs_config_status = 'Pending..';
                    $pcn_config_status = 'Pending..';
                    $on_air = 'Pending..';
                    //   $requestor = $_SESSION['user_name'];

                    $qry = "INSERT INTO `sites`(`vendor`,`site_id`, `type`, `band`, `site_name`, `wp`, `status`,`npa_config_status`, `cs_config_status`,`pcn_config_status`, `on_air`) VALUES ('$vendor','$site_id','$type','$band','$site_name','$wp','$status','$npa_config_status','$cs_config_status','$pcn_config_status','$on_air')";
                    $res = mysqli_query($con, $qry);
                  }
                  $count++;
                }
              }

              if ($res) {
                echo "Your file Uploaded Successfull";
              } else {
                echo "Your file Uploaded Failed";
              }

              $reader->close();
            } else {
              echo "Please Choose only Excel file";
            }
          } else {
            //echo "test";
          }

          ?>

        </div>
        <div class="col-xl-3 col-sm-6 mb-3">

        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          Use this table format:- <form><input type="button" value="Download Template" onClick="window.location.href='downloads/Template.xlsx'" class="btn btn-info"></form>
          <hr>
          <table class="table table-bordered" width="100%" cellspacing="0">
            <thead style="background-color: aliceblue;">
              <tr>
                <th>Vendor</th>
                <th>Site ID</th>
                <th>Type</th>
                <th>Band</th>
                <th>Site Name</th>
                <th>Work Description</th>
              </tr>
            </thead>

            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
          <!-- <p style="margin-bottom: 2px;">Please give Request Type <b>Block</b> or <b>Deblock</b>
            <div style="color: red;">*(As in the <b>Bold</b> format)</div>
          </p> -->

        </div>
        <div class="col-xl-3 col-sm-6 mb-3">

        </div>
      </div>
    </div>
  </div>

  <!-- form --->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Single New Site Form</h6>
    </div>
    <div class="card-body">
      <form method="post" action="">
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label>Vendor :</label>
            <input type="text" name="Vendor" class="form-control" placeholder="Enter Vendor Name" maxlength="20" required>
          </div>
          <div class="col-md-4 mb-3">
            <label>Site ID :</label>
            <input type="text" name="SiteID" id="SiteID" class="form-control" placeholder="Enter Site ID" maxlength="30" style="text-transform: uppercase;" required>
          </div>
          <div class="col-md-4 mb-3">
            <label>Type :</label>
            <input type="text" name="Type" class="form-control" placeholder="Enter Type" maxlength="35" style="text-transform: uppercase;" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label>Band :</label>
            <input type="text" name="Band" id="Band" class="form-control" placeholder="Enter Band" maxlength="50" required>
          </div>
          <div class="col-md-4 mb-3">
            <label>Site Name :</label>
            <input type="text" name="Site" class="form-control" placeholder="Enter Site Name" maxlength="40" required>
          </div>
          <div class="col-md-4 mb-3">

          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label>Work Description :</label>
            <input type="text" name="wp" id="wp" class="form-control" placeholder="Enter Work Description" required>
          </div>
        </div>
        <input class="btn btn-success" type=submit value="ADD" name="submit1">

      </form>
      <?php

      if (isset($_POST['submit1'])) {
        require_once('connect.php');
        date_default_timezone_set('Asia/Colombo');
        // $date = date('Y-m-d H:i:s');Vendor SiteID Type Band Site wp
        //$date = $_POST['date'];

        $vendor = $_POST['Vendor'];
        $site_id = strtoupper($_POST['SiteID']);
        $type = strtoupper($_POST['Type']);
        $band = $_POST['Band'];
        $site_name = $_POST['Site'];
        $wp = $_POST['wp'];
        $status = 'Pending..';
        $npa_config_status = 'Pending..';
        $cs_config_status = 'Pending..';
        $pcn_config_status = 'Pending..';
        $on_air = 'Pending..';

        $qry1 = "INSERT INTO `sites`(`vendor`,`site_id`, `type`, `band`, `site_name`, `wp`, `status`,`npa_config_status`, `cs_config_status`,`pcn_config_status`, `on_air`) VALUES ('$vendor','$site_id','$type','$band','$site_name','$wp','$status','$npa_config_status','$cs_config_status','$pcn_config_status','$on_air')";

        if (!mysqli_query($con, $qry1)) {
          die('Error: ' . mysqli_error());
        } else {
          echo "Your record added Successfull";
        }
      }


      ?>


    </div>
  </div>


  <!-- DataTables  -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Site Details Tables</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <?php

          require_once('connect.php');
          ///$user = $_SESSION['user_name'];
          //  $qry = "SELECT * FROM cbm_cell_block WHERE `requestor` LIKE '%$user%' AND (block='Pending..' OR deblock='' OR deblock='Pending..') ORDER BY `date` DESC";
          $qry = "SELECT * FROM `sites`";

          echo '
                  <thead>
                  <tr>
                    <th>Vendor</th>
                    <th>Site ID</th>
                    <th>Type</th>
                    <th>Band</th>
                    <th>Site Name</th>
                    <th>Work Description</th>
                    <th>PAT Status</th>
                    <th>NPA-Config Status</th>
                    <th>CS-Config Status</th>
                    <th>PCN-Config Status</th>
                    <th>On Air</th>
                    <th></th>
                  </tr>
                </thead>';
          // `id`, `site_id`, `type`, `band`, `vendor`, `site_name`, `wp`, `status`, `defined_by`, `defined_date`, 
          // `npa_config_status`, `npa_config_by`, `npa_config_date`, `cs_config_status`, `cs_config_by`, 
          // `cs_config_date`, `pcn_config_status`, `pcn_config_by`, `pcn_config_date`, `region`, `activation_informed_by`,
          //  `activated_date`, `activated_by`, `alarms_on_activation`, `sms`, `removed_date`, `removed_by`, `remarks`,
          //   `npa_remark`, `cs_remark`, `pcn_remark`, `remove_remark`, `pat_pass`, `pat_by`, `pat_date`, `bsc`,
          //    `technology`

          if ($res = $con->query($qry)) {
            while ($row = $res->fetch_assoc()) {
              $id = $row["id"];
              $field0name = $row["vendor"];
              $field1name = $row["site_id"];
              $field2name = $row["type"];
              $field3name = $row["band"];
              $field4name = $row["site_name"];
              $field5name = $row["wp"];
              $field6name = $row["status"];
              $field7name = $row["npa_config_status"];
              $field8name = $row["cs_config_status"];
              $field9name = $row["pcn_config_status"];
              $field10name = $row["on_air"];

              echo "<tr> 
                  <td>" . $field0name . "</td> 
                  <td>" . $field1name . "</td> 
                  <td>" . $field2name . "</td> 
                  <td>" . $field3name . "</td> 
                  <td>" . $field4name . "</td> 
                  <td>" . $field5name . "</td> 
                  <td>" . $field6name . "</td>
                  <td>" . $field7name . "</td>
                  <td>" . $field8name . "</td>
                  <td>" . $field9name . "</td>
                  <td>" . $field10name . "</td>
                  <td><a onClick=\"return confirm('Are you sure you want to delete?')\" href=\"delete_new_site.php?id=" . $row['id'] . "\" class='btn'><i class='fa fa-window-close' style='font-size:20px;color:red'></i></a>
                  </td>
              </tr>";
            }

            $res->free();
          }
          ?></table><br>
        <p style="margin-bottom: 2px;text-align: right;">Delete New Site Use &nbsp;&nbsp;<i class='fa fa-window-close' style='font-size:18px;color:red'></i></p>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'common/footer.php'; ?>