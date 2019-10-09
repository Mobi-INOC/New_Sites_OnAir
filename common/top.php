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
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                  require_once('connect.php');
                                                                  $date3 = date('Y-m-d');
                                                                  $qry = "SELECT COUNT(`on_air`) as d FROM sites WHERE `on_air`='Done'";

                                                                  $res = $con->query($qry);
                                                                  while ($data1 = $res->fetch_assoc()) {
                                                                    echo $data1['d'];
                                                                  } ?></div>
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
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?php
                                                                                        require_once('connect.php');
                                                                                        $date3 = date('Y-m-d');
                                                                                        $qry = "select 100 * n / s as p from (select count(`on_air`) as n from sites WHERE `on_air`='Done') x cross join (select count(`on_air`) as s from sites) y";

                                                                                        $res = $con->query($qry);
                                                                                        while ($data2 = $res->fetch_assoc()) {
                                                                                          $a = $data2['p'];
                                                                                          echo intval($a) . '%';
                                                                                        } ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>

                  </div>
                </div>
                <?php
                require_once('connect.php');
                $date3 = date('Y-m-d');
                $qry = "select 100 * n / s as p from (select count(`on_air`) as n from sites WHERE `on_air`='Done') x cross join (select count(`on_air`) as s from sites) y";

                $res = $con->query($qry);
                while ($data2 = $res->fetch_assoc()) {
                  $a = $data2['p'];
                  echo intval($a) . '%';
                } ?>
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
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                  require_once('connect.php');
                                                                  $date3 = date('Y-m-d');
                                                                  $qry = "SELECT COUNT(`on_air`) as p FROM sites WHERE `on_air`='Pending..'";

                                                                  $res = $con->query($qry);
                                                                  while ($data2 = $res->fetch_assoc()) {
                                                                    echo $data2['p'];
                                                                  } ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>