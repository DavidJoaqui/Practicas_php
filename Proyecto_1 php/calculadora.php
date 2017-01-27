<?php

if(isset($_POST["btn-operar"])){ 
$numero1=$_POST["numero1"];
$numero2=$_POST["numero2"];
$opcion=$_POST["operacion_select"];
calcular($numero1,$numero2,$opcion);
}

function calcular($numero1,$numero2,$opcion){

if(!strcmp($opcion,"Suma")){

echo "el resultado de la suma es " . ($numero1 + $numero2);
}
else if(!strcmp($opcion,"Resta")) {
echo "el resultado de la resta es " . ($numero1 - $numero2);
}
else if(!strcmp($opcion,"Producto")){
echo "el resultado del producto es " . ($numero1 * $numero2);
}else if (!strcmp($opcion,"Division")) {
	if ($numero2 != 0) {
	
			echo "el resultado de la division es " . ($numero1 / $numero2);
	}else{
	
			echo "La division entre 0 no existe...Indeterminacion!";		
	}
}else{
	echo "el modulo (numero 1 % numero 2 ) es " . ($numero1 % $numero2);
}

}

?>