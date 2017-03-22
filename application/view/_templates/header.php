<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BLUE MARLIN</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= URL ?>asset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= URL ?>asset/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= URL ?>asset/dist/css/skins/_all-skins.css">
  <!-- iCheck -->
<link rel="stylesheet" href="<?= URL ?>asset/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="<?= URL ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="<?=URL ?>asset/plugins/datatables/dataTables.bootstrap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= URL ?>asset/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= URL ?>asset/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= URL ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
  <link rel="stylesheet" href="<?= URL ?>asset/plugins/morris/morris.css">
<link rel="stylesheet" href="<?=URL ?>public/css/datatables.min.css"> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?= URL ?>home/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BM-</b>System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= URL ?>asset/dist/img/logo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= URL ?>asset/dist/img/logo.jpg" class="img-circle" alt="User Image">

                <p>
                  Administrador Blue Marlin
                  <small>Dora Palacio</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#"  class="btn btn-default btn-flat"> Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= URL ?>asset/dist/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrador</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>CALENDARIO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><div class="box box-solid bg-black-gradient">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
          </div></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa  fa-cutlery"></i>
            <span>PEDIDOS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>pedido/index"><i class="fa fa-circle-o"></i> PEDIDOS</a></li>
            <li><a href="<?= URL ?>cliente/index"><i class="fa fa-circle-o"></i> CLIENTES</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cubes"></i>
            <span>INVENTARIO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>entradas/index"><i class="fa fa-circle-o"></i> ENTRADAS</a></li>
            <li><a href="<?= URL ?>insumo/index"><i class="fa fa-circle-o"></i> INSUMOS</a></li>
            <li><a href="<?= URL ?>producto/index"><i class="fa fa-circle-o"></i> PRODUCTOS</a></li>
            <li><a href="<?= URL ?>bajas/index"><i class="fa fa-circle-o"></i> BAJAS</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-coffee"></i>
            <span>MENU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>plato/index"><i class="fa fa-circle-o"></i> PLATOS</a></li>
            <li><a href="<?= URL ?>adicion/index"><i class="fa fa-circle-o"></i> ADICIONES</a></li>
            
          </ul>
        </li>
        <li>
          <a href="<?= URL ?>Mesa/index">
            <i class="fa fa-glass"></i> <span>MESAS</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
         <li>
          <a href="pages/widgets.html">
            <i class="fa fa-group"></i> <span>EMPLEADOS</span>
            <span class="pull-right-container">
            </span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= URL ?>empleado/index"><i class="fa fa-circle-o"></i>MESEROS</a>
            <li><a href="<?= URL ?>turno/index"><i class="fa fa-circle-o"></i>TURNOS</a>
          </ul>
        </li>
         <li>
          <a href="<?= URL ?>reservas/index">
            <i class="fa fa-birthday-cake"></i> <span>RESERVAS</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>   
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-pie-chart"></i> <span>ENCUESTAS</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
        <li>
          <a href="<?= URL ?>agenda/index">
            <i class="fa fa-calendar"></i> <span>CITAS</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
        <li>
          <a href="<?= URL ?>maestras/index">
            <i class="fa fa-cogs"></i> <span>HERRAMIENTAS</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  