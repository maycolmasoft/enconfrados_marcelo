<!DOCTYPE HTML>
<html lang="es">
    <head>
     <title>Bienvenidos-EncofradosMarcelo</title>
   
  <?php include("view/modulos/links.php"); ?>
      
    </head>
    
     <header class="main-header">

        <!-- Logo -->
        <?php
        include('view/modulos/head.php');
        ?>

      </header>
    <body  class="hold-transition skin-blue sidebar-mini"  onload="pone_users(); pone_roles(); pone_permisos_roles();">
   
    <?php
        include('view/modulos/slide.php');
        
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        
        ?>
        
        
        
        
         <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           <span class="logo-lg"><b>Encofrados</b>MARCELO</span>
            <small><?php echo $fecha; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $helper->url("usuarios","Loguear"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Inicio</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='row'>
          <div id='pone_users'></div>
          <div id='pone_roles'></div>
          <div id='pone_permisos_roles'></div>
          
         

         

          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        
        
        
        
        
  <?php include('view/modulos/footer.php'); ?>  
  <script src="view/adminLTE/dist/js/source_init.js"></script> 
    </body>
</html>