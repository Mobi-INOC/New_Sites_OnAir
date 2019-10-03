<?php include 'common/header.php'; ?>

<?php include 'common/navigation.php'; ?>
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


      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Site Details Tables</h6>
        </div>
        <div class="card-body">
          <form method="post" id="update_form">
            <div align="left">
              <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Update" />
            </div>
            <br />
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th></th>
                    <th>Vendor</th>
                    <th>Site ID</th>
                    <th>Type</th>
                    <th>Band</th>
                    <th>Site Name</th>
                    <th>Work Description</th>
                    <th>PAT Status</th>
                    <!-- <th>Status Remark</th> -->
                    <th>NPA-Config Status</th>
                    <th>NPA Remark</th>
                    <th>CS-Config Status</th>
                    <th>PCN-Config Status</th>
                    <th>On Air</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th></th>
                    <th>Vendor</th>
                    <th>Site ID</th>
                    <th>Type</th>
                    <th>Band</th>
                    <th>Site Name</th>
                    <th>Work Description</th>
                    <th>PAT Status</th>
                    <!-- <th>Status Remark</th> -->
                    <th>NPA-Config Status</th>
                    <th>NPA Remark</th>
                    <th>CS-Config Status</th>
                    <th>PCN-Config Status</th>
                    <th>On Air</th>
                  </tr>
                </tfoot>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>

      </div>
      </form>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <?php include 'common/footer.php'; ?>


  <!--jQuary-->
  <script>
    $(document).ready(function() {

      function fetch_data() {
        $.ajax({
          url: "update_select.php",
          method: "POST",
          dataType: "json",
          success: function(data) {
            var html = '';
            for (var count = 0; count < data.length; count++) {
              html += '<tr>';
              html += '<td><input type="checkbox" id="' + data[count].id + '" data-vendor="' + data[count].vendor + '" data-site_id="' + data[count].site_id + '" data-type="' + data[count].type + '" data-band="' + data[count].band + '" data-site_name="' + data[count].site_name + '" data-wp="' + data[count].wp + '" data-status="' + data[count].status + '" data-npa_remark="' + data[count].npa_remark + '" data-npa_config_status="' + data[count].npa_config_status + '" data-cs_config_status="' + data[count].cs_config_status + '" data-pcn_config_status="' + data[count].pcn_config_status + '" data-activated_date="' + data[count].activated_date + '" data-on_air="' + data[count].on_air + '" class="check_box"  /></td>';
              html += '<td>' + data[count].vendor + '</td>';
              html += '<td>' + data[count].site_id + '</td>';
              html += '<td>' + data[count].type + '</td>';
              html += '<td>' + data[count].band + '</td>';
              html += '<td>' + data[count].site_name + '</td>';
              html += '<td>' + data[count].wp + '</td>';
              html += '<td>' + data[count].status + '</td>';
              // html += '<td>' + data[count].remark + '</td>';
              html += '<td>' + data[count].npa_config_status + '</td>';
              html += '<td>' + data[count].npa_remark + '</td>';
              html += '<td>' + data[count].cs_config_status + '</td>';
              html += '<td>' + data[count].pcn_config_status + '</td>';
              html += '<td></td></tr>';
            }
            $('tbody').html(html);
          }
        });
      }
      // `id`, `site_id`, `type`, `band`, `vendor`, `site_name`, `wp`, `status`, `defined_by`, `defined_date`, 
      // `npa_config_status`, `npa_config_by`, `npa_config_date`, `cs_config_status`, `cs_config_by`, 
      // `cs_config_date`, `pcn_config_status`, `pcn_config_by`, `pcn_config_date`, `region`, `activation_informed_by`,
      //  `activated_date`, `activated_by`, `alarms_on_activation`, `sms`, `removed_date`, `removed_by`, `remarks`,
      //   `npa_remark`, `cs_remark`, `pcn_remark`, `remove_remark`, `pat_pass`, `pat_by`, `pat_date`, `bsc`,
      //    `technology`
      fetch_data();

      $(document).on('click', '.check_box', function() {
        var html = '';
        if (this.checked) {

          html = '<td><input type="checkbox" id="' + $(this).attr('id') + '" data-vendor="' + $(this).data('vendor') + '" data-site_id="' + $(this).data('site_id') + '" data-type="' + $(this).data('type') + '" data-band="' + $(this).data('band') + '" data-site_name="' + $(this).data('site_name') + '" data-wp="' + $(this).data('wp') + '" data-status="' + $(this).data('status') + '" data-npa_remark="' + $(this).data('npa_remark') + '" data-npa_config_status="' + $(this).data('npa_config_status') + '" data-cs_config_status="' + $(this).data('cs_config_status') + '" data-pcn_config_status="' + $(this).data('pcn_config_status') + '" data-activated_date="' + $(this).data('activated_date') + '" data-on_air="' + $(this).data('on_air') + '" class="check_box" checked /></td>';
          html += '<td><input type="hidden" name="vendor[]" class="form-control" value="' + $(this).data("vendor") + '" />' + $(this).data("vendor") + '</td>';
          html += '<td><input type="hidden" name="site_id[]" class="form-control" value="' + $(this).data("site_id") + '" />' + $(this).data("site_id") + '</td>';
          html += '<td><input type="hidden" name="type[]" class="form-control" value="' + $(this).data("type") + '" />' + $(this).data("type") + '</td>';
          html += '<td><input type="hidden" name="band[]" class="form-control" value="' + $(this).data("band") + '" />' + $(this).data("band") + '</td>';
          html += '<td><input type="hidden" name="site_name[]" class="form-control" value="' + $(this).data("site_name") + '" />' + $(this).data("site_name") + '</td>';
          html += '<td><input type="hidden" name="wp[]" class="form-control" value="' + $(this).data("wp") + '" />' + $(this).data("wp") + '</td>';
          html += '<td><input type="hidden" name="status[]" class="form-control" value="' + $(this).data("status") + '" />' + $(this).data("status") + '</td>';
          //html += '<td><input type="hidden" name="remark[]" class="form-control" value="' + $(this).data("remark") + '" />' + $(this).data("remark") + '</td>';


          if (($(this).data("on_air") == '0')) {
            // html += '<td><input type="hidden" name="npa_config_status[]" class="form-control" value="' + $(this).data("npa_config_status") + '" />' + $(this).data("npa_config_status") + '</td>';
            html += '<td><select name="npa_config_status[]" class="form-control"><option value="' + $(this).data("npa_config_status") + '"selected>Choose...</option><option value="Yes">Yes</option><option value="No">No</option></select></td>';
            //   html += '<td><input type="hidden" name="status[]" class="form-control" value="Defined" />Defined</td>';
            html += '<td><input type="text" name="npa_remark[]" class="form-control" value="' + $(this).data("npa_remark") + '" /></td>';

          } else {
            html += '<td><input type="hidden" name="npa_config_status[]" class="form-control" value="' + $(this).data("npa_config_status") + '" />' + $(this).data("npa_config_status") + '</td>';
            html += '<td><input type="hidden" name="npa_remark[]" class="form-control" value="' + $(this).data("npa_remark") + '" />' + $(this).data("npa_remark") + '</td>';

          }

          html += '<td><input type="hidden" name="cs_config_status[]" class="form-control" value="' + $(this).data("cs_config_status") + '" />' + $(this).data("cs_config_status") + '</td>';
          html += '<td><input type="hidden" name="pcn_config_status[]" class="form-control" value="' + $(this).data("pcn_config_status") + '" />' + $(this).data("pcn_config_status") + '</td>';
          // html += '<td><input type="hidden" name="activated_date[]" class="form-control" value="' + $(this).data("activated_date") + '" />' + $(this).data("activated_date") + '</td>';

          html += '<td></td>';

          html += '<input type="hidden" name="hidden_id[]" value="' + $(this).attr('id') + '" /></td>';


        } else {
          html = '<td><input type="checkbox" id="' + $(this).attr('id') + '" data-vendor="' + $(this).data('vendor') + '" data-site_id="' + $(this).data('site_id') + '" data-type="' + $(this).data('type') + '" data-band="' + $(this).data('band') + '" data-site_name="' + $(this).data('site_name') + '" data-wp="' + $(this).data('wp') + '" data-status="' + $(this).data('status') + '" data-npa_config_status="' + $(this).data('npa_config_status') + '" data-npa_remark="' + $(this).data('npa_remark') + '"data-cs_config_status="' + $(this).data('cs_config_status') + '" data-pcn_config_status="' + $(this).data('pcn_config_status') + '" data-activated_date="' + $(this).data('activated_date') + '" data-on_air="' + $(this).data('on_air') + '" class="check_box" /></td>';
          html += '<td>' + $(this).data('vendor') + '</td>';
          html += '<td>' + $(this).data('site_id') + '</td>';
          html += '<td>' + $(this).data('type') + '</td>';
          html += '<td>' + $(this).data('band') + '</td>';
          html += '<td>' + $(this).data('site_name') + '</td>';
          html += '<td>' + $(this).data('wp') + '</td>';
          html += '<td>' + $(this).data('status') + '</td>';
          // html += '<td>' + $(this).data('remark') + '</td>';
          html += '<td>' + $(this).data('npa_config_status') + '</td>';
          html += '<td>' + $(this).data('npa_remark') + '</td>';
          html += '<td>' + $(this).data('cs_config_status') + '</td>';
          html += '<td>' + $(this).data('pcn_config_status') + '</td>';
          // html += '<td>' + $(this).data('activated_date') + '</td>';
          html += '<td></td>';
        }
        $(this).closest('tr').html(html);
        $('#npa_config_status' + $(this).attr('id') + '').val($(this).data('npa_config_status'));
        //  $('#deblock'+$(this).attr('id')+'').val($(this).data('deblock'));
      });

      $('#update_form').on('submit', function(event) {
        event.preventDefault();
        if ($('.check_box:checked').length > 0) {
          $.ajax({
            url: "multiple_update.php",
            method: "POST",
            data: $(this).serialize(),
            success: function() {
              alert('Your Data Updated Successfull.');
              fetch_data();
              location.reload(true);
            }
          })
        }
      });

    });
  </script>