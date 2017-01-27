<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$nombre="David joaqui";

function saludar(){
	global $nombre;
	
	$nombre="Bienvenido " . $nombre;

}

function incrementar(){
	global $nombre;
	static $contador;
	$contador++;
	echo $contador , "<br>";
	$nombre=$nombre . " al servidor localhost ". "<br>";
}

incrementar();
incrementar();
incrementar();
incrementar();
incrementar();

saludar();

echo $nombre;

?>



</body>
</html>