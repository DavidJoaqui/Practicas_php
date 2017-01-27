<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.resaltar{
			color: #0094ff;
			font-size: 30px;

		}

		.resaltar2{
			color: purple;
			font-size: 30px;

		}

		.borde{
			border-color: red;
			border-radius: 10px;
			background-color: yellow;
			width: 30%;
		}
		.resaltar3{
			color: red;
			font-size: 30px;			
		}
	</style>
</head>
<body>
<?php
$nombre="Ing.David joaqui";
echo "Bienvenido $nombre <br>";//variableincluida dentro del string
echo "cadenas de strings imprimidas de diferentes maneras(misma funcionalidad)";
echo "<div class='borde'><p class='resaltar'>Este es el mensaje resaltado</p></div>";
echo '<p class="resaltar2">otro ejemplo con otras comillas</p>';
echo "<p class=\"resaltar3\">otro ejemplo con backslash</p>";
//compararndo cadenas
echo "Comparando cadenas <br>";
$cadena1="este TEXTO45";
$cadena2="este texto45";

$resultado=strcmp($cadena1, $cadena2);//retorna 1(true) si es verdad que NO son iguales, 0(false)si son iguales
if($resultado){
echo "el resultado es: No son iguales";
}else{
echo "el resultado es: Son iguales";
}




?>

</body>
</body>
</html>