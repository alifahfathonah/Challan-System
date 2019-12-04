<!DOCTYPE html>
<html>
<?php //include('head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php //include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php //include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <hr>
        <h4 class="mb-3">Master Summary</h4>
        <div class="row">
          <!-- left column -->
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $item_count; ?></h3>
                <p>Item Information</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>User/item_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $party_count; ?></h3>
                <p> Party Information</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>User/party_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-md-2 col-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>10</h3>
                <p>Process Information</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>User/process_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $inword_count; ?></h3>
                <p>Inword Information <br></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Transaction/inword_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-md-2 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $outword_count; ?></h3>
                <p> Outword  Information</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Transaction/outword_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $vehicle_count; ?></h3>
                <p> Vehicle  Information</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>User/vehicle_information_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <hr>
        <br>
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title text-center"><i class="fa fa-list"></i> Stock Information</h3>
              <div class="card-tools">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Item Name</th>
                  <th>Balance/ Qty</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach ($item_stock_list as $item_list) {
                    $i++;
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $item_list->item_info_name; ?></td>
                      <td><?php echo $item_list->stock_bal_qty; ?></td>
                    </tr>
                <?php  } ?>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php //include('footer.php'); ?>
  <!-- Control Sidebar -->

<!-- ./wrapper -->

<?php //include('script.php') ?>
</body>
</html>
