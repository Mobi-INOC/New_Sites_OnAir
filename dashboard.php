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
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">header</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">sssssss</div>
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
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">header</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ssssss</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">header</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">sss</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">header</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">ssssssssssss</div>
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
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="3%"></th>
                    <th width="10%">Vendor</th>
                    <th width="5%">Site ID</th>
                    <th width="10%">Type</th>
                    <th width="10%">Band</th>
                    <th width="10%">Site Name</th>
                    <th width="15%">Work Description</th> 
                    <th width="5%">PAT Status</th>
                    <th width="5%">NPA-Config Status</th>
                    <th width="5%">CS-Config Status</th>
                    <th width="5%">PCN-Config Status</th>
                    <th width="10%">On Air Date</th>
                    <th width="5%">Status</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th width="3%"></th>
                    <th width="10%">Vendor</th>
                    <th width="5%">Site ID</th>
                    <th width="10%">Type</th>
                    <th width="10%">Band</th>
                    <th width="10%">Site Name</th>
                    <th width="15%">Work Description</th> 
                    <th width="5%">PAT Status</th>
                    <th width="5%">NPA-Config Status</th>
                    <th width="5%">CS-Config Status</th>
                    <th width="5%">PCN-Config Status</th>
                    <th width="10%">On Air Date</th>
                    <th width="5%">Status</th>
                  </tr>
                </tfoot>
                <tbody>
                
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


