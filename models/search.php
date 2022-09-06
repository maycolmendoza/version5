<?php
$miArray=array(
	"Barot Bellingham",
	"Jonathan G. Ferrar II",
	"Hillary Hewitt Goldwynn-Post"
);



if(isset($_POST["dato_a_buscar"])){
error_reporting(0);
$miArray=array(
	"Barot Bellingham",
	"Jonathan G. Ferrar II",
	"Hillary Hewitt Goldwynn-Post"
);
   $inputJSON = file_get_contents('https://script.google.com/macros/s/AKfycbzWM5yiycqTnnAc9bqHZPDuKdy4-ZcQ8NgCShhFP2vAhtJrQ4Kw8D1Uh8wHE30tt0ju/exec');
   $data = json_decode($inputJSON,TRUE);
$datoss=$data[0]["data"];


  
 
foreach($datoss as $nombre)
{
	if(strpos(strtolower($nombre['Autores']), strtolower($_POST["dato_a_buscar"]))!==false)
	{
		$salida="<ul>";
		$salida.="<li>";
		$salida.="<h2>".$nombre['Autores']."</h2>";
		$salida.="</li>";
		$salida.="</ul>";
		echo $salida;
	}
  
}
}else{
if(!isset($_POST["dato_a_buscar"])){
  foreach($miArray as $nombre)
{
  echo "<li>".$nombre."</li>";
}}
}
?>
