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
        <h1 class="h3 mb-0 text-gray-800">Excel Exporter</h1>
      </div>
      <!-- Content Row -->
      <div class="row">



        <!-- export  -->
        <div class="col-xl-12 col-md-6 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Date Range Excel Exporter</h6>
            </div>
            <div class="card-body">
              <form method="post" action="export.php">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" style="margin-right: -94px;">Date Range :</label>
                  <div class="col-sm-3">
                    <input class="form-control" type="date" name="date1" maxlength="10" required>
                  </div>
                  <label class="col-sm-0 col-form-label"> to </label>
                  <div class="col-sm-3">
                    <input class="form-control" type="date" name="date2" maxlength="10" required>
                  </div>
                  <div class="col-sm-2">
                    <input class="btn btn-success" type=submit value="Export" name="export">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <!-- export all -->
        <div class="col-xl-12 col-md-6 mb-4">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Full Cell Table Excel Exporter</h6>
            </div>
            <div class="card-body">
              <form method="post" action="export_all.php">
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label>Export Full File : </label>
                    <input class="btn btn-success" type="submit" name="export1" value="Export">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php include 'common/footer.php'; ?>