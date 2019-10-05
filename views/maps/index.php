<?php

$this->title = 'Maps';
?>

<div class="site-index">
   <div class="col-md-12">
      <div class="box box-info">
      <center><h3 class="box-title">Maps</h3></center>
      <div class="box-header with-border">
      </div>
        
<html>
<style>
	#mapid{
		left: 15px;
		width: 1025px;
		height: 600px;
	}
	</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<script src="leaflet.ajax.min.js"></script>
<?php
   include "koneksi.php";
?>
</head>
<body>
<div id="mapid"></div>
	<script>
		var map = L.map('mapid').setView([-3.316694, 114.590111], 5);
        
		<?php 
			 $query = "SELECT id,coordinates FROM data";
			 $query2 = mysqli_query($config,$query);
			 while($query3 = mysqli_fetch_assoc($query2)){
		 ?>

		var marker = L.marker([<?php echo $query3['coordinates']; ?>]).addTo(map);
		marker.bindPopup("<b>id : <?php echo $query3['id']; ?></b><br>coordinates : <?php echo $query3['coordinates']; ?>").openPopup();

       <?php } ?>
	   
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		maxZoom: 20,
		id: 'mapbox.streets',
		accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		}).addTo(map);
		var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");       
		geojsonLayer.addTo(map);
	
	</script>
</body>
</html>

    </div>
</div>