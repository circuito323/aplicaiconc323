<?php 
//Proceso de conexión con la base de datos
$db_host="mysql.hostinger.mx";
$db_usuario="u823397302_leone";
$db_password="daniel123";
$db_nombre="u823397302_datos";
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$usuario= $_POST['Txtusuario'];
$contrasena= $_POST['Txtcontrasena'];

//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM usuario1 WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password erroneos, por favor verifique.")
	self.location = "index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['id_usuario'] = $fila['id_usuario'];
	$_SESSION['nombres'] = $fila['nombres'];

	header("Location: NuevoReporte.php");
}
?>