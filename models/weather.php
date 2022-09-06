<?php 





$city    = 'Arequipa';
$country = 'Pe';
$api_key_weather="c87d088aaede77aec1bc18bf87f51c4f";
$idioma="es";

$url     = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.','.$country.'&lang='.$idioma.'&APPID='.$api_key_weather;
$json    = file_get_contents( $url );
$data    = json_decode( $json, true );
$clima = $data['weather'];
$main= $data['main'];
$sys=$data['sys'];

 

// var_dump($data );



?>