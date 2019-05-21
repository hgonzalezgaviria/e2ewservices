<?php

$este2di='Inactivo';
$estEAIe2di='Inactivo';
$urle2di='http://'.$ip.':8080/e2di_web/services/servicesNCVP?wsdl';
$urlStateE2di='http://'.$ip.':8080/e2di_web/servlet/Status';
$content="";


function get_http_response_codedi($urle2di) {
  $headers = get_headers($urle2di);
  return substr($headers[0], 9, 3);
}

$get_http_response_code = get_http_response_codedi($urle2di);

if ( $get_http_response_code == 200 ) {
  //echo "OKAY!";
  $este2di="Activo";
} else {
  //echo "Nokay!";
  $este2di="Inactivo";
}

/*
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2($urle2di, HTTP_Request2::METHOD_GET);

try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
      $este2di="Activo";
//  echo $response->getBody();//Get content of page
//var_dump($response->getStatus());
    } else {
      $este2di="Inactivo";
//echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .$response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
  //  echo 'Error: ' . $e->getMessage();
}
*/
//EAI
$content = file_get_contents($urlStateE2di);
if ($content){
$cadena_de_texto = $content;
$cadena_buscada   = 'INICIADO';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
if ($posicion_coincidencia === false) {
  $estEAIe2di="Inactivo";
}else{
  $estEAIe2di="Activo";
	}
}else{
	$content="";
}

?>
