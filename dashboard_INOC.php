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
      <div align="right">
        Search : <input type="text" name="search" id="search" class="form-control-sm" />
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
              <th>Site Name</th>
              <th>Activation Informed By</th>
              <th>On Air</th>
              <th>Message Body</th>
              <th>PAT Status</th>
              <!-- <th>Status Remark</th> -->
              <th>NPA-Config Status</th>
              <!-- <th>NPA Remark</th> -->
              <th>CS-Config Status</th>
              <!-- <th>CS Remark</th> -->
              <th>PCN-Config Status</th>
          </thead>
          <tfoot>
            <tr>
              <th></th>
              <th>Vendor</th>
              <th>Site ID</th>
              <th>Type</th>
              <th>Band</th>
              <th>Work Description</th>
              <th>Site Name</th>
              <th>Activation Informed By</th>
              <th>On Air</th>
              <th>Message Body</th>
              <th>PAT Status</th>
              <!-- <th>Status Remark</th> -->
              <th>NPA-Config Status</th>
              <!-- <th>NPA Remark</th> -->
              <th>CS-Config Status</th>
              <!-- <th>CS Remark</th> -->
              <th>PCN-Config Status</th>

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

    function fetch_data(value) {
      $.ajax({
        url: "update_select.php",
        method: "POST",
        data: {
          value: value
        },
        dataType: "json",
        success: function(data) {
          var html = '';
          for (var count = 0; count < data.length; count++) {
            html += '<tr>';
            html += '<td><input type="checkbox" id="' + data[count].id + '" data-vendor="' + data[count].vendor + '" data-site_id="' + data[count].site_id + '" data-type="' + data[count].type + '" data-band="' + data[count].band + '" data-wp="' + data[count].wp + '" data-site_name="' + data[count].site_name + '" data-activation_informed_by="' + data[count].activation_informed_by + '" data-on_air="' + data[count].on_air + '" data-sms="' + data[count].sms + '" data-status="' + data[count].status + '" data-npa_remark="' + data[count].npa_remark + '" data-npa_config_status="' + data[count].npa_config_status + '" data-cs_config_status="' + data[count].cs_config_status + '" data-cs_remark="' + data[count].cs_remark + '" data-pcn_config_status="' + data[count].pcn_config_status + '" data-pcn_remark="' + data[count].pcn_remark + '" data-activated_date="' + data[count].activated_date + '" class="check_box"  /></td>';
            html += '<td>' + data[count].vendor + '</td>';
            html += '<td>' + data[count].site_id + '</td>';
            html += '<td>' + data[count].type + '</td>';
            html += '<td>' + data[count].band + '</td>';
            html += '<td>' + data[count].wp + '</td>';

            html += '<td>' + data[count].site_name + '</td>';
            html += '<td>' + data[count].activation_informed_by + '</td>';
            
            html += '<td>' + data[count].on_air + '</td>';
            html += '<td>' + data[count].sms + '</td>';
           // html += '<td>New ' + data[count].vendor + ' ' + data[count].band + ' ' + data[count].type + ' on air at ' + data[count].site_name + ' (' + data[count].site_id + ') </td>';

            html += '<td>' + data[count].status + '</td>';
            // html += '<td>' + data[count].remark + '</td>';
            html += '<td>' + data[count].npa_config_status + '</td>';
            //  html += '<td>' + data[count].npa_remark + '</td>';
            html += '<td>' + data[count].cs_config_status + '</td>';
            // html += '<td>' + data[count].cs_remark + '</td>';
            html += '<td>' + data[count].pcn_config_status + '</td></tr>';


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

    $('#search').keyup(function() {
      var search = $(this).val();
      if (search != '') {
        fetch_data(search);
      } else {
        fetch_data();
      }
    });

    $(document).on('click', '.check_box', function() {
      var html = '';
      if (this.checked) {

        html = '<td><input type="checkbox" id="' + $(this).attr('id') + '" data-vendor="' + $(this).data('vendor') + '" data-site_id="' + $(this).data('site_id') + '" data-type="' + $(this).data('type') + '" data-band="' + $(this).data('band') + '" data-site_name="' + $(this).data('site_name') + '" data-activation_informed_by="' + $(this).data('activation_informed_by') + '" data-wp="' + $(this).data('wp') + '" data-status="' + $(this).data('status') + '" data-npa_remark="' + $(this).data('npa_remark') + '" data-npa_config_status="' + $(this).data('npa_config_status') + '" data-cs_config_status="' + $(this).data('cs_config_status') + '" data-cs_remark="' + $(this).data('cs_remark') + '" data-pcn_config_status="' + $(this).data('pcn_config_status') + '" data-pcn_remark="' + $(this).data('pcn_remark') + '" data-activated_date="' + $(this).data('activated_date') + '" data-on_air="' + $(this).data('on_air') + '" data-sms="' + $(this).data('sms') + '" class="check_box" checked /></td>';
        html += '<td><input type="hidden" name="vendor[]" class="form-control" value="' + $(this).data("vendor") + '" />' + $(this).data("vendor") + '</td>';
        html += '<td><input type="hidden" name="site_id[]" class="form-control" value="' + $(this).data("site_id") + '" />' + $(this).data("site_id") + '</td>';
        html += '<td><input type="hidden" name="type[]" class="form-control" value="' + $(this).data("type") + '" />' + $(this).data("type") + '</td>';
        html += '<td><input type="hidden" name="band[]" class="form-control" value="' + $(this).data("band") + '" />' + $(this).data("band") + '</td>';
        html += '<td><input type="hidden" name="wp[]" class="form-control" value="' + $(this).data("wp") + '" />' + $(this).data("wp") + '</td>';

        html += '<td><input type="text" name="site_name[]" class="form-control" value="' + $(this).data("site_name") + '" />' + $(this).data("site_name") + '</td>';
        html += '<td><input type="text" name="activation_informed_by[]" class="form-control" value="' + $(this).data("activation_informed_by") + '" />' + $(this).data("activation_informed_by") + '</td>';
        html += '<td><select name="on_air[]" class="form-control"><option value="' + $(this).data("on_air") + '"selected>Choose...</option><option value="Done">Done</option><option value="Reject">Reject</option></select></td>';
        html += '<td>New ' + $(this).data("vendor") + ' ' + $(this).data("band") + ' ' + $(this).data("type") + ' on air at ' + $(this).data("site_name") + ' (' + $(this).data("site_id") + ')<hr><input type="text" name="sms[]" class="form-control" value="' + $(this).data("sms") + '" />' + $(this).data("sms") + '</td>';
        // New ' + $(this).data("vendor") + ' ' + $(this).data("band") + ' ' + $(this).data("type") + ' on air at ' + $(this).data("site_name") + ' (' + $(this).data("site_id") + ')

        html += '<td><input type="hidden" name="status[]" class="form-control" value="' + $(this).data("status") + '" />' + $(this).data("status") + '</td>';
        html += '<td><input type="hidden" name="npa_config_status[]" class="form-control" value="' + $(this).data("npa_config_status") + '" />' + $(this).data("npa_config_status") + '</td>';
        html += '<td><input type="hidden" name="cs_config_status[]" class="form-control" value="' + $(this).data("cs_config_status") + '" />' + $(this).data("cs_config_status") + '</td>';
        html += '<td><input type="hidden" name="pcn_config_status[]" class="form-control" value="' + $(this).data("pcn_config_status") + '" />' + $(this).data("pcn_config_status") + '</td>';


        html += '<input type="hidden" name="hidden_id[]" value="' + $(this).attr('id') + '" /></td>';


      } else {
        html = '<td><input type="checkbox" id="' + $(this).attr('id') + '" data-vendor="' + $(this).data('vendor') + '" data-site_id="' + $(this).data('site_id') + '" data-type="' + $(this).data('type') + '" data-band="' + $(this).data('band') + '" data-site_name="' + $(this).data('site_name') + '" data-activation_informed_by="' + $(this).data('activation_informed_by') + '" data-wp="' + $(this).data('wp') + '" data-status="' + $(this).data('status') + '" data-remark="' + $(this).data('remark') + '"  data-npa_config_status="' + $(this).data('npa_config_status') + '" data-cs_config_status="' + $(this).data('cs_config_status') + '" data-cs_remark="' + $(this).data('cs_remark') + '" data-pcn_config_status="' + $(this).data('pcn_config_status') + '" data-pcn_remark="' + $(this).data('pcn_remark') + '" data-on_air="' + $(this).data('on_air') + '" data-sms="' + $(this).data('sms') + '" class="check_box" /></td>';
        html += '<td>' + $(this).data('vendor') + '</td>';
        html += '<td>' + $(this).data('site_id') + '</td>';
        html += '<td>' + $(this).data('type') + '</td>';
        html += '<td>' + $(this).data('band') + '</td>';
        html += '<td>' + $(this).data('wp') + '</td>';

        html += '<td>' + $(this).data('site_name') + '</td>';
        html += '<td>' + $(this).data('activation_informed_by') + '</td>';
        html += '<td>' + $(this).data('on_air') + '</td>';
        html += '<td>' + $(this).data('sms') + '</td>';

        html += '<td>' + $(this).data('status') + '</td>';
        // html += '<td>' + $(this).data('remark') + '</td>';
        html += '<td>' + $(this).data('npa_config_status') + '</td>';
        // html += '<td>' + $(this).data('npa_remark') + '</td>';
        html += '<td>' + $(this).data('cs_config_status') + '</td>';
        // html += '<td>' + $(this).data('cs_remark') + '</td>';
        html += '<td>' + $(this).data('pcn_config_status') + '</td>';

      }
      $(this).closest('tr').html(html);
      $('#on_air' + $(this).attr('id') + '').val($(this).data('on_air'));
      //  $('#deblock'+$(this).attr('id')+'').val($(this).data('deblock'));
    });

    $('#update_form').on('submit', function(event) {
      event.preventDefault();
      if ($('.check_box:checked').length > 0) {
        $.ajax({
          url: "multiple_update_INOC.php",
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