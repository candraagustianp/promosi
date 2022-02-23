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

        <title>Wilayah</title>
        <style>
            body{
                background-color: rgb(202, 202, 202);
            }
            .map {
                width: 100%;
                height: calc(100vh - 130px);
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
          
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-3">
                    <div class="card bg-secondary">
                        <div class="card-body ">
                            <form action="" class="select-wilayah">
                                <div class="">
                                    <div class="mt-3">
                                        <select name="provinsi" id="provinsi" class="form-control">
                                            <option value="pilih">Semua</option>
                                            <option value="pilih">Pekalongan</option>
                                            <option value="pilih">Pemalang</option>
                                            <option value="pilih">Tegal</option>
                                            <option value="pilih">Brebes</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <button class="btn btn-info"> Sekolah</button>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-warnign"> Keramaian</button>
                                    </div>
                                </div>
                            </form>
            
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="card">
                        <div class="car-body" style="position: relative;">
                            <!-- conatiner for map -->
                            <div id="map" class="map"></div>
                            <div id="feature" class="sidebar"></div>
                        </div>
                    </div>
                </div>
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
