<?php
$id = $_GET['id'];
?>
    <!-- Price section start -->
    <div id="price" class="section secondary-section">
        <div class="container">
            <?php
                $materi = $data->tampilMateri($id);
                foreach ($materi as $key) :
            ?>
            <div class="title">
                <h1>
                    <?php
                        $mapel = $data->tampilMapel($key['mapel_kode']);
                        foreach ($mapel as $m) {
                        echo $m['nama'];
                        }
                    ?>
                </h1>
                <p>Pembelajaran daring santri MTs Husnul Khotimah Kuningan melalui video pembelajaran interaktif, rangkuman materi dan latihan pemahaman materi di setiap akhir pembelajaran.</p>
            </div>
                    <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <?= $key['video']; ?>
                 </div>

            <div class="centered">
                <h1>
                    <?= $key['judul']; ?>
                </h1>
                <p class="price-text"><?= $key['deskripsi']; ?></p>
                <?php
                    if ( empty($key['file'])) {
                        echo "";
                    } else {
                ?>
                <a href="<?php echo MAIN_URL.$key['file']; ?>" target="_blank" class="button">DOWNLOAD MATERI</a><?php } ?>&nbsp<a href="https://excellenz-data-2.com/7" target="_blank" class="button">TES PEMAHAMAN</a>
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
    </div>
    <!-- Price section end -->
