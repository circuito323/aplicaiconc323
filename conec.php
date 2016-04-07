<?php
	
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli=new mysqli("mysql.hostinger.mx","u823397302_leone","leonel123","u823397302_datos");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Erronea : ', mysqli_connect_error();
		exit();
	}
?>