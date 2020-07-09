<?php 

$hasil = $data->getDb()->query("SELECT * FROM mapel");
$mapel = $hasil->fetchAll();

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Materi Pembelajaran</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Materi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="test.php" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Pilih Kelas</label>
                        <select class="form-control" name="level">
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilih Mata Pelajaran</label>
                        <select class="form-control" name="mapel">
                          <?php
                            foreach ($mapel as $m) :
                          ?>
                          <option value="<?= $m['kode']; ?>"><?= $m['nama']; ?></option>
                          <?php
                            endforeach;
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Video</label>
                    <input type="text" class="form-control" placeholder="Masukkan link video di sini..." name="video">
                  </div>
                  <div class="form-group">
                    <label>Judul Materi</label>
                    <input type="text" class="form-control" placeholder="Isi judul materi.." name="judul_materi">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi singkat</label>
                    <textarea class="form-control" rows="4" placeholder="Masukkan deskripsi singkat untuk materi ini.." name="deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                        <label class="custom-file-label" for="exampleInputFile">Masukkan file materi</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Materi</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul Materi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $materi = $data->tampilMateribyGuru($username);
                      $no = 1;
                      foreach ($materi as $mt) :
                    ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $mt['materi']; ?></td>
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php
                      $no++;
                      endforeach;
                    ?>
                  </tbody>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->