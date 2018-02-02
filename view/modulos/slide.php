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


 <!-- Sidebar -->
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="view/AdminLTE 2.4.2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nombre_usuario'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
       
        <li class="active treeview menu-open" style="<?php echo getcontrolador("MenuAdministracion",$controladores) ?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="<?php echo getcontrolador("Usuarios",$controladores) ?>"><a href="<?php echo $helper->url("Usuarios","index"); ?>"><i class="fa fa-user"></i> Usuarios</a></li>
                <li style="<?php echo getcontrolador("Roles",$controladores) ?>"><a href="<?php echo $helper->url("Roles","index"); ?>"><i class="fa fa-asterisk"></i> Roles Usuarios</a></li>
                <li style="<?php echo getcontrolador("PermisosRoles",$controladores) ?>"><a href="<?php echo $helper->url("PermisosRoles","index"); ?>"><i class="fa fa-unlock-alt"></i> Permisos Roles</a></li>
            
          </ul>
        </li>
       
      </ul>
    </section>
    
  </aside>
        
            
