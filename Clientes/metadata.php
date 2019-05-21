<?php 
	//carga la plantilla con la header y el footer
	//require_once('Layouts/layout.php');	
				$varurl='hola';
			$url = "http://169.254.169.254/latest/meta-data/local-ipv4";

		$handler = curl_init();		
		curl_setopt($handler, CURLOPT_URL, $url);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
		$out = curl_exec ($handler);
		curl_close ($handler);

		//$ip = getenv('USER');
		//$ip = $_SERVER['USER'];
 ?>
