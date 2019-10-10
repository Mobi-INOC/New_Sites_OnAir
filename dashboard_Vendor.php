<?php include 'common/header.php'; ?>

<?php include 'common/navigation.php'; ?>

<?php include 'common/topbar.php'; ?>

<?php include 'common/top.php'; ?>


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
      <div align="middle">
        <form method="post" action="update_select.php">
          Search:<input type="text" name="Search_text" id="search" class="form-control-sm" placeholder="">
          <input type="submit" name="Search" id="Search" class="btn btn-info" value="Search" />
        </form>
      </div>


      

      <br />
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th></th>
              <th>Vendor</th>
              <th>Site ID</th>
              <th>Type</th>
              <th>Band</th>
              <th>Work Description</th>
              <th>PAT Status</th>
              <th>Site Name</th>
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
              <th>Work Description</th>
              <th>PAT Status</th>
              <th>Site Name</th>
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
            html += '<td>' + data[count].wp + '</td>';
            html += '<td>' + data[count].status + '</td>';
            html += '<td>' + data[count].site_name + '</td>';
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
        // html += '<td><input type="hidden" name="site_name[]" class="form-control" value="' + $(this).data("site_name") + '" />' + $(this).data("site_name") + '</td>';
        // html += '<td><input type="hidden" name="wp[]" class="form-control" value="' + $(this).data("wp") + '" />' + $(this).data("wp") + '</td>';
        // html += '<td><input type="hidden" name="status[]" class="form-control" value="' + $(this).data("status") + '" />' + $(this).data("status") + '</td>';
        // html += '<td><input type="hidden" name="remark[]" class="form-control" value="' + $(this).data("remark") + '" />' + $(this).data("remark") + '</td>';

        html += '<td><input type="hidden" name="wp[]" class="form-control" value="' + $(this).data("wp") + '" />' + $(this).data("wp") + '</td>';
        html += '<td><input type="hidden" name="status[]" class="form-control" value="' + $(this).data("status") + '" />' + $(this).data("status") + '</td>';
        html += '<td><input type="text" name="site_name[]" class="form-control" value="' + $(this).data("site_name") + '" />' + $(this).data("site_name") + '</td>';
        html += '<td><select name="npa_config_status[]" class="form-control"><option value="' + $(this).data("npa_config_status") + '"selected>Choose...</option><option value="Yes">Yes</option><option value="No">No</option></select></td>';
        html += '<td><input type="text" name="npa_remark[]" class="form-control" value="' + $(this).data("npa_remark") + '" />' + $(this).data("npa_remark") + '</td>';


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
        html += '<td>' + $(this).data('wp') + '</td>';
        html += '<td>' + $(this).data('status') + '</td>';
        // html += '<td>' + $(this).data('remark') + '</td>';
        html += '<td>' + $(this).data('site_name') + '</td>';
        html += '<td>' + $(this).data('npa_config_status') + '</td>';
        html += '<td>' + $(this).data('npa_remark') + '</td>';
        html += '<td>' + $(this).data('cs_config_status') + '</td>';
        html += '<td>' + $(this).data('pcn_config_status') + '</td>';
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
          url: "multiple_update_Vendor.php",
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