<!DOCTYPE html>
<html>
<head>
	<title>Trabajo Operadores</title>
	<style type="text/css">
		
		.fondo{
			background-color: gray;
			border:solid 5px darkblue;
		}
		#titulo{

			color:#8cc602;
			font-size: 20px;
		}

		.aprobado{
			color: #0094ff;
			font-size: 20px;
		}

		.no_aprobado{

			color: red;
			font-size: 20px;
		}

	</style>
</head>
<body>
<form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
<center>
<table class="fondo">
	
<thead style="background-color:gray">
	<td colspan="2">
	<b id="titulo"> USANDO OPERADORES DE COMPARACION </b>
	</td>
</thead>
<tbody>
<tr>
	
	<center>
<td><label for="nombre_usuario" style="color:white">Nombre</label></td> <td> <input type="text" name="nombre_usuario_var" id="nombre_usuario"> </td>
	</center>	
	
</tr>
<tr>
	
	<center>

	<td><label for="edad_usuario" style="color:white">Edad</label> </td> <td> <input type="text" name="edad_usuario_var" id="edad_usuario"> </td>
	</center>	
	
</tr>

<tr>

</tr>

<tr>	
	<td colspan="2" align="center">

 		<input type="submit" name="enviando" id="enviando" value="Enviar">
	
	</td>	
</tr>

</tbody>
</table>
</center>
</form>
</body>
</html>