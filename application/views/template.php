<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>">
        <script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/popper/popper.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.js') ?>"></script>
        
        <!-- mapbox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
        
        <!-- boxicon -->
        <link rel="stylesheet" href="<?= base_url('assets/vendor/boxicons/css/boxicons.css') ?>">

        <!-- native -->
        <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

        <title>Wilayah</title>
        <style>
            .map {
                width: 100%;
                height: 100%;
            }
            .bg-grey{
                background-color: rgb(221, 221, 221);
            }
            .footer{
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">byU Invasi Pantura</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Semua
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Semua</a>
                        <a class="dropdown-item" href="#">Pekalongan</a>
                        <a class="dropdown-item" href="#">Pemalang</a>
                        <a class="dropdown-item" href="#">Tegal</a>
                        <a class="dropdown-item" href="#">Brebes</a>
                    </div>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sekolah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Keramaian</a>
                  </li>
                </ul>
                
            </div>
        </nav>

        <div class="container-fluid d-md-flex align-items-stretch">
            <nav id="sidebar">
                <h5>Kategori</h5>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kota</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu1">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Semua</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Pekalongan</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Pemalang</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Tegal</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span> Brebes</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="">Sekolah</a>
                    </li>
                    <li>
                        <a class="">Keramaian</a>
                    </li>
                </ul>

                <div class="mb-5">
                    <h5>Menu</h5>
                    <ul class="list-unstyled components">
                        <li>
                            <a href="<?= site_url("Dashboard/tambah") ?>">Tambah Data</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div id="content" class="pl-2">
                <?= $content ?>
            </div>
        </div>
        
        <footer class="footer mt-2 py-3 bg-grey">
            <div class="container">
                <div class="row">
                    <div class="m-auto">
                        2022 © 
                        <a href="#" target="_blank">
                            Invasi Pantura Oleh Kami
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiY2FuZHJhYWd1c3RpYW4iLCJhIjoiY2t2b284NjV3MjRteDJ1cWc2ajd1dXRraCJ9.qlP72PtgrpVITxr7Aa_GDA';
            const map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/streets-v11', // style URL
                center: [119.3829406, -2.1821934], // starting position [lng, lat]
                zoom: 4 // starting zoom
            });
            map.on("mouseenter", "cluster",() => {
                if (drawing) map.getCanvas().style.cursor = 'pointer';
                else map.getCanvas().style.cursor = 'grab';
            });

        </script>
    </body>
</html>
