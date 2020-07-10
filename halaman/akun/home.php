<?php

$data = new database();
$data_siswa = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = '$username'");
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
        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>E - Learning</h1>
                    <p>Pembelajaran Daring Melalui Video Pembelajaran, Rangkuman Materi Dan Tes Pehahaman Materi.</p>
                </div>
                <div class="row-fluid team">
                    <?php
                        foreach ($mapel as $m) :
                        $kode = $m['kode'];
                        $materi = $data->tampilMateribyMapel($kode);      
                    ?>
                    <div class="span3">
                        <div class="thumbnail">
                            <img src="<?= $m['gambar']; ?>" img="images">
                            <h3><?= $m['nama']; ?></h3>
                            <select name="id_mater" id="cars">
                            <option value="-">Pilih Materi</option>
                            <?php                        
                                foreach ($materi as $mat) {
                                    echo "<option value=".$mat['id'].">";
                                    echo $mat['judul'];
                                    echo "</option>";
                                }
                            ?>
                            </select>
                            <p>
                                <label for="cars"><a href="user.php?page=materi&id=<?= $mat['id']; ?>"><button  class="btn btn-medium"> Pilih Materi</button></a></label>
                            </p>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                    <!--<div class="span3" id="second-person">
                        <div class="thumbnail">
                            <img src="images/mapel/ipa.png" img="images">
                            <h3>IPA</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/fiqih.png" img="images">
                            <h3>Fiqih</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/khot-imla.png" img="images">
                            <h3>Khot-Imla</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>-->
                </div>
                <!--</br>
                <div class="row-fluid team">
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mapel/tafsir.png" img="images">
                            <h3>tafsir</h3>
                            <label for="cars"><button  class="btn btn-medium"> Tafsir</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="second-person">
                        <div class="thumbnail">
                            <img src="images/mapel/matematika.png" img="images">
                            <h3>Matematika</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/bahasa-inggris.png" img="images">
                            <h3>Bahasa Inggris</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/hadits.png" img="images">
                            <h3>Hadits</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row-fluid team">
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mapel/ski.png" img="images">
                            <h3>SKI</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="second-person">
                        <div class="thumbnail">
                            <img src="images/mapel/ips.png" img="images">
                            <h3>IPS</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/bahasa-indonesia.png" img="images">
                            <h3>Bahasa Indonesia</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/aqidah.png" img="images">
                            <h3>Aqidah</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row-fluid team">
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mapel/pkn.png" img="images">
                            <h3>PKn</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="second-person">
                        <div class="thumbnail">
                            <img src="images/mapel/tsaqofah.png" img="images">
                            <h3>Tsaqofah</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/shorof.png" img="images">
                            <h3>Shorof</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="third-person">
                        <div class="thumbnail">
                            <img src="images/mapel/adabul-mutaalim.png" img="images">
                            <h3>Adabul Mutaalim</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                </div>
                </br>
                <div class="row-fluid team">
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mapel/qowaid.png" img="images">
                            <h3>Qowaid</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                    <div class="span3" id="first-person">
                        <div class="thumbnail">
                            <img src="images/mapel/tajwid.png" img="images">
                            <h3>Tajwid</h3>
                            <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                            <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            </select>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- About us section end -->
