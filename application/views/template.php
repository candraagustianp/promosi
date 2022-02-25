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
                min-height: 250px;
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
                    <a class="nav-link" href="<?= site_url('Sekolah/get') ?>">Sekolah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Keramaian/get') ?>">Titik Keramaian</a>
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
                            <li><a href="<?= site_url('Dashboard') ?>"><span class="fa fa-chevron-right mr-2"></span>Semua</a></li>
                            <?php foreach ($kotas as $c) { ?>
                                <li><a href="<?= site_url('Dashboard/kota/').$c['id'] ?>"><span class="fa fa-chevron-right mr-2"></span> <?= $c['nama'] ?></a></li>
                            <?php } ?>
                            
                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('Sekolah/index/').$kota ?>" class="">Sekolah</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Keramaian/index/').$kota ?>" class="">Titik Keramaian</a>
                    </li>
                    <li>
                        <a href="<?= site_url('Media/index/').$kota ?>" class="">Media Promosi</a>
                    </li>
                </ul>

                <div class="mb-5">
                    <h5>Menu</h5>
                    <ul class="list-unstyled components">
                        <li>
                            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tambah Data</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu2">
                                <li><a href="<?= site_url("Sekolah/tambah") ?>"><span class="fa fa-chevron-right mr-2"></span>Sekolah</a></li>
                                <li><a href="<?= site_url("Keramaian/tambah") ?>"><span class="fa fa-chevron-right mr-2"></span>Titik Keramaian</a></li>
                                <li><a href="<?= site_url("media/tambah") ?>"><span class="fa fa-chevron-right mr-2"></span>Media Promosi</a></li>
                            </ul>
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

        
    </body>
</html>
