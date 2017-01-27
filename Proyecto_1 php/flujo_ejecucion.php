<!DOCTYPE html>
<html>
<head>
	<title>flujo de ejecucion</title>
</head>
<body>

<?php

echo "primer mensaje <br>";	
							//include("ingreso_datos.php");
							/*include: incluye un archivo php externo(deja ejecutar el resto del codigo asi no  encuentre el archvio) y 
							  require insiste que el archivo se requiere y si no lo encuentra no deja que el codigo continue su ejecucion*/

require ("ingreso_datos.php");

IngresarDatos();

$total=sumar(45, 55);
echo "la suma es ",$total;

?>

</body>
</html>