<?php
require('conec.php');


   $fecha=$_POST['Txtfecha'];
   $hora=$_POST['Txthora'];
   $estado=$_POST['Txtestado'];
   
   
   $query="INSERT INTO servicio(fecha, hora, nombre, apellido, tiporadio, reparacion, prioridad, estado, descripcion) 
   VALUES ('$fecha','$hora','$_POST[Txtnombre]','$_POST[Txtapellidos]','$_POST[Cboradio]','$_POST[CboMant]','$_POST[CboPrio]','$estado','$_POST[Txtdesc]')";
   
   $resultado=$mysqli->query($query);
   
   
   
   /* e-mail al que se enviara el correo */
    $myemail = "sistemas@c323.com.mx,noc@c323.com.mx,daykostark12@gmail.com,hisagi.shinigami@gmail.com";
    //$myemail = "daykostark12@gmail.com";
    /* se prepara el mensaje */
    $message = "

    Nombre: $_POST[Txtnombre] $_POST[Txtapellidos]
    Asunto: $_POST[CboMant]
    Radio: $_POST[Cboradio]
    Prioridad: $_POST[CboPrio]

    Descripcion del problema:   
    $_POST[Txtdesc]"
    ;
    /* se crea la funcion mail*/
    mail($myemail, $subject, $message);





     //Enviando auto respuesta.
	    $correo  = "perezperalta@gmail.com";
		//$correo  = "hisagi.shinigami@gmail.com";
		$pfw_header = "From: noc@c323.com.mx\n"
		. "Reply-To: noc@c323.com.mx\n";
		$pfw_subject = "Mensaje recibido, Asunto: $_POST[CboMant] |";
		$pfw_email_to = "$correo";
		$pfw_message = "Muchas Gracias $_POST[Txtnombre] $_POST[Txtapellidos], por su mensaje.\n"
		. "Su mensaje ha sido recibido satisfactoriamente. \n"
		. "Nos pondremos en contanto contigo lo antes posible en su e-mail: $correo \n"
		. " \n"
		. " \n"
		. "--------------------------------------------------------------------------\n"
		. "Favor de NO responder este E-mail ya que es generado Automaticamente.\n"
		. "Atte. CIRCUITO 323.\n"
		. "http://reportec323.esy.es/";
		@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

    echo '<script language = javascript>
	alert("Datos Guardados Correctamente.")
	self.location = "NuevoReporte.php"
	</script>';	
	
	
?>