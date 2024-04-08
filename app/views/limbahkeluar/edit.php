  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Edit Data Limbah Keluar</h1>
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
              <form role="form" action="<?= base_url; ?>/limbahkeluar/updateLimbahkeluar" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['limbah_b3']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Jenis Limbah</label>
                    <input type="text" class="form-control" placeholder="masukkan jenis limbah..." name="jenis_limbah" value="<?= $data['limbah_b3']['jenis_limbah'];?>">
                  </div>
                  <div class="form-group">
                    <label >Nama Limbah</label>
                    <input type="text" class="form-control" placeholder="masukkan nama limbah..." name="nama_limbah" value="<?= $data['limbah_b3']['nama_limbah'];?>">
                  </div>
                  <div class="form-group">
                    <label >Tanggal Keluar</label>
                    <input type="date" class="form-control" name="tgl_keluar" value="<?= $data['limbah_b3']['tgl_keluar'];?>">
                  </div>
                  <div class="form-group">
                    <label >Area</label>
                    <input type="text" class="form-control" placeholder="masukkan area limbah..." name="area" value="<?= $data['limbah_b3']['area'];?>">
                  </div>
                  <div class="form-group">
                    <label >Kode Line</label>
                    <input type="text" class="form-control" placeholder="masukkan kode line..." name="kode_limbah" value="<?= $data['limbah_b3']['kode_line'];?>">
                  </div>
                  <div class="form-group">
                    <label >Jumbah Limbah Keluar</label>
                    <input type="text" class="form-control" placeholder="masukkan jumlah limbah masuk..." name="jml_limbah_keluar" value="<?= $data['limbah_b3']['jml_limbah_keluar'];?>">
                  </div>
                  <div class="form-group">
                    <label >No Manifest</label>
                    <input type="text" class="form-control" placeholder="masukkan no manifest..." name="no_manifest" value="<?= $data['limbah_b3']['no_manifest'];?>">
                  </div>
                  <div class="form-group">
                    <label >Nama Transporter</label>
                    <input type="text" class="form-control" placeholder="masukkan nama transporter..." name="nama_transporter" value="<?= $data['limbah_b3']['nama_transporter'];?>">
                  </div>
                  <div class="form-group">
                    <label >No Kendaraan</label>
                    <input type="text" class="form-control" placeholder="masukkan no kendaraan..." name="no_kendaraan" value="<?= $data['limbah_b3']['no_kendaraan'];?>">
                  </div>
                  <div class="form-group">
                    <label >Masa Dishub</label>
                    <input type="date" class="form-control" name="masa_dishub" value="<?= $data['limbah_b3']['masa_dishub'];?>">
                  </div>
                  <div class="form-group">
                    <label >No Batch</label>
                    <input type="text" class="form-control" placeholder="masukkan no batch..." name="no_batch" value="<?= $data['limbah_b3']['no_batch'];?>">
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