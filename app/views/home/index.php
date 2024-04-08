<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Utama</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Cards -->
    <div class="row">
      <!-- Red Card -->
      <div class="col-md-6">
        <div class="card card-red">
          <div class="card-header">
            <h3 class="card-title">LIMBAH MASUK</h3>
          </div>
          <div class="card-body">
            TOTAL : <?php echo $data['total_qty_masuk']; ?> KG
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <!-- Green Card -->
      <div class="col-md-6">
        <div class="card card-green">
          <div class="card-header">
            <h3 class="card-title">LIMBAH KELUAR</h3>
          </div>
          <div class="card-body">
            TOTAL : <?php echo $data['total_qty_keluar']; ?> KG
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
