<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="fas fa-broadcast-tower"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Mobitel</div>
    </a>

    <!-- Nav Item  -->
    <?php
    if ($_SESSION['user_type'] == 'Admin') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'RNO Team Requestor') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_RNO.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'NPA') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_NPA.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'CS') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_CS.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'PCN') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_PCN.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'RO') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_RO.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } elseif ($_SESSION['user_type'] == 'INOC') {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_INOC.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    } else {
      echo '<li class="nav-item">
    <a class="nav-link" href="dashboard_Vendor.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>';
    }
    ?>

    <hr class="sidebar-divider">
    <li class="nav-item">
      <a class="nav-link" href="Excel_Exporter.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Excel Exporter</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Site_Details_Log.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Site Details Log</span></a>
    </li>
    
    <?php
    if ($_SESSION['user_type'] == 'Admin') {
      echo '<hr class="sidebar-divider">
      <li class="nav-item">
    <a class="nav-link" href="Registration.php">
      <i class="fas fa-users"></i>
      <span>Registration</span></a>
  </li>';
    } else{
      
    }

    ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->