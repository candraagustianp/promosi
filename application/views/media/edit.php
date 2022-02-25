<div class="mt-3">
    <form method="post" action="<?= site_url("Media/update/".$data['id']) ?>">
        <div class="form-group">
            <label for="id_kota">Kota</label>
            <select class="form-control" id="id_kota" name="id_kota">
            <option>== pilih kota==</option>
                <?php foreach($kotas as $kota) { ?>
                    <option value="<?= $kota["id"] ?>" <?php if ($data['id_kota'] == $kota['id']) echo "selected='selected'" ?>><?= $kota["nama"] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_promo">Jenis Promosi</label>
            <input type="text" class="form-control" name="jenis_promo" id="jenis_promo" placeholder="Jenis Promosi" value="<?= $data['jenis_promo'] ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?= $data['jumlah'] ?>" >
        </div>
        <div class="form-group">
            <label for="ket">Keterangan</label>
            <textarea class="form-control" name="ket" id="ket" rows="3"><?= $data['ket'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="potensi">Koordinat</label>
            <div class="map" id="map"></div>
        </div>
        <div class="form-inline mb-3">
            <div class="form-group">
                <label for="lon" class="sr-only">Longitude</label>
                <input type="text" class="form-control" id="lon" name="lon" placeholder="longitude" value="<?= $data['lon'] ?>">
            </div>
            <div class="form-group ml-3">
                <label for="lat" class="sr-only">Latitude</label>
                <input type="text" class="form-control" id="lat" name="lat" placeholder="latitude" value="<?= $data['lat'] ?>">

            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    const lon = document.getElementById("lon")
    const lat = document.getElementById("lat")



    mapboxgl.accessToken = 'pk.eyJ1IjoiY2FuZHJhYWd1c3RpYW4iLCJhIjoiY2t2b284NjV3MjRteDJ1cWc2ajd1dXRraCJ9.qlP72PtgrpVITxr7Aa_GDA';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [<?= $data['lon'] ?>, <?= $data['lat'] ?>], // starting position [lng, lat]
        zoom: 9.5 // starting zoom
    });
    map.on("click", getCoord);

    function getCoord(e) {
        lon.value = e.lngLat.lng;
        lat.value = e.lngLat.lat;
        
    }

    new mapboxgl.Marker({ color: '#77dd77'})
            .setLngLat([<?= $data['lon'] ?>, <?= $data['lat'] ?>])
            .addTo(map);
</script>