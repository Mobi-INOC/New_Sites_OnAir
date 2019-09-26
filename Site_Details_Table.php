<?php include 'common/header.php';?>

<?php include 'common/navigation.php';?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USER</span>
                <img class="img-profile rounded-circle" src="images/pro.png">
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        

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
                <th >Type</th>
                <th >Band</th>
                <th >Site Name</th>
                <th >Work Description</th> 
                <th >PAT Status</th>
                <th >NPA-Config Status</th>
                <th>CS-Config Status</th>
                <th >PCN-Config Status</th>
                <th >On Air</th>
                <th >On Air Date</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th >Vendor</th>
                <th >Site ID</th>
                <th >Type</th>
                <th >Band</th>
                <th >Site Name</th>
                <th >Work Description</th> 
                <th >PAT Status</th>
                <th >NPA-Config Status</th>
                <th >CS-Config Status</th>
                <th >PCN-Config Status</th>
                <th >On Air</th>
                <th >On Air Date</th>
              </tr>
            </tfoot>
            <tbody>
            <?php   
              require_once ('connect.php');
                          
              $date = date('Y-m-d');
              $qry = "SELECT * FROM `sites` ORDER BY `id`  DESC";                  
              if ($res = $con->query($qry)) {
                  while ($row = $res->fetch_assoc()) {
                      $id=$row["id"];
                      $field1name = $row["vendor"];
                      $field2name = $row["site_id"];
                      $field3name = $row["type"];
                      $field4name = $row["band"]; 
                      $field5name = $row["site_name"];
                      $field6name = $row["wp"]; 
                      $field7name = $row["status"];
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
                                <td>".$field1name."</td> 
                                <td>".$field2name."</td> 
                                <td>".$field3name."</td> 
                                <td>".$field4name."</td> 
                                <td>".$field5name."</td> 
                                <td>".$field6name."</td>
                                <td>".$field7name."</td> 
                                <td>".$field8name."</td> 
                                <td>".$field9name."</td> 
                                <td>".$field10name."</td> 
                                <td>".$field11name."</td>
                                <td>".$field12name."</td> 
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

<?php include 'common/footer.php';?>

