<!DOCTYPE HTML>
<html lang="es">
      <head>
        <title>Afiliarse - EncofradosMarcelo 2018</title>
        <?php include("view/modulos/links.php"); ?>
      </head>
      <header class="main-header"><?php include('view/modulos/head_inicio.php'); ?></header>
     
      <body class="hold-transition skin-blue sidebar-mini">
       
        <?php include('view/modulos/slide_inicio.php');
        
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        ?>
    
		  <div class="content-wrapper">
		   <section class="content-header">
         <h1>
          <span class="logo-lg"><b>Afiliaciones</b>..</span>
         <small><?php echo $fecha; ?></small>
         </h1>
         
         </section>
		  
		  
		  
		  
		  <section class="content">
		  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registrate para ser parte de nuestras promociones</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form class="form-horizontal">
        <div class="box-body">
        
               <div class="form-group">
                  <label for="tipo_identificacion" class="col-sm-2 control-label">Tipo Identificación:</label>
			       <div class="col-sm-4">
                   	<select name="tipo_identificacion" id="tipo_identificacion"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="ruc">RUC</option>
						<option value="cedula">CEDULA</option>
						
					 </select>
                  </div>
                </div>
        
        		<div class="form-group">
                  <label for="identificacion" class="col-sm-2 control-label">Identificación:</label>
			       <div class="col-sm-4">
                    <input type="number" class="form-control" id="identificacion" placeholder="identificación usuario..">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="nombres_usuarios" class="col-sm-2 control-label">Nombres:</label>
			       <div class="col-sm-4">
                    <input type="text" class="form-control" id="nombres_usuarios" placeholder="nombres usuario..">
                  </div>
                </div>
                
                 <div class="form-group">
                  <label for="apellidos_usuarios" class="col-sm-2 control-label">Apellidos:</label>
			       <div class="col-sm-4">
                    <input type="text" class="form-control" id="apellidos_usuarios" placeholder="apellidos usuario..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="imagen_usuarios" class="col-sm-2 control-label">Fotografía:</label>
			       <div class="col-sm-4">
                    <input type="file" class="form-control" id="imagen_usuarios" placeholder="fotografía usuario..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="usuario_usuarios" class="col-sm-2 control-label">Usuario:</label>
			       <div class="col-sm-4">
                    <input type="text" class="form-control" id="usuario_usuarios" placeholder="usuario para ingresar al sistema..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="clave_usuarios" class="col-sm-2 control-label">Password:</label>
			       <div class="col-sm-4">
                    <input type="password" class="form-control" id="clave_usuarios" placeholder="clave para ingresar al sistema..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="cclave_usuarios" class="col-sm-2 control-label">Confirme Password:</label>
			       <div class="col-sm-4">
                    <input type="password" class="form-control" id="cclave_usuarios" placeholder="confirma clave para ingresar al sistema..">
                  </div>
                 </div>
                 
                <div class="form-group">
                  <label for="correo_usuarios" class="col-sm-2 control-label">Correo Electrónico:</label>
			       <div class="col-sm-4">
                    <input type="email" class="form-control" id="correo_usuarios" placeholder="correo electronico usuario..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="celular_usuarios" class="col-sm-2 control-label">Celular:</label>
			       <div class="col-sm-4">
                    <input type="number" class="form-control" id="celular_usuarios" placeholder="# celular usuario..">
                  </div>
                 </div>
                 
                 <div class="form-group">
                  <label for="telefono_usuarios" class="col-sm-2 control-label">Teléfono:</label>
			       <div class="col-sm-4">
                    <input type="number" class="form-control" id="telefono_usuarios" placeholder="# teléfono usuario..">
                  </div>
                 </div>
        
        
              <div class="form-group">
                  <label for="tipo_identificacion" class="col-sm-2 control-label">Ubicación:</label>
			       <div class="col-sm-2">
                   	<select name="id_provincias" id="id_provincias"  class="form-control" >
			  		<option value="0">--Provincia--</option>
						<option value="ruc">RUC</option>
						<option value="cedula">CEDULA</option>
						
					 </select>
                  </div>
                  
                  <div class="col-sm-2">
                   	<select name="id_cantones" id="id_cantones"  class="form-control" >
			  		<option value="0">--Cantón--</option>
						<option value="ruc">RUC</option>
						<option value="cedula">CEDULA</option>
						
					 </select>
                  </div>
                  
                  <div class="col-sm-2">
                   	<select name="id_parroquias" id="id_parroquias"  class="form-control" >
			  		<option value="0">--Parroquia--</option>
						<option value="ruc">RUC</option>
						<option value="cedula">CEDULA</option>
						
					 </select>
                  </div>
                </div>
              
              <div class="form-group">
                  <label for="direccion_usuarios" class="col-sm-2 control-label"></label>
			       <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="direccion_usuarios" placeholder="Referencia del domicilio..   Nombre Barrio, Nombre Calle Principal etc.."></textarea>
                  </div>
                 </div>
                 
                   <div class="btn-group">
                    <button type='button' class='btn btn-raised btn-success btn-lg' onclick='NuevoUsuario();' id='btn-nuevo'><i class='fa fa-check-circle'></i> Afiliarse..</button>
                    <button type='button' class='btn btn-danger btn-raised btn-lg' onclick='CancelaNuevoUsuario();' id='btn-nuevo-cancela'><i class='fa fa-times'></i> Cancelar..</button>
                    </div>
              
        </div>
                   
        </form>
    
        <div class="box-footer">
          Una vez que finalices el registro ingresa a tu cuenta de correo electrónico para confirmar tu afiliación.
        </div>
      </div>
		  </section>
		  </div>
    
  
 		
     </body>  
    </html>   