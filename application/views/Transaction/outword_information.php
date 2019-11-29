<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>OUTWORD INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 ">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Outword Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Transaction/save_outword" method="POST" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="outword_dc_num" id="outword_dc_num" value="<?php  if(isset($outword_dc_num)){ echo $outword_dc_num; }?>" placeholder="DC No" readonly>
                  </div>
                  <div class="form-group col-md-4 ">
                    <input type="text" class="form-control form-control-sm" name="outword_date" id="date1" data-target="#date1" data-toggle="datetimepicker" placeholder="Date">
                  </div>
                  <div class="form-group col-md-4 offset-md-2">
                    <input type="text" class="form-control form-control-sm" name="outword_E_no" id="outword_E_no" value="<?php  if(isset($outword_E_no)){ echo $outword_E_no; }?>" placeholder="Eway Bill No.">
                  </div>
                  <div class="form-group col-md-4 ">
                    <input type="text" class="form-control form-control-sm" name="outword_E_date" id="date2" data-target="#date2" data-toggle="datetimepicker" placeholder="Eway Bill Date">
                  </div>
                  <div class="form-group drop-sm col-md-8 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="party_id" id="party_id" required>
                      <option selected="selected" value="" >Select Party Name </option>
                      <?php foreach ($party_list as $party_list1) { ?>
                        <option value="<?php echo $party_list1->party_id; ?>" <?php if(isset($party_id)){ if($party_list1->party_id == $party_id){ echo "selected"; } }  ?>><?php echo $party_list1->party_name; ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-4 offset-md-2">
                    <select class="form-control select2 form-control-sm" name="vehicle_id" id="vehicle_id" required>
                      <option selected="selected">Select Vehicle No</option>
                      <?php foreach ($vehicle_list as $vehicle_list1) { ?>
                        <option value="<?php echo $vehicle_list1->vehicle_id; ?>" <?php if(isset($vehicle_id)){ if($vehicle_list1->vehicle_id == $vehicle_id){ echo "selected"; } }  ?>><?php echo $vehicle_list1->vehicle_number; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4 ">
                    <input type="text" class="form-control form-control-sm" name="outword_trans" id="outword_trans" placeholder="Transport Name">
                  </div>
                  <div class="form-group col-md-12">
                    <hr>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="">  <h3 class="card-title">Item Details</h3> </label>
                  </div>

                  <!-- <div class="form-group col-md-3 text-right">
                    <button id="add_row" type="button" class="btn btn-sm btn-primary"> Add More</button>
                  </div> -->

                  <!-- Add Row -->
                  <div class="col-md-12" id="myRow">
                    <div class="" style="overflow-x:auto;">
                      <table id="myTable" class="table table-bordered table-striped tbl_add" style="">
                        <thead>
                        <tr>
                          <th>Item</th>
                          <th>Remark</th>
                          <th class="td_w">Gst</th>
                          <th class="td_w">Qty</th>
                          <th class="td_w">Rate</th>
                          <th class="td_w">Amount</th>
                          <th class="td_btn"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>
                            <select class="form-control form-control-sm item_list" name="input[0][item_info_id]" required>
                              <option selected="selected">Select Item Name</option>
                              <?php foreach ($item_list as $item_list1) { ?>
                                <option value="<?php echo $item_list1->item_info_id; ?>" <?php //if(isset($item_info_id)){ if($item_list1->item_info_id == $item_info_id){ echo "selected"; } }  ?>><?php echo $item_list1->item_info_name; ?></option>
                              <?php } ?>
                            </select>
                            <p class="text-danger stock"><span ></span></p>

                          </td>
                          <td>
                            <select class="form-control form-control-sm" name="input[0][remark_id]" required>
                              <option selected="selected">Select Remark</option>
                              <?php foreach ($remark_list as $remark_list1) { ?>
                                <option value="<?php echo $remark_list1->remark_id; ?>" <?php //if(isset($remark_id)){ if($remark_list1->remark_id == $remark_id){ echo "selected"; } }  ?>><?php echo $remark_list1->remark_name; ?></option>
                              <?php } ?>
                            </select>
                          </td>
                          <td class="td_w">
                            <input type="number" min="0" class="form-control form-control-sm gst gst" name="input[0][gst]" placeholder="Gst" readonly>
                          </td>
                          <td class="td_w">
                            <input type="number" min="1" class="form-control form-control-sm qty" name="input[0][qty]" placeholder="Qty" required>
                            <input type="hidden" class="form-control form-control-sm gst gst_amount" name="input[0][gst_amount]" >
                          <td class="td_w">
                            <input type="number" min="1" class="form-control form-control-sm rate" name="input[0][rate]" placeholder="Rate" required>
                          </td>
                          <td class="td_w">
                            <input type="text" readonly class="form-control form-control-sm amount" name="input[0][amount]" placeholder="Amount" required>
                          </td>
                          <td></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- // Add Row -->
                  <div class="form-group col-md-3 offset-md-9">
                    <input type="text" class="form-control form-control-sm" name="outword_basic_amt" id="outword_basic_amt" placeholder="Basic Amount" readonly>
                  </div>
                  <div class="form-group col-md-3 offset-md-9">
                    <input type="text" class="form-control form-control-sm" name="outword_gst" id="outword_gst" placeholder="GST Amount" readonly>
                  </div>
                  <div class="form-group col-md-3 offset-md-9">
                    <input type="text" class="form-control form-control-sm" name="outword_net_amount" id="outword_net_amount" placeholder="Net Amount" readonly>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer ">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-success">Add Outword </button>
                    <button type="submit" class="btn btn-default ml-4">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

  <script type="text/javascript">
  <?php if(isset($update)){ ?>
    var i = <?php echo $i; ?>
  <?php } else { ?>
  var i = 0;
  <?php } ?>
    $('#add_row').click(function(){
      i++;
      var row = '<tr>'+
            '<td>'+
              '<select class="form-control form-control-sm item_list" name="input[0][item_info_id]" required>'+
                '<option selected="selected">Select Item Name</option>'+
                <?php foreach ($item_list as $item_list1) { ?>
                  '<option value="<?php echo $item_list1->item_info_id; ?>" <?php //if(isset($item_info_id)){ if($item_list1->item_info_id == $item_info_id){ echo "selected"; } }  ?>><?php echo $item_list1->item_info_name; ?></option>'+
                <?php } ?>
              '</select>'+
              '<span class="text-danger stock"></span>'+
            '</td>'+
            '<td>'+
              '<select class="form-control form-control-sm" name="input[0][remark_id]" required>'+
                '<option selected="selected">Select Remark</option>'+
                <?php foreach ($remark_list as $remark_list1) { ?>
                  '<option value="<?php echo $remark_list1->remark_id; ?>" <?php //if(isset($remark_id)){ if($remark_list1->remark_id == $remark_id){ echo "selected"; } }  ?>><?php echo $remark_list1->remark_name; ?></option>'+
                <?php } ?>
              '</select>'+
            '</td>'+
            '<td class="td_w">'+
              '<input type="number" min="0" class="form-control form-control-sm gst gst" name="input[0][gst]" placeholder="Gst" readonly>'+
            '</td>'+
            '<td class="td_w">'+
              '<input type="text" class="form-control form-control-sm qty" name="input[0][qty]" placeholder="Qty" required>'+
              '<input type="hidden" class="form-control form-control-sm gst gst_amount" name="input[0][gst_amount]" >'+
            '</td>'+
            '<td class="td_w">'+
              '<input type="text" class="form-control form-control-sm rate" name="input[0][rate]" placeholder="Rate" required>'+
            '</td>'+
            '<td class="td_w">'+
              '<input type="text" readonly class="form-control form-control-sm amount" name="input[0][amount]" placeholder="Amount" required>'+
            '</td>'+
            '<td><a><i class="fa fa-trash text-danger"></i></a></td>'+
          '</tr>';
      $('#myTable').append(row);
    });

    $('#myTable').on('click', 'a', function () {
      $(this).closest('tr').remove();
    });

    $("#myTable").on("change", "select.item_list", function(){
      var item_info_id = $(this).val();
      $.ajax({
        url: '<?php echo base_url(); ?>Transaction/GetItemInfo',
        type: "POST",
        data: {"item_info_id":item_info_id},
        context: this,
        success: function (result) {
          var data = JSON.parse(result);
          $(this).closest('tr').find('.rate').val(data['outword_rate']);
          $(this).closest('tr').find('.gst').val(data['gst_per']);
          $(this).closest('tr').find('.qty').val('');
          // alert(data['stock']);
          $(this).closest('tr').find('.stock').html('Available Stock : '+data['stock']);
        }
    	});
    });

    $('#myTable').on('change', 'input.qty, input.rate', function () {
      //alert();
      var gst =   $(this).closest('tr').find('.gst').val();
      var qty =   $(this).closest('tr').find('.qty').val();
      var rate =   $(this).closest('tr').find('.rate').val();
      if(gst == ''){
        gst = 0;
      }
      if(qty == ''){
        qty = 0;
      }
      if(rate == ''){
        rate = 0;
      }
      var gst = parseInt(gst);
      var qty = parseInt(qty);
      var rate = parseInt(rate);


      var amount_without_gst = qty * rate;
      var gst_amount = (gst/100) * amount_without_gst;
      var amount_with_gst = amount_without_gst + gst_amount;

      $(this).closest('tr').find('.amount').val(amount_without_gst.toFixed(2));
      $(this).closest('tr').find('.gst_amount').val(gst_amount.toFixed(2));

      var basic_amount = 0;
      $(".amount").each(function() {
          var amount = $(this).val();
          if(!isNaN(amount) && amount.length != 0) {
              basic_amount += parseFloat(amount);
          }
      });
      // alert(basic_amount);
      $('#outword_basic_amt').val(basic_amount.toFixed(2));
      //
      var gst_val = 0;
      $(".gst_amount").each(function() {
          var gst_amount = $(this).val();
          if(!isNaN(gst_amount) && gst_amount.length != 0) {
              gst_val += parseFloat(gst_amount);
          }
      });
      $('#outword_gst').val(gst_val.toFixed(2));

      var total_amount = basic_amount + gst_val;
      total_amount = Math.ceil(total_amount);
      $('#outword_net_amount').val(total_amount);
    });

    $('#myTable').on('keyup', 'input.qty', function () {

    });

  </script>

</body>
</html>