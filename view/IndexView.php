<!DOCTYPE HTML>
<html lang="es">
      <head>
        <title>Usuarios - EncofradosMarcelo 2018</title>
        <?php include("view/modulos/links.php"); ?>
      </head>
      <header class="main-header"><?php include('view/modulos/head_inicio.php'); ?></header>
     
      <body class="hold-transition skin-blue sidebar-mini">
      
     
      
      
      <?php include('view/modulos/slide_inicio.php');
        
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha=$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        ?>
    
 
    
  
 		
     </body>  
    </html>   