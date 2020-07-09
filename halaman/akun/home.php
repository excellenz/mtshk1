<?php 
// include "function.php";
// include "database.php";

$data = new database();

$query = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = $username");
$hasil = $query->fetchAll();

foreach ($hasil as $key) {
    # code...
    $pranama = $key['nama_lengkap'];
    $nama = htmlentities($pranama,ENT_QUOTES);
    $kelas = $key['kelas'];
    $no_absen = $key['indeks'];
    $r_kelas = strtolower(str_replace("-", "", $kelas));
    $r_no = $no_absen < 10 ? "0".$no_absen : $no_absen;
}
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">E - REPORT | <?= $nama." | ".$r_kelas; ?></h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
			
			<div class="row"> 
				<div class="col-md-12">
					<h3>Alhamdulillah PAT Online Telah Selesai</h3>
                    <p>Selamat kepada seluruh santri MTs Husnul Khotimah 2 Kuningan yang insyaAllah dirahmati Allah SWT. Alhamdulillah, Penilaian Akhir Tahun (PAT) Online tahun ajaran 2019/2020 telah selesai dilaksanakan. </p>
                    <p>Ini adalah halaman untuk mengakses raport secara daring. Silahkan klik menu di bawah untuk mengunduh raport pondok dan kemenag.</p>
                    <p>Semoga Allah SWT memberkahi kita semua dan semoga mendapatkan hasil terbaik.</p>

				</div>
			</div>
            <div class="row">
                <div class="skill-home">
                    <div class="skill-home-solid clearfix">
                        <div class="col-md-6 text-center">
                            <span class="icons c1"><i class="fa fa-book"></i></span>
                            <div class="box-area">
                                <h3>RAPORT PONDOK</h3> <p>Silahkan klik tombol di bawah ini untuk mengunduh Raport Pondok dalam bentuk PDF.</p>
                                <a href="<?= "raport/".$r_kelas."-".$r_no."-p.pdf" ?>" target="_blank" class="btn btn-medium">
                                    <i class="icon-bolt"></i> UNDUH
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center"> 
                            <span class="icons c2"><i class="fa fa-trophy"></i></span>
                            <div class="box-area">
                                <h3>RAPORT KEMENAG</h3>
                                <p>Silahkan klik tombol di bawah ini untuk mengunduh Raport Kemenag dalam bentuk PDF.</p>
                                <p><a href="<?= "raport/".$r_kelas."-".$r_no."-k.pdf" ?>" target="_blank" class="btn btn-medium"><i class="icon-bolt"></i> UNDUH</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
						 
        <!--<div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
               <img class="img-responsive" src="img/works/1.jpg" alt="">   
                <h3>Kelas VII</h3>
                <p>Pembelajaran Daring Santri Kelas VII MTs Husnul Khotimah 2 Kuningan</p>        
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/works/5.jpg" alt="">            
                <h3>Kelas VIII</h3>
                <p>Pembelajaran Daring Santri Kelas VIII MTs Husnul Khotimah 2 Kuningan</p>        
            </div>
            <div class="col-md-4 md-margin-bottom-40">
              <img class="img-responsive" src="img/works/3.jpg" alt="">  
                <h3>Kelas IX</h3>
                <p>Pembelajaran Daring Santri Kelas IX MTs Husnul Khotimah 2 Kuningan</p>        
            </div>
        </div>
        <!-- End Service Blcoks -->        
    </div>
    </section>
