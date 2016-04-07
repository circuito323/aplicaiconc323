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

  	    <?php
            //Define la zona horaria exacta para cada pais.
            date_default_timezone_set('America/Mexico_City');
   
            #variable con la hora con formato am, pm
            $currentTime = date("g:i:s a");
        ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Nuevo Reporte</title>
	<script type="text/javascript" src="select_dependientes.js"></script>
	<link rel="stylesheet" type="text/css" href="select_dependientes.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">


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
            <a class="logo"><b>CIRCUITO 323</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->

                <!-- inbox dropdown end -->
                <!--  notification end -->
            </div>
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
              
              	  <p class="centered"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"></h5>
				 

                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Nuevo Reporte</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="NuevoReporte.php">Formumario de reportes</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Lista de Reportes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="MostrarReportes.php">Reportes</a></li>
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
          	<h3><i class="fa fa-angle-right"></i> Formulario de reportes</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" name="nuevo_registro"  method="POST" action="registro.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fecha</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Txtfecha" value="<?php echo date("y-m-d"); ?>" readonly=”readonly”>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Hora</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Txthora" value="<?php echo date("g:i:s"); ?>" readonly=”readonly”>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre(s)</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Txtnombre" placeholder="Escibe tu nombre" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Apellidos</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="Txtapellidos" placeholder="Escribe tus apellidos" required>
                              </div>
                          </div>
						  <div class="form-group">
						    <label class="col-lg-2 col-sm-2 control-label">Equipamiento</label>
						        <div class="col-lg-10">
						            <select class="form-control" name="Cboradio">
						                <option>SBS-CERI</option>
						                <option>SBS-Capulo</option>
						                <option>SBS-Tiradero</option>
						                <option>SBS-Ayuntamiento</option>
						                <option>SBS-Canoa</option>
										<option>Operadores</option>
										<option>Movil</option>
										<option>Portatil</option>
										<option>Base</option>
						            </select> 
						        </div>
						</div>	
						  <div class="form-group">
						    <label class="col-lg-2 col-sm-2 control-label">Tipo de Mantenimiento</label>
						        <div class="col-lg-10">
						            <select class="form-control" name="CboMant">
						                <option>Mantenimiento Preventivo</option>
						                <option>Mantenimiento Correctivo</option>
						            </select> 
						        </div>
						</div>	
						  <div class="form-group">
						    <label class="col-lg-2 col-sm-2 control-label">Tipo de Prioridad</label>
						        <div class="col-lg-10">
						            <select class="form-control" name="CboPrio">
						                <option>Baja</option>
						                <option>Media</option>
						                <option>Alta</option>
						                <option>Urgente</option>
						            </select> 
						        </div>
						</div>							
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Estado de Reparacion</label>
                              <div class="col-sm-10">
							      <input type="text" class="form-control" name="Txtestado" value="En espera" readonly=”readonly”>
								  <span class="help-block">Estado de Reparacion.</span>
                              </div>
                          </div>
						  <div class="form-group">
						      <label class="col-sm-2 col-sm-2 control-label">Descripcion</label>
							  <div class="col-sm-10">
							    <textarea type="text" name="Txtdesc" class="form-control" placeholder="Descripcion" required></textarea>
							    <span class="help-block">Descripcion detallada del problema.Evitar escribir acentos</span>
							  <div>
						  </div>
						<br>  
					 <button type="submit" class="btn btn-theme">Enviar</button>
          		<!-- col-lg-12-->      	
          	<!-- /row -->
          	
          	<!-- INLINE FORM ELELEMNTS -->
            <!-- /row -->
          	
          	<!-- INPUT MESSAGES -->
            <!-- /row -->
          	
          	<!-- INPUT MESSAGES -->	
			</form>
					<!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          		
          	<!-- CUSTOM TOGGLES -->
            
			<!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - CIRCUITO 323
              <a href="form_component.html#" class="go-top">
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
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
