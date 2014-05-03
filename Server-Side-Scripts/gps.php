<?php
 
 
 
if ( isset($_GET["lat"],$_GET["lon"],$_GET["name"] )) {
 
$file = "gps-logs/".$_GET["name"].".txt";
//$file = "gpslog/ranjan.txt";
$f = fopen($file,"w");
	fwrite($f, "'".$_GET["name"]."'"."_".$_GET["lat"]."_".$_GET["lon"]);
	fclose($f);
    echo "OK";
} else {
    echo 'not valid parameters';
}
 
 
?>