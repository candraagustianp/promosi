<div id="map" class="map"></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY2FuZHJhYWd1c3RpYW4iLCJhIjoiY2t2b284NjV3MjRteDJ1cWc2ajd1dXRraCJ9.qlP72PtgrpVITxr7Aa_GDA';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [109.24994901069454, -6.904883836563712], // starting position [lng, lat]
        zoom: 9.5 // starting zoom
    });

    // Create a default Marker and add it to the map.
    <?php 
        foreach ($media as $m) {
            echo "new mapboxgl.Marker({ color: '#77dd77'})
            .setLngLat([{$m['lon']}, {$m['lat']}])
            .setPopup(new mapboxgl.Popup().setHTML(''
            +'<div class=\"modal-dialog\">'
                        +'<div class=\"modal-content\">'
                            +'<div class=\"modal-body \">'


                                    +'<h5 class=\"text-uppercase text-center\">{$m['jenis_promo']}</h5>'

                                    +'<div class=\"mb-3\">'
                                        +'<hr class=\"new1\">'
                                    +'</div>'
                                    +'<div class=\"d-flex justify-content-between\"> <span class=\"font-weight-bold\">Jumlah</span> <span class=\"text-muted\">{$m['jumlah']}</span> </div>'
                                    +'<div class=\"d-flex justify-content-between\"> <span class=\"font-weight-bold\">Keterangan</span> </div>'
                                    +'<div class=\"d-flex justify-content-between\"> <p class=\"text-muted\">{$m['ket']}</p> </div>'
                                    
                                    +'<div class=\"text-center mt-5\"> <a href=\"".site_url('Media/edit/'.$m['id'])."\" class=\"btn btn-success\">Edit</a> <a href=\"".site_url('Media/delete/'.$m['id'])."\" class=\"btn btn-info\">Delete</a></div>'

                            +'</div>'
                        +'</div>'
                    +'</div>'
            ))
            .addTo(map);";
        }

    ?>

</script>