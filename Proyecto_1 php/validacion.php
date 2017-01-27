
<style type="text/css">
		
	
		.aprobado{
			color: #0094ff;
			font-size: 20px;
		}

		.no_aprobado{

			color: red;
			font-size: 20px;
		}

	</style>


<?php

if (isset($_POST["enviando"])) {
	$usuario=$_POST["nombre_usuario_var"];
	$edad=$_POST["edad_usuario_var"];

	if($usuario == "jose david joaqui paredes" && $edad >= 18){
		echo "<p class='aprobado'>Bienvenido Ingeniero $usuario</p>";
	}else{
		echo "<p class='no_aprobado'>acceso denegado</p>";
	}
}

?>