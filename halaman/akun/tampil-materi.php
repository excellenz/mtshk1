<?php

if (isset($_POST['id_materi'])) {
    include "function.php";
    include "database.php";
    $data = new database();
    $id = $_POST['id_materi'];
    $nama_santri = $_POST['nama_santri'];
    $level = $_POST['level'];

    if ( $level == 7 ) {
        # code...
        $kelascbt = "https://excellenz-data-2.com/7";
    } elseif ( $level == 8 ) {
        # code...
        $kelascbt = "https://excellenz-data-3.com/8";
    } else {
        $kelascbt = "https://excellenz-data-4.com/9";
    }
    

?>
<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MTs Husnul Khotimah Kuningan</title>
        <!-- Load Roboto font -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="asset/main/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/style.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="asset/main/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="asset/main/css/embed-responsive.css" />

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="asset/main/images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="asset/main/images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="asset/main/images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="asset/main/images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="asset/main/images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
  <!-- End menu -->
        <?php
            } else {
                $id = $_GET['id'];
            }
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
                    <a href="<?php echo MAIN_URL.$key['file']; ?>" target="_blank" class="button">DOWNLOAD MATERI</a><?php } ?>&nbsp<a href="<?= $kelascbt; ?>/" target="_blank" class="button">TES PEMAHAMAN</a>
                    </div>
                <!--<div class="row">
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
                </div>-->
                <?php
                        //endforeach;
                    endforeach;
                ?>
            </div>
        </div>
        <!-- Price section end -->
        <!-- Footer section start -->
        <?php
        if (isset($_POST['id_materi'])) {
            # code...
        ?>
        <div class="footer">
            <p>&copy; 2020 | All Rights Reserved | <a href="http://mtshusnulkhotimah.com">MTs Husnul Khotimah Kuningan</a> Design By : <a href="https://excellenz.id/">excellenz.id</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="asset/main/js/jquery.js"></script>
        <script type="text/javascript" src="asset/main/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="asset/main/js/bootstrap.js"></script>
        <script type="text/javascript" src="asset/main/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="asset/main/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="asset/main/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="asset/main/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="asset/main/js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="asset/main/js/app.js"></script>
    </body>
</html>
<?php
}
?>
