    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">E - LEARNING</h2>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
        <div class="container content">
            <?php
                $materi = $data->tampilMateri('2');
                foreach ($materi as $key) :
                    
                    
            ?>
            <div class="row"> 
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3><?php
                            $mapel = $data->tampilMapel($key['mapel_kode']);
                            foreach ($mapel as $m) {
                            echo $m['nama'];
                            }
                            ?>
                        </h3>
                        <p>Pembelajaran daring santri MTs Husnul Khotimah 2 Kuningan melalui video pembelajaran interaktif, rangkuman materi dan latihan pemahaman materi di setiap akhir pembelajaran.</p>
                    </div>  
                </div>
            </div>
            <div class="row showcase-section">
                <div class="col-md-12">
                    <!--<img src="asset/main/img/dev1.png" alt="showcase image">-->
                    <div class="embed-responsive embed-responsive-16by9">
                    <?= $key['video']; ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="about-text">
                        <h3><?= $key['judul']; ?></h3>
                        <p><?= $key['deskripsi']; ?></p>
                        <p><a href="<?php echo MAIN_URL.$key['file']; ?>"><button class="btn btn-medium">DOWNLOAD MATERI</button></a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                         */
                        /*
                        var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() {  // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            
                            s.src = 'https://hendrasaleh.disqus.com/embed.js';
                            
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
            <?php
                    //endforeach;
                endforeach;
            ?>
        </div>
    </section>
