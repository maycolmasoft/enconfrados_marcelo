<?php 
$controladores=$_SESSION['controladores'];
 function getcontrolador($controlador,$controladores){
 	$display="display:none";
 	
 	if (!empty($controladores))
 	{
 	foreach ($controladores as $res)
 	{
 		if($res->nombre_controladores==$controlador)
 		{
 			$display= "display:block";
 			break;
 			
 		}
 	}
 	}
 	
 	return $display;
 }
?>


<section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="view/images/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nombre_usuario'] ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
          </div>

         
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
         
            <li class="treeview"  style="<?php echo getcontrolador("MenuAdministracion",$controladores) ?>">
              <a href="#"><i class="fa fa-cogs"></i> <span>ADMINISTRACIÓN.</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li style="<?php echo getcontrolador("Usuarios",$controladores) ?>"><a href="<?php echo $helper->url("Usuarios","index"); ?>"><i class="fa fa-user"></i> Usuarios</a></li>
                <li style="<?php echo getcontrolador("Roles",$controladores) ?>"><a href="<?php echo $helper->url("Roles","index"); ?>"><i class="fa fa-asterisk"></i> Roles Usuarios</a></li>
                <li style="<?php echo getcontrolador("PermisosRoles",$controladores) ?>"><a href="<?php echo $helper->url("PermisosRoles","index"); ?>"><i class="fa fa-unlock-alt"></i> Permisos Roles</a></li>
              </ul>
            </li>
            
            
            
            
            
               <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>POLÍTICAS.</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $helper->url("Politicas","index"); ?>"><i class="fa fa-user"></i> Politicas</a></li>
                  </ul>
            </li>
            
            
          
            
          </ul><!-- /.sidebar-menu -->
          
</section>