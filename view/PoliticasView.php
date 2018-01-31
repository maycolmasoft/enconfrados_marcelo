<!DOCTYPE HTML>
<html lang="es">
      <head>
        <title>Usuarios - aDocument 2015</title>
         <?php include("view/modulos/links.php"); ?>
           <link rel="stylesheet" href="view/adminLTE/plugins/datatables/dataTables.bootstrap.css">
      </head>
      <body onload="lista_politicas();">
      <div class="wrapper">
 
      <header class="main-header">
        <?php include('view/modulos/head.php');?>
      </header>
      
      <aside class="main-sidebar">
	  <?php include('view/modulos/slide.php');
        
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        ?>
      </aside>
 
    
         <div class="content-wrapper">
         <section class="content-header">
         <h1>
         <?php   echo "Sudamericano";?>
         <small><?php echo $fecha; ?></small>
         </h1>
         <ol class="breadcrumb">
         <li><a href="<?php echo $helper->url("usuarios","Loguear"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Políticas</li>
         </ol>
         </section>

         
       
         <section class="content">
          <div class='nav-tabs-custom'>
          		<ul id="myTabs" class="nav nav-tabs pull-right">
                   <li id="nav-add"><a href="#nuevo" data-toggle="tab">Agregar</a></li>
                  <li id="nav-listado" class="active"><a href="#listado" data-toggle="tab">Listado</a></li>
                  <li class="pull-left header"><i class="fa fa-file-text"></i> Panel de Políticas.</li>
                </ul>
         
         
 		   <div class="tab-content">
           <div class="tab-pane active" id="listado">
           <div id='politicas_registrados'></div>
           </div>
		   
		   
		   
		   
		   
		   
		   
                  
                  
            <div class="tab-pane" id="nuevo">
           
			<form class="form-horizontal" action="<?php echo $helper->url("Politicas","InsertaPoliticas"); ?>" method="post" enctype="multipart/form-data">
       
              <div class='form-group'>
                    <label for="nombre_responsable" class="col-sm-2 control-label">Nombres Responsable:</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" name="nombre_responsable" id='nombre_responsable' placeholder='nombre responsable...'>
                    <span class="help-block"></span>
                    </div>
                    </div>
            
              <div class='form-group'>
                    <label for="asunto" class="col-sm-2 control-label">Asunto:</label>
                    <div class="col-sm-3">
                    <textarea type="text" class="form-control" name="asunto" id='asunto'  rows="12" placeholder='Asunto...'></textarea>
                    </div>
                    </div>
           
			 <div class='form-group'>
                    <label for="archivo" class="col-sm-2 control-label">Archivo:</label>
                    <div class="col-sm-3">
                  	 	<input type="file" name="archivo" id="archivo" value="" class="form-control"/> 
			
                    </div>
                    </div>
			
           
            
         
	
	    <br>
               
                  
                    <div class="btn-group">
                    <button type='submit' class='btn btn-raised btn-primary btn-lg' id='btn-nuevo' name="btn-nuevo"><i class='fa fa-check-circle'></i> Registrar Política.</button>
                    <button type='button' class='btn btn-danger btn-raised btn-lg' onclick='CancelaNuevoPolitica();' id='btn-nuevo-cancela'><i class='fa fa-times'></i> Cancelar.</button>
                    </div>
                    </form>
                  </div>
                  </div>
  							
	         
	      </div>
         </section>
         
           
         </div>
  
  
	    <?php include('view/modulos/footer.php'); ?>
	    <div class="control-sidebar-bg"></div>
	    </div>
	  
	  
	        
	    <div class="MsjAjaxForm"></div>
	    <?php include "view/modulos/script.php"; ?>
    <script src="view/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="view/adminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>  
    <script src="view/adminLTE/plugins/noty/packaged/jquery.noty.packaged.min.js"></script> 
   
	 
    <script src="view/adminLTE/dist/js/source_politica.js"></script> 
 	
 	
 		
 		
     </body>  
    </html>   