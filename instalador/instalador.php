
<!--
	Autor: Camilo Figueroa ( Crivera )
	Primer formulario para la instalación de un aplicativo, aunque el aplicativo en sí no existe, solo se mostrará el proceso de instalación.
-->

<?php include('plantilla.php');?>
<html>
	<head>
		<title>Instalador de Aplicativo.</title>
	</head>
	<div class='form'>
	<body>

	<br><br><br><br>

		A continuaci&oacute;n se proceder&aacute; a instalar un aplicativo, el cual permite observar dicho proceso al detalle.<br>
		Sin embargo requiere de que la <strong>base de datos</strong> sea creada con anterioridad. <br><br>

<br><br><br>
		
		<form action="instalando.php" method="_get">

			Servidor: 	<br>	<input type="text" name="servidor"><br><br>
			Usuario: 	<br>	<input type="text" name="usuario"><br><br>
			Contraseña: <br>	<input type="text" name="contrasena"><br><br>
			Base de datos: 		<br>	<input type="text" name="bd"><br><br><br>
			<input type="submit" value="Enviar">


		</form>
</div>

	</body>

</html>