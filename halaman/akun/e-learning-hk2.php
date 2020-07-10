<?php
$data = new database();
$data_siswa = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = '$nama'");
$siswa = $data_siswa->fetchAll();
//print_r($siswa);
foreach ($siswa as $s) {
    # code...
    $user_name = $s['user_name'];
    $nama_lengkap = $s['nama_lengkap'];
    $level = $s['level'];
    $kelas = $s['kelas'];
}
$data_mapel = $data->getDb()->query("SELECT * FROM mapel WHERE level = $level");
                $mapel = $data_mapel->fetchAll();
                //print_r($mapel);
?>

<section class="courses">
<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter"><h2 class="aligncenter">E - Learning</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>Pembelajaran Daring Melalui Video Pembelajaran, Rangkuman Materi Dan Tes Pehahaman Materi.</div>
                </br>
            </div>                
        <div class="row service-v1 margin-bottom-40">
            <?php
                foreach ($mapel as $m) :
                $kode = $m['kode'];
                $materi = $data->tampilMateribyMapel($kode);      
            ?>
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="<?= $m['gambar']; ?>" alt="">   
                <center><h3><?= $m['nama']; ?></h3></center>
                <center>
                <p>                
                <select name="id_materi">
                    <option value="-">Materi</option>
                    <?php                        
                        foreach ($materi as $mat) {
                            echo "<option value=".$mat['id'].">";
                            echo $mat['judul'];
                            echo "</option>";
                        }
                    ?>
                </select>
                </p>
                <p>
                    <a href="user.php?page=materi&id=<?= $mat['id']; ?>"><button class="btn btn-small"> Pilih Materi</button></a>
                </p>
                </center>
            </div>
            <?php
                endforeach;
            ?>
            <!--<div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="asset/main/img/kelas/aqidah.png" alt="">   
                <center><h3>Aqidah</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="asset/main/img/kelas/bahasa-arab.png" alt="">            
                <center><h3>Bahasa Arab</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/bahasa-indonesia.png" alt="">  
                <center><h3>Bahasa Indonesia</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/bahasa-inggris.png" alt="">  
                <center><h3>Bahasa Inggris</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="asset/main/img/kelas/adabul-mutaalim.png" alt="">   
                <center><h3>Adabul Mutaalim</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="asset/main/img/kelas/fiqih.png" alt="">            
                <center><h3>Fiqih</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/hadits.png" alt="">  
                <center><h3>Hadits</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/ipa.png" alt="">  
                <center><h3>IPA</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="asset/main/img/kelas/ips.png" alt="">   
                <center><h3>IPS</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="asset/main/img/kelas/khot-imla.png" alt="">            
                <center><h3>Khot/Imla</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/matematika.png" alt="">  
                <center><h3>Matematika</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/nahwu.png" alt="">  
                <center><h3>Nahwu</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="asset/main/img/kelas/bahasa-arab-terpadu.png" alt="">   
                <center><h3>Bahasa Arab Terpadu</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="asset/main/img/kelas/pkn.png" alt="">            
                <center><h3>PKn</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/shorof.png" alt="">  
                <center><h3>Shorof</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/siroh.png" alt="">  
                <center><h3>Siroh</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive" src="asset/main/img/kelas/ski.png" alt="">   
                <center><h3>SKI</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="asset/main/img/kelas/tafsir.png" alt="">            
                <center><h3>Tafsir</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/tik.png" alt="">  
                <center><h3>TIK</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>
            <div class="col-md-3 md-margin-bottom-40">
              <img class="img-responsive" src="asset/main/img/kelas/tsaqofah.png" alt="">  
                <center><h3>Tsaqofah</h3></center>
                <center>
                <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                </select>
                </center>
            </div>-->
        </div> 
</div>
</section>
