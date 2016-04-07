<!DOCTYPE html>
<html lang="en">
  <head> 
  
<?php 
//Proceso de conexión con la base de datos
$db_host="mysql.hostinger.mx";
$db_usuario="u823397302_leone";
$db_password="daniel123";
$db_nombre="u823397302_datos";
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());

//Iniciar Sesión
session_start();

//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
self.location = "index.php"
</script>';
}
?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Mostrar Reportes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu"></div>
              </div>
            <!--logo start-->
            <a class="logo"><b>CIRCUITO323</b></a>
            <!--logo end-->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    
                    <!-- inbox dropdown end -->
  
                <!--  notification end -->

            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="cerrar_acceso.php">Cerrar Sesi&oacute;n</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></p>
              	  	
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Nuevo Reporte</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="NuevoReporte.php">Formumario de reportes</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Lista de Reportes</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="MostrarReportes.php">Reportes</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <br/>
          	<h3><i class="fa fa-angle-right"></i> Datos de Reportes</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                <!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
							  <tbody>
                                  <thead class="cf">
                                  <tr>
                                  <th>Folio</th>
                                  <th>Fecha</th>
                                  <th>Hora</th>
                                  <th>Nombre</th>
                                  <th>Apellidos</th>
                                  <th>Equipamiento</th>
                                  <th>Mantenimiento</th>
                                  <th>Prioridad</th>
                                  <th>Estado</th>
				  <th>Descripcion</th>
                                  </tr>
                                  </thead>
								 
								  
				 <?php  
                                    error_reporting(E_ERROR);

                                    //Proceso de conexión con la base de datos
                                    $conex = mysql_connect("mysql.hostinger.mx", "u989441035_base", "circuito323")
		                            or die("No se pudo realizar la conexion");
	                                mysql_select_db("u989441035_c323",$conex)
		                            or die("ERROR con la base de datos");  
  
                                    $consulta= "SELECT * FROM servicio"; 
                                    $resultado= mysql_query($consulta,$conex) or die (mysql_error());


                                    while ($registro = mysql_fetch_array($resultado)){  
                                    echo " 								
                                    <tr> 
                                    <td data-title='Folio' >".$registro['id']."</td>  
                                    <td data-title='Fecha' >".$registro['fecha']."</td>  
                                    <td data-title='Hora' >".$registro['hora']."</td>  
	                                <td data-title='Nombre' >".$registro['nombre']."</td> 
	                                <td data-title='Apellidos' >".$registro['apellido']."</td> 
	                                <td data-title='Equipamiento' >".$registro['tiporadio']."</td> 
	                                <td data-title='Mantenimiento' >".$registro['reparacion']."</td> 
	                                <td data-title='Prioridad' >".$registro['prioridad']."</td> 
									<td data-title='Estado Reparacion' >".$registro['estado']."</td> 
									<td data-title='Descripcion' >".$registro['descripcion']."</td>  
                                    </tr>";  
                                    }  
                                    ?>  
	                            </tbody>
                              </table>
                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - CIRCUITO 323
              <a href="responsive_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
