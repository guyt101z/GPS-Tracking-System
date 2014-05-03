<?php
$i = 0;
foreach (glob("gps-logs/*.txt") as $filename) {
	$handle = fopen($filename, "r");
	if ($handle) { 
		while (($line = fgets($handle)) !== false) {
			$line = preg_replace("/\s+/",",",trim($line));
			$data = explode("_",$line);
			$result[$i] = $data;
		}
	} 
	$i++;
	fclose($handle);
}
//print_r($result);
?>
 <?php
	$x = "";
	$control = 0;
		foreach($result as $result) {
			if($control == 0) {
				$firstLoc = $result[1].",".$result[2];
				$control++;
			}
			$x .= "[$result[0],$result[1],$result[2]],";		
		}
		$x = substr($x,0,-1);
		//echo $x;
	?>
 <!DOCTYPE html>
<html> 
<head> 
  <h1>Total Number Of People Being Currently Tracked: <?php echo $i; ?></h1>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Location Tracker</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 1000px; height: 1000px;"></div>
 
  <script type="text/javascript">
 
  var locations = [
		<?php echo $x;?>
	];
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(<?php echo $firstLoc; ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
 
    var infowindow = new google.maps.InfoWindow();
 
 
 
  /
 
  
 
 
 
 
 
 for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
     
 
      });
 
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
/*google.maps.event.addListener(marker, "click", function(e) {
		alert("GPS coordinates:\nLatitude: " + marker.getPosition().lat() + "\nLongitude: " + marker.getPosition().lng());
	});*/
    }
  </script>
</body>
</html>