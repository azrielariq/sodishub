 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $this->session->userdata('session_data')['level'] ?></a></li>
        <li class="active">View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_atk ?></h3>

              <p>Stock - ATK</p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="<?php echo base_url() ?>admin/barang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_kebersihan ?></h3>

              <p>Stock - Alat Kebersihan</p>
            </div>
            <div class="icon">
              <i class="fa fa-eraser"></i>
            </div>
            <a href="<?php echo base_url() ?>admin/barang/kebersihan" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_cetak ?></h3>

              <p>Stock - Barang Cetak</p>
            </div>
            <div class="icon">
              <i class="fa fa-print"></i>
            </div>
            <a href="<?php echo base_url() ?>admin/barang/cetak" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_listrik ?></h3>

              <p>Stock - Listrik</p>
            </div>
            <div class="icon">
              <i class="fa fa-flash"></i>
            </div>
            <a href="<?php echo base_url() ?>admin/barang/listrik" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->