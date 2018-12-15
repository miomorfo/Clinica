<?php

    function getHeader(){
        $resultado = '
        <!-- Main Header -->
        <header class="main-header">
      
          <!-- Logo -->
          <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Tu</b>Clinic</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Tu</b>Clinic</span>
          </a>
      
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
      
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">
                                      <?= $_SESSION['nombre'] ?>
                                  </span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <!--<li class="user-header">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      
                      <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>-->
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <div class="col-xs-4 text-center">
                          <a href="#"></a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#"></a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#"></a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <!--<a href="#" class="btn btn-default btn-flat">Perfil</a>-->
                      </div>
      
                      <div class="pull-right">
                        <a href="../login/salir.php" class="btn btn-default btn-flat">Cerrar Session</a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--<li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
              </ul>
            </div>
          </nav>
        </header>
        
        
        ';

        return $resultado;
    }



?>