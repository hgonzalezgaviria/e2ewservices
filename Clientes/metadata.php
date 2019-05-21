<?php
	$urlIp = ""; //IP privada v4
	$urlZone = ""; //La zona de disponibilidad en la que se ha lanzado la instancia.
	$urlIpPub = ""; //IP publica v4

$equipo=	$array = [
		"urlip" => "http://169.254.169.254/latest/meta-data/local-ipv4", //IP privada v4
		"urlzone" => "http://169.254.169.254/latest/meta-data/placement/availability-zone", //La zona de disponibilidad en la que se ha lanzado la instancia.
		"urlippub" => "http://169.254.169.254/latest/meta-data/public-ipv4", //IP publica v4
];
//var_dump($equipo);

	//$long= count ($array);
		$handler = curl_init();
/*
for ($i =0; $i < $long; $i++){

	echo $array[$i];
	echo "<br>";
}
*/

foreach($equipo as $url=>$urldata)
	{
		curl_setopt($handler, CURLOPT_URL, $urldata);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
	  //$urlIp = curl_exec ($handler);
		$urlIp = array(curl_exec ($handler));
	//echo "El " . $url . " es " . $urldata;
	//echo "<br>";
	}
var_dump($urlIp);

		curl_close ($handler);

		//$ip = getenv('USER');
		//$ip = $_SERVER['USER'];
 ?>
