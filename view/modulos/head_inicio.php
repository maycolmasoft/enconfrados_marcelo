    <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
    
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Encofrados</b>MARCELO</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
         
        
          <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="view/AdminLTE 2.4.2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              
              <span class="hidden-xs"><?php echo "aaaaaaa"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="view/AdminLTE 2.4.2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Usuario: <?php echo "aaaa";?>
                  <small><?php echo "aaaa"; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                     <a href="<?php echo $helper->url("Afiliaciones","index"); ?>" class="btn btn-warning btn-block btn-exit-system"><i class='fa fa-power-off'></i> Registrarse</a>
                </div>
                <div class="user-footer pull-right">
                   <a href="<?php echo $helper->url("Usuarios","Loguear"); ?>" class="btn btn-success btn-block btn-exit-system"><i class='fa fa-power-off'></i> Iniciar Sesión</a>
                 </div>
              </li>
            </ul>
          </li>
        
        
        </ul>
      </div>

    </nav>
  </header>