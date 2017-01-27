<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$numero_aleatorio=rand(0,20);
$numero=rand();


$base=rand(1,8);
$exponente=3;
$potencias=pow($base,$exponente);



$num_redondear=5.44345435;
$redondeo=round($num_redondear,2); //round(numero_a_redondear, presicion de decimales por defecto 0)


echo "el numero aletorio generado entre los dos parametros es $numero_aleatorio <br>";
echo "numero aleatorio sin parametros $numero  <br>";
echo "la potencia de $base y exponente $exponente es $potencias <br>";
echo "el numero $num_redondear ha sido redondeado a $redondeo<br>";
?>
</body>
</html>