<!--jQuary-->
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"update_select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-date="'+data[count].date+'" data-cell="'+data[count].cell+'" data-site_name="'+data[count].site_name+'" data-technology="'+data[count].technology+'" data-requestor="'+data[count].requestor+'" data-reason="'+data[count].reason+'" data-block="'+data[count].block+'" data-block_remarks="'+data[count].block_remarks+'" data-deblock="'+data[count].deblock+'" data-deblock_remarks="'+data[count].deblock_remarks+'" class="check_box"  /></td>';
                    html += '<td>'+data[count].date+'</td>';
                    html += '<td>'+data[count].cell+'</td>';
                    html += '<td>'+data[count].site_name+'</td>';
                    html += '<td>'+data[count].technology+'</td>';
                    html += '<td>'+data[count].requestor+'</td>';
                    html += '<td>'+data[count].reason+'</td>';
                    html += '<td>'+data[count].block+'</td>';
                    html += '<td>'+data[count].block_remarks+'</td>';
                    html += '<td>'+data[count].deblock+'</td>';
                    html += '<td>'+data[count].deblock_remarks+'</td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }
    //cell,site_name,technology,requestor,reason
    //`block`, `block_by`, `block_time`, `block_remarks`, `deblock`, 
    //`deblock_date`, `deblock_time`, `deblock_remarks`, `active
    fetch_data();

    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {   
            
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-date="'+$(this).data('date')+'" data-cell="'+$(this).data('cell')+'" data-site_name="'+$(this).data('site_name')+'" data-technology="'+$(this).data('technology')+'" data-requestor="'+$(this).data('requestor')+'" data-reason="'+$(this).data('reason')+'" data-block="'+$(this).data('block')+'" data-block_remarks="'+$(this).data('block_remarks')+'" data-deblock="'+$(this).data('deblock')+'" data-deblock_remarks="'+$(this).data('deblock_remarks')+'" class="check_box" checked /></td>';
            html += '<td><input type="hidden" name="date[]" class="form-control" value="'+$(this).data("date")+'" />'+$(this).data("date")+'</td>';
            html += '<td><input type="hidden" name="cell[]" class="form-control" value="'+$(this).data("cell")+'" />'+$(this).data("cell")+'</td>';
            html += '<td><input type="hidden" name="site_name[]" class="form-control" value="'+$(this).data("site_name")+'" />'+$(this).data("site_name")+'</td>';
            html += '<td><input type="hidden" name="technology[]" class="form-control" value="'+$(this).data("technology")+'" />'+$(this).data("technology")+'</td>';
            html += '<td><input type="hidden" name="requestor[]" class="form-control" value="'+$(this).data("requestor")+'" />'+$(this).data("requestor")+'</td>';
            html += '<td><input type="hidden" name="reason[]" class="form-control" value="'+$(this).data("reason")+'" />'+$(this).data("reason")+'</td>';
      //       html += '<td><select name="block[]" id="block_'+$(this).attr('id')+'" class="form-control"><option value="'+$(this).data("block")+'" selected>Choose type</option><option value="Block">Block</option></select></td>';  
      //       html += '<td><input type="text" name="block_remarks[]" class="form-control" value="'+$(this).data("block_remarks")+'" /></td>';
      //       html += '<td><select name="deblock[]" id="deblock_'+$(this).attr('id')+'" class="form-control"><option value="'+$(this).data("deblock")+'" selected>Choose type</option><option value="Deblock">Deblock</option></select></td>';  
      //       html += '<td><input type="text" name="deblock_remarks[]" class="form-control" value="'+$(this).data("deblock_remarks")+'" />';
     //      html += '<input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
       
       if(($(this).data("block")=='Block')){
        html += '<td><input type="hidden" name="block[]" class="form-control" value="'+$(this).data("block")+'" />'+$(this).data("block")+'</td>';
            html += '<td><input type="hidden" name="block_remarks[]" class="form-control" value="'+$(this).data("block_remarks")+'" />'+$(this).data("block_remarks")+'</td>';
           // html += '<td><select name="deblock[]" id="deblock_'+$(this).attr('id')+'" class="form-control"><option value="'+$(this).data("deblock")+'" selected>Choose type</option><option value="Deblock">Deblock</option></select></td>';  
           html += '<td><input type="hidden" name="deblock[]" class="form-control" value="Deblock" />Deblock</td>';
            html += '<td><input type="text" name="deblock_remarks[]" class="form-control" value="'+$(this).data("deblock_remarks")+'" />';
        
       }else{
        html += '<td><input type="hidden" name="block[]" class="form-control" value="Block" />Block</td>';
       
        //html += '<td><select name="block[]" id="block_'+$(this).attr('id')+'" class="form-control"><option value="'+$(this).data("block")+'" selected>Choose type</option><option value="Block">Block</option></select></td>';  
            html += '<td><input type="text" name="block_remarks[]" class="form-control" value="'+$(this).data("block_remarks")+'" /></td>';
            html += '<td><input type="hidden" name="deblock[]" class="form-control" value="'+$(this).data("deblock")+'" />'+$(this).data("deblock")+'</td>';
            html += '<td><input type="hidden" name="deblock_remarks[]" class="form-control" value="'+$(this).data("deblock_remarks")+'" />'+$(this).data("deblock_remarks")+'</td>';
            
         
       }
          html += '<input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
       

        }
        else
        {           
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-date="'+$(this).data('date')+'" data-cell="'+$(this).data('cell')+'" data-site_name="'+$(this).data('site_name')+'" data-technology="'+$(this).data('technology')+'" data-requestor="'+$(this).data('requestor')+'" data-reason="'+$(this).data('reason')+'" data-block="'+$(this).data('block')+'" data-block_remarks="'+$(this).data('block_remarks')+'" data-deblock="'+$(this).data('deblock')+'" data-deblock_remarks="'+$(this).data('deblock_remarks')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('date')+'</td>';
            html += '<td>'+$(this).data('cell')+'</td>';
            html += '<td>'+$(this).data('site_name')+'</td>';
            html += '<td>'+$(this).data('technology')+'</td>';
            html += '<td>'+$(this).data('requestor')+'</td>';
            html += '<td>'+$(this).data('reason')+'</td>';
            html += '<td>'+$(this).data('block')+'</td>';
            html += '<td>'+$(this).data('block_remarks')+'</td>';
            html += '<td>'+$(this).data('deblock')+'</td>';
            html += '<td>'+$(this).data('deblock_remarks')+'</td>';            
        }
        $(this).closest('tr').html(html);
        //$('#block'+$(this).attr('id')+'').val($(this).data('block'));
        $('#deblock'+$(this).attr('id')+'').val($(this).data('deblock'));
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"multiple_update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Your Data Updated Successfull.');
                    fetch_data();
                    location.reload(true);
                }
            })
        }
    });

});  

</script>
