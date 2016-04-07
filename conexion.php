<?php
function conectar()
{
	mysql_connect("mysql.hostinger.mx", "u823397302_leo", "prueba");
	mysql_select_db("u823397302_datos");
}

function desconectar()
{
	mysql_close();
}
?>