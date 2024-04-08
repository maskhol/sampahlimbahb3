  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Data Limbah Keluar</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url; ?>/limbahkeluar/simpanLimbahkeluar" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Jenis Limbah</label>
                    <input type="text" class="form-control" placeholder="Masukan Jenis Limbah..." name="jenis_limbah">
                  </div>
                  <div class="form-group">
                    <label >Nama Limbah</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Limbah..." name="nama_limbah">
                  </div>
                  <div class="form-group">
                    <label >Tanggal keluar</label>
                    <input type="Date" class="form-control" name="tgl_keluar">
                  </div>
                  <div class="form-group">
                    <label >Area</label>
                    <input type="text" class="form-control" placeholder="Masukan Area Limbah..." name="area">
                  </div>
                  <div class="form-group">
                    <label >Kode Limbah</label>
                    <input type="text" class="form-control" placeholder="Masukan Kode Limbah..." name="kode_line">
                  </div>
                  <div class="form-group">
                    <label >Jumlah Limbah Keluar</label>
                    <input type="text" class="form-control" placeholder="Masukan Jumlah Limbah..." name="jml_limbah_keluar">
                  </div>
                  <div class="form-group">
                    <label >No Manifest</label>
                    <input type="text" class="form-control" placeholder="Masukan Nomer Manifest..." name="no_manifest">
                  </div>
                  <div class="form-group">
                    <label >Nama Transporter</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Transporter..." name="nama_transporter">
                  </div>
                  <div class="form-group">
                    <label >No Kendaraan</label>
                    <input type="text" class="form-control" placeholder="Masukan No Plat Kendaraan..." name="no_kendaraan">
                  </div>
                  <div class="form-group">
                    <label >Masa Berlaku Dihub</label>
                    <input type="Date" class="form-control" name="masa_dishub">
                  </div>
                  <div class="form-group">
                    <label >No Batch</label>
                    <input type="text" class="form-control" placeholder="masukan No Batch..." name="no_batch">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="javascript:history.go(-1)" class="btn btn-danger">Batal</a>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->