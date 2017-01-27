<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

define("VALOR","david joaqui",true);				/*como se define una constante, el 3 parametro (true) se 														puede usar para que sea sensible a minusculas y minusculas
													el llamado a la variable	*/		

echo "el valor de la constante es " . valor . "<br>";		//.valor     .VALOR


//constantes predefinidas de php

echo "esta instruccion de codigo se encuentra en la linea " . __LINE__ . "<br>";      //imprime numero de linea 																						donde se ejecuta
echo "el archivo esta en la ruta " . __FILE__;										//imprime ruta de archivo php	

?>
</body>
</html>