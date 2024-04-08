  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Data Limbah Masuk</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <div class="btn-group float-right">
            <a href="<?= base_url; ?>/limbahmasuk/tambah" class="btn float-right btn-xs btn btn-primary">Input Limbah Masuk</a>
            <a href="<?= base_url; ?>/limbahmasuk/laporan" class="btn float-right btn-xs btn btn-info">Laporan Limbah Masuk</a>
            <a href="<?= base_url; ?>/limbahmasuk/lihatlaporan" class="btn float-right btn-xs btn btn-warning">Lihat Laporan Limbah Masuk</a>
          </div>
        </div>
        <div class="card-body">
        
      <form action="<?= base_url; ?>/limbahmasuk/cari" method="post">
 <div class="row mb-3">
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="" name="key" >
    <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
          <a class="btn btn-outline-danger" href="<?= base_url; ?>/limbahmasuk" >Reset</a>
    </div>
  </div>

  </div>
</div>
    </form>
          <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Jenis Limbah</th>
                      <th>Nama Limbah</th>
                      <th>tanggal Masuk</th>
                      <th>Area Limbah</th>
                      <th>Kode Line</th>
                      <th>Jumlah Limbah</th>
                      <th>No Manifest</th>
                      <th>Nama Transporter</th>
                      <th>No Kendaraan</th>
                      <th>Masa Dishub</th>
                      <th>No Batch</th>
                      <th style="width: 150px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?> 
                    <?php foreach ($data['limbah_masuk'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['jenis_limbah'];?></td>
                      <td><?= $row['nama_limbah'];?></td>
                      <td><?= $row['tgl_masuk'];?></td>
                      <td><?= $row['area'];?></td>
                      <td><?= $row['kode_line'];?></td>
                      <td><?= $row['jml_limbah_masuk'];?></td>
                      <td><?= $row['no_manifest'];?></td>
                      <td><?= $row['nama_transporter'];?></td>
                      <td><?= $row['no_kendaraan'];?></td>
                      <td><?= $row['masa_dishub'];?></td>
                      <td><?= $row['no_batch'];?></td>
                      <td>
                        <a href="<?= base_url; ?>/limbahmasuk/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a> 
                        <a href="<?= base_url; ?>/limbahmasuk/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

