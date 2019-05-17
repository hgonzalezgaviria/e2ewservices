<?php

$estbmi='Inactivo';
$estEAIbmi='Inactivo';
$urlbmi='http://e2ew.inttegrio-aws.com/bmi/services/servicesBMI?wsdl';
$urlStateBmi='http://e2ew.inttegrio-aws.com/bmi/servlet/State';
$content="";

/*
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2($urlbmi, HTTP_Request2::METHOD_GET);

try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
      $estbmi="Activo";
//  echo $response->getBody();//Get content of page
//var_dump($response->getStatus());
    } else {
      $estbmi="Inactivo";
//echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .$response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
  //  echo 'Error: ' . $e->getMessage();
}
*/
//get ping

function get_http_response_codebm($urlbmi) {
  $headers = get_headers($urlbmi);
  return substr($headers[0], 9, 3);
}

$get_http_response_code = get_http_response_codebm($urlbmi);

if ( $get_http_response_code == 200 ) {
  //echo "OKAY!";
  $estbmi="Activo";
} else {
  //echo "Nokay!";
  $estbmi="Inactivo";
}

//EAI
$content = file_get_contents($urlStateBmi);
if ($content){
$cadena_de_texto = $content;
$cadena_buscada   = 'INICIADO';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
if ($posicion_coincidencia === false) {
  $estEAIbmi="Inactivo";
}else{
  $estEAIbmi="Activo";
}
}else{
	$content="";
}


?>
