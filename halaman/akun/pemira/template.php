<?php
$data = new database();

$query = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = '$username'");
$user = $query->fetchAll();

foreach ($user as $u) {
  $user_name = $u['user_name'];
  $nama = htmlentities($u['nama_lengkap'],ENT_QUOTES);
  $kelas = $u['kelas'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <title>Pemira | HK</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">&nbsp Selamat Datang, <?= strtoupper($nama); ?> di PEMILIHAN RAYA 2020. Silahkan tentukan pilihanmu!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
              <li class="pt-2 px-3"><h5 class="card-title">Silahkan pilih peserta</h5></li>
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Pemilihan Ketua DE-OSHK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Pemilihan Ketua MPS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Pemilihan Ketua DE-OSHK MTs</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-two-tabContent">
              <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                <?php 
                  $cari = $data->getDb()->query("SELECT * FROM hasil_oshk_ma WHERE siswa_user_name = '$user_name'");
                  $vote = $cari->fetchAll();
                  $row = count($vote);

                  if ($row > 0) :
                    $hitung = $data->getDb()->query("SELECT * FROM hasil_oshk_ma");
                    $jml = $hitung->fetchAll();
                    $total = count($jml);
                ?>
                <div class="row col-md-12">
                  <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <p> Terima kasih. Anda sudah berhasil memilih.</p>
                        <h3>TOTAL SUARA MASUK : <?= $total; ?> Suara</h3>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <?php else: ?>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="oshk/zhafif.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                      <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="1">
                      <h3 class="card-title">Muhammad Zhafif Naufal Azhar</h3>
                      <p class="card-text">Kelas : XI IPS 1</p>
                      <p class="card-text">Asal  : Depok</p>
                      <p class="card-text">TTL : Jakarta, 5 November 2004</p>
                      <p class="card-text">Hobi  : Memotret, Menyendja</p>
                      <p class="card-text">Motto Hidup : <i>Intinya berarti, ga ribet, ga susah, cukup peduli</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/azra.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="2">
                      <h3 class="card-title">Azyumardi Azra Munawir</h3>
                      <p class="card-text">Kelas : XI PK 2</p>
                      <p class="card-text">Asal  : Indramayu</p>
                      <p class="card-text">TTL : Indramayu, 1 November 2003</p>
                      <p class="card-text">Hobi  : Fitness</p>
                      <p class="card-text">Motto Hidup : <i>Hidup Sekali Hidup yang berarti</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/ilyasa.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="3">
                      <h3 class="card-title">Ilyasa Syammas</h3>
                      <p class="card-text">Kelas : XI PK 1</p>
                      <p class="card-text">Asal  : Depok</p>
                      <p class="card-text">TTL : Jakarta, 23 Juni 2004</p>
                      <p class="card-text">Hobi  : Baca Buku</p>
                      <p class="card-text">Motto Hidup : <i>Ini Hidupmu lakukan sesuka- mu, jangan lupakan yang membantumu</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/rizq.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="4">
                      <h3 class="card-title">Muhammad Rizq Mubarak</h3>
                      <p class="card-text">Kelas : XI PK 2</p>
                      <p class="card-text">Asal  : DKI Jakarta</p>
                      <p class="card-text">TTL : Jakarta, 5 Juni 2004</p>
                      <p class="card-text">Hobi  : Basket, Sosial</p>
                      <p class="card-text">Motto Hidup : <i>You do what you have to do</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="oshk/hakim.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                      <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="5">
                      <h3 class="card-title">Hakim Mutiara Hati</h3>
                      <p class="card-text">Kelas : XI PK 3</p>
                      <p class="card-text">Asal  : Ponorogo</p>
                      <p class="card-text">TTL : 25 April 2002</p>
                      <p class="card-text">Hobi  : Olahraga</p>
                      <p class="card-text">Motto Hidup : <i>Khoirunnas Anfa’uhum Linnas</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/anwar.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="6">
                      <h3 class="card-title">Muhammad Anwar Fajri</h3>
                      <p class="card-text">Kelas : XI PK 2</p>
                      <p class="card-text">Asal  : Bekasi</p>
                      <p class="card-text">TTL : Bekasi, 16 Januari 2004</p>
                      <p class="card-text">Hobi  : Berkarya</p>
                      <p class="card-text">Motto Hidup : <i>Saya dilahirkan dari ummat, ada untuk ummat, dan harus siap mengabdi pada ummat</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/avicena.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="7">
                      <h3 class="card-title">Avicenna Mujtahid Nasawi</h3>
                      <p class="card-text">Kelas : XI IPA 4</p>
                      <p class="card-text">Asal  : Bandung</p>
                      <p class="card-text">TTL : Bandung, 9 Desember 2004</p>
                      <p class="card-text">Hobi  : Travelling</p>
                      <p class="card-text">Motto Hidup : <i>Hidup manfaat dan tidak membebani</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/ardi.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="8">
                      <h3 class="card-title">Hafizh Ardi Imawan</h3>
                      <p class="card-text">Kelas : XI PK 1</p>
                      <p class="card-text">Asal  : Bogor</p>
                      <p class="card-text">TTL : Bogor, 25 Mei 2003</p>
                      <p class="card-text">Hobi  : Berpikir</p>
                      <p class="card-text">Motto Hidup : <i>Hiduplah sebagaimana mestinya</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="oshk/ikbaar.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                      <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="9">
                      <h3 class="card-title">Muhammad Ikbaar Al Islami</h3>
                      <p class="card-text">Kelas : XI IPS 1</p>
                      <p class="card-text">Asal  : Belitung</p>
                      <p class="card-text">TTL : Kalapa Kampit, 18 Desember 2004</p>
                      <p class="card-text">Hobi  : Menulis Puisi</p>
                      <p class="card-text">Motto Hidup : <i>Kau adalah yang kau pikirkan,bukan yang orang katakan</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="oshk/yusuf.jpg" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-ma.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="10">
                      <h3 class="card-title">Yusuf Hafidzun Alim</h3>
                      <p class="card-text">Kelas : XI IPA 1</p>
                      <p class="card-text">Asal  : Karawang</p>
                      <p class="card-text">TTL : Karawang, 15 Juli 2004</p>
                      <p class="card-text">Hobi  : Main Bola</p>
                      <p class="card-text">Motto Hidup : <i>Higienis di dalam, Tangguh di luar”</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                <?php 
                  $cari = $data->getDb()->query("SELECT * FROM hasil_mps WHERE siswa_user_name = '$user_name'");
                  $vote = $cari->fetchAll();
                  $row = count($vote);

                  if ($row > 0) :
                    $hitung = $data->getDb()->query("SELECT * FROM hasil_mps");
                    $jml = $hitung->fetchAll();
                    $totalmps = count($jml);
                ?>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <p> Terima kasih. Anda sudah berhasil memilih.</p>
                        <h3>TOTAL SUARA MASUK : <?= $totalmps; ?> Suara</h3>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                <?php else: ?>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="mps/fajri.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="1">
                      <h3 class="card-title">Muhammad Rizky Al Fajri</h3>
                      <p class="card-text">Kelas : X PK 2</p>
                      <p class="card-text">Asal  : Cilegon</p>
                      <p class="card-text">TTL : - </p>
                      <p class="card-text">Hobi  : Corat-coret Kertas</p>
                      <p class="card-text">Motto Hidup : <i>Bermimpilah setingi-tingginya, Berekspektasi Sewajarnya</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/hayyi.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="2">
                      <h3 class="card-title">Shafwat Abdul Hayyi Syuaib</h3>
                      <p class="card-text">Kelas : X IPA 2</p>
                      <p class="card-text">Asal  : Depok</p>
                      <p class="card-text">TTL : Jakarta, 17 Juni 2005</p>
                      <p class="card-text">Hobi  : -</p>
                      <p class="card-text">Motto Hidup : <i>Hidup Cuma Sekali, Hidup yang berarti</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/rayhan.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="3">
                      <h3 class="card-title">Rayhan Dwi Septya Fathin</h3>
                      <p class="card-text">Kelas : X IPA 2</p>
                      <p class="card-text">Asal  : Jakarta</p>
                      <p class="card-text">TTL : Jakarta, 17 September 2004</p>
                      <p class="card-text">Hobi  : Futsal</p>
                      <p class="card-text">Motto Hidup : <i>Play Hard, Study Hard, IstiraHard</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/azam.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="4">
                      <h3 class="card-title">Muhammad Abdullah Al-Azam</h3>
                      <p class="card-text">Kelas : X IPA 2</p>
                      <p class="card-text">Asal  : Garut</p>
                      <p class="card-text">TTL : 20 September 2004</p>
                      <p class="card-text">Hobi  : -</p>
                      <p class="card-text">Motto Hidup : <i>Want Get Rick Rolled</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="mps/alaudin.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="5">
                      <h3 class="card-title">Muhammad Azzam Alaudin</h3>
                      <p class="card-text">Kelas : X IPA 2</p>
                      <p class="card-text">Asal  : Bogor</p>
                      <p class="card-text">TTL : Bogor, 11 Maret 2004</p>
                      <p class="card-text">Hobi  : Baca</p>
                      <p class="card-text">Motto Hidup : <i>Faidza Azamta Fatawakkal Alallah</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/jundi.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="6">
                      <h3 class="card-title">Muhammad Jundi Al-Muhandis</h3>
                      <p class="card-text">Kelas : X IPA 2</p>
                      <p class="card-text">Asal  : Bandung</p>
                      <p class="card-text">TTL : Bandung, 2 Agustus 2005</p>
                      <p class="card-text">Hobi  : Membaca Buku</p>
                      <p class="card-text">Motto Hidup : <i>-</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/naufal.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="7">
                      <h3 class="card-title">Ikhlasul Amal An Naufal</h3>
                      <p class="card-text">Kelas : X PK 2</p>
                      <p class="card-text">Asal  : Lampung</p>
                      <p class="card-text">TTL : Hargomulyo, 21 Juni 2004</p>
                      <p class="card-text">Hobi  : Membaca, Futsal</p>
                      <p class="card-text">Motto Hidup : <i>Tak kenal Lelah, Pantang Menyerah, Terus bekerja agar tak rapuh dan jatuh,seperti halnya mengayuh sepeda, jika tak dikayuh maka akan jatuh, bersatu padu, ikhlas membantu</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/adzka.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="8">
                      <h3 class="card-title">Adzka Hifdzulhaq</h3>
                      <p class="card-text">Kelas : X IPA 3</p>
                      <p class="card-text">Asal  : Bogor</p>
                      <p class="card-text">TTL : Bogor, 18 April 2005</p>
                      <p class="card-text">Hobi  : Membaca dan Diskusi</p>
                      <p class="card-text">Motto Hidup : <i>Yang terpenting bukanlah kita di menang atau kalah, tapi kita di pihak benar atau salah</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="mps/irgi.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="9">
                      <h3 class="card-title">Irgi Madjid Al Farezi Siregar</h3>
                      <p class="card-text">Kelas : X IPA 6</p>
                      <p class="card-text">Asal  : Bandung</p>
                      <p class="card-text">TTL : Bekasi, 24 Oktober 2004</p>
                      <p class="card-text">Hobi  : Membaca</p>
                      <p class="card-text">Motto Hidup : <i>Terkadang kita harus mundur selangkah Untuk Melangkah Lebih Jauh</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="mps/khalid.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-mps.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="10">
                      <h3 class="card-title">Khalid Raspati Abdulaziz</h3>
                      <p class="card-text">Kelas : X IPS 1</p>
                      <p class="card-text">Asal  : Bandung Barat</p>
                      <p class="card-text">TTL : Bandung, 31 Mei 2005</p>
                      <p class="card-text">Hobi  : Travelling</p>
                      <p class="card-text">Motto Hidup : <i>Tidak Ada Yang Bertahan Selamanya, Kita bisa Merubah Masa Depan</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                <?php 
                  $cari = $data->getDb()->query("SELECT * FROM hasil_oshk_mts WHERE siswa_user_name = '$user_name'");
                  $vote = $cari->fetchAll();
                  $row = count($vote);

                  if ($row > 0) :
                    $hitung = $data->getDb()->query("SELECT * FROM hasil_oshk_mts");
                    $jml = $hitung->fetchAll();
                    $totalmts = count($jml);
                ?>
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <p> Terima kasih. Anda sudah berhasil memilih.</p>
                        <h3>TOTAL SUARA MASUK : <?= $totalmts; ?> Suara</h3>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                <?php else: ?>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="osju/syauqi.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="1">
                      <h3 class="card-title">Syauqi Mumtaz Mujahid</h3>
                      <p class="card-text">Kelas : VIII C</p>
                      <p class="card-text">Asal  : Cirebon Kota</p>
                      <p class="card-text">TTL : Cirebon, 6 Agustus 2007</p>
                      <p class="card-text">Hobi  : Dengar Ceramah ustadz</p>
                      <p class="card-text">Motto Hidup : <i>Berlaku Adil-lah, Karena Adil itu lebih dekat kepada Allah</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/sayyid.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="2">
                      <h3 class="card-title">Sayyid Muhammad Muslim</h3>
                      <p class="card-text">Kelas : VIII C</p>
                      <p class="card-text">Asal  : Tangerrang Kota</p>
                      <p class="card-text">TTL : Banyuwangi, 12 Maret 2007</p>
                      <p class="card-text">Hobi  : Mengaji, Membaca, Main Musik</p>
                      <p class="card-text">Motto Hidup : <i>Bahagia itu Sederhana</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/fahmi.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="3">
                      <h3 class="card-title">Fahmi Farhatan Yusuf</h3>
                      <p class="card-text">Kelas : VIII A</p>
                      <p class="card-text">Asal  : Majalengka</p>
                      <p class="card-text">TTL : Majalengka, 24 Desember 2007</p>
                      <p class="card-text">Hobi  : Futsal, Nyanyi</p>
                      <p class="card-text">Motto Hidup : <i>Jangan pikirkan kemarin hari ini sudah lain, kesuksesan akan diaraih selama semangat masih menyengat</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/royyan.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="4">
                      <h3 class="card-title">Muhammad Royyan Sigmadina</h3>
                      <p class="card-text">Kelas : VIII B</p>
                      <p class="card-text">Asal  : Jakarta  Pusat</p>
                      <p class="card-text">TTL : Jakarta, 11 Desember 2006</p>
                      <p class="card-text">Hobi  : Membaca</p>
                      <p class="card-text">Motto Hidup : <i>Talk Less, Work More</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="osju/mirza.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="5">
                      <h3 class="card-title">Muhammad Mirza Dwisahman</h3>
                      <p class="card-text">Kelas : VIII A</p>
                      <p class="card-text">Asal  : Cirebon</p>
                      <p class="card-text">TTL : Cirebon, 3 Januari 2007</p>
                      <p class="card-text">Hobi  : Baca Buku</p>
                      <p class="card-text">Motto Hidup : <i>Ingat Allah, Maka Allah akan selalu mengingat hambanya yang beriman</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/sudais.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="6">
                      <h3 class="card-title">Sudais Al-Huzaifi Robbani</h3>
                      <p class="card-text">Kelas : VIII C</p>
                      <p class="card-text">Asal  : Bandung</p>
                      <p class="card-text">TTL : -</p>
                      <p class="card-text">Hobi  : Main Sepak Bola</p>
                      <p class="card-text">Motto Hidup : <i>Sukses tidak diraih di Zona Nyaman </i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/abdurrahman.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="7">
                      <h3 class="card-title">Fahmi Abdurrahman</h3>
                      <p class="card-text">Kelas : VIII C</p>
                      <p class="card-text">Asal  : Bekasi Kota</p>
                      <p class="card-text">TTL : Jakarta,10 Maret 2007</p>
                      <p class="card-text">Hobi  : Main Bola, Memelihara Hewan</p>
                      <p class="card-text">Motto Hidup : <i>Kesempatan bukanlah Hal Yang kebetulan kau harus menciptakannya</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                  <div class="card col-md-3">
                    <img src="osju/atsal.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                        <input type="hidden" name="nourut" value="8">
                      <h3 class="card-title">Atsal Aufa Siregar</h3>
                      <p class="card-text">Kelas : VIII B</p>
                      <p class="card-text">Asal  : Medan</p>
                      <p class="card-text">TTL : Medan, 24 Desember  2007</p>
                      <p class="card-text">Hobi  : Bermain</p>
                      <p class="card-text">Motto Hidup : <i>Hidup adalah Perjuangan</i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="card col-md-3">
                    <img src="osju/hanif.png" class="card-img-top">
                    <div class="card-body">
                      <form method="post" action="proses-oshk-mts.php">
                        <input type="hidden" name="nama" value="<?= $user_name; ?>">
                      <input type="hidden" name="nourut" value="9">
                      <h3 class="card-title">Indriyan Hanif Adiyatma</h3>
                      <p class="card-text">Kelas : VIII A</p>
                      <p class="card-text">Asal  : Bogor</p>
                      <p class="card-text">TTL : Bekasi, 23 September 2006</p>
                      <p class="card-text">Hobi  : Baca Buku, Main Bola</p>
                      <p class="card-text">Motto Hidup : <i>Tidak ada yang mustahil, yang ada hanya malas untuk mencoba dan berusaha. Kalau mau  berusaha dan berdo’a kepada Allah yang maha kuasa, niatkan Lillahi ta’ala, Insya Allah Bisa </i></p>
                      <button class="btn btn-primary" type="submit">Pilih</button>
                      </form>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <a href="logout.php" class="btn btn-primary btn-flat">LOGOUT</a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>