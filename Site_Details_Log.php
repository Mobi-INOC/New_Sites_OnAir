<?php include 'common/header.php'; ?>

<?php include 'common/navigation.php'; ?>

<?php include 'common/topbar.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Site Details Log</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Site Details Tables</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Vendor</th>
                <th>Site ID</th>
                <th>Type</th>
                <th>Band</th>
                <th>Site Name</th>
                <th>Work Description</th>
                <th>PAT Status</th>
                <th>Status Remark</th>
                <th>NPA-Config Status</th>
                <th>CS-Config Status</th>
                <th>PCN-Config Status</th>
                <th>On Air</th>
                <th>On Air Date</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Vendor</th>
                <th>Site ID</th>
                <th>Type</th>
                <th>Band</th>
                <th>Site Name</th>
                <th>Work Description</th>
                <th>PAT Status</th>
                <th>Status Remark</th>
                <th>NPA-Config Status</th>
                <th>CS-Config Status</th>
                <th>PCN-Config Status</th>
                <th>On Air</th>
                <th>On Air Date</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              require_once('connect.php');

              $date = date('Y-m-d');
              $qry = "SELECT * FROM `sites` ORDER BY `id`  DESC";
              if ($res = $con->query($qry)) {
                while ($row = $res->fetch_assoc()) {
                  $id = $row["id"];
                  $field1name = $row["vendor"];
                  $field2name = $row["site_id"];
                  $field3name = $row["type"];
                  $field4name = $row["band"];
                  $field5name = $row["site_name"];
                  $field6name = $row["wp"];
                  $field7name = $row["status"];
                  $field71name = $row["remark"];
                  $field8name = $row["npa_config_status"];
                  $field9name = $row["cs_config_status"];
                  $field10name = $row["pcn_config_status"];
                  $field11name = $row["technology"];
                  $field12name = $row["activated_date"];



                  // `id`, `site_id`, `type`, `band`, `vendor`, `site_name`, `wp`, `status`, `defined_by`, `defined_date`, 
                  // `npa_config_status`, `npa_config_by`, `npa_config_date`, `cs_config_status`, `cs_config_by`, 
                  // `cs_config_date`, `pcn_config_status`, `pcn_config_by`, `pcn_config_date`, `region`, `activation_informed_by`,
                  //  `activated_date`, `activated_by`, `alarms_on_activation`, `sms`, `removed_date`, `removed_by`, `remarks`,
                  //   `npa_remark`, `cs_remark`, `pcn_remark`, `remove_remark`, `pat_pass`, `pat_by`, `pat_date`, `bsc`,
                  //    `technology`

                  echo "<tr>
                                <td>" . $field1name . "</td> 
                                <td>" . $field2name . "</td> 
                                <td>" . $field3name . "</td> 
                                <td>" . $field4name . "</td> 
                                <td>" . $field5name . "</td> 
                                <td>" . $field6name . "</td>
                                <td>" . $field7name . "</td> 
                                <td>" . $field71name . "</td>
                                <td>" . $field8name . "</td> 
                                <td>" . $field9name . "</td> 
                                <td>" . $field10name . "</td> 
                                <td>" . $field11name . "</td>
                                <td>" . $field12name . "</td> 
                                </tr>";
                }

                $res->free();
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include 'common/footer.php'; ?>