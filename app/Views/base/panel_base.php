<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CEDRO | <?= $nombrePagina ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!--SWEETALERT-->
  <link href="<https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js" rel="stylesheet">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_CSS . 'adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'toastr/toastr.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <link rel="shortcut icon" href="<?php echo base_url(RECURSOS_PORTAL_IMG . 'edi.png') ?>">

  <!-- *********************************************** -->
    <!-- ********* CSS ESPECÍFICOS DE LA VISTA ********* -->
    <?= $this->renderSection("css") ?>
    <!-- *********************************************** -->
    <!-- *********************************************** -->

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'edi.png') ?>" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Fullscreen -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Fullscreen">
            <i class="fa fa-arrows-alt"></i>
          </a>
        </li>
        <!-- Perfil -->
        <li class="nav-item">

        </li>
        <!-- Logout -->
        <li class="nav-item">
          <a class="nav-link" href="<?= route_to('cerrarSesion')?>" role="button" data-toggle="tooltip" data-placement="top" title="Cerrar sesión">
            <i class="fa fa-lock"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" -->
        <!-- style="opacity: .8"> -->
        <img class="animation__shake" src="<?php echo base_url(RECURSOS_PORTAL_IMG . 'edi.png') ?>" alt="Rentas" height="60" width="60">
        <span class="brand-text font-weight-light">Rentas Cedros</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="<?= $fotoPerfil ?>" class="img-circle elevation-2" alt="User Image">      
          </div>
          <div class="info">
            <b><a class="d-block" href="<?=route_to('perfil') ?>"><?= $nombre_administrador ?></a></b>
            <a href="<?=route_to('perfil') ?>" class="d-block"><?= $rol?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <?= $menu ?>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <!-- <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div> -->
          <?= $breadcrumb ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!--**********************************************
                        CONTENIDO PRINCIPAL 
          **********************************************-->
      <section class="content">
        <?= $this->renderSection("contenido") ?>
      </section>
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
      <strong>Copyright &copy; 2023</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'jquery/jquery.min.js'); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'jquery-ui/jquery-ui.min.js'); ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>">
  </script>
  <!-- Summernote -->
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'summernote/summernote-bs4.min.js'); ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>">
  </script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'adminlte.js'); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(RECURSOS_PANEL_JS .  'demo.js'); ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(RECURSOS_PANEL_JS .  'pages/dashboard.js'); ?>"></script>
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS .  'jquery-validation/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS .  'jquery-validation/additional-methods.min.js'); ?>"></script>
  <!-- Jquery Specific Validation -->
  <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'usuario_nuevo.js'); ?>"></script>
  <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS . 'datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'usuarios.js'); ?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/usuario_nuevo.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/usuario_detalles.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/sucursal_nueva.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/proyeccion_nueva.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/proyeccion_detalles.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/perfil.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/familiares_detalles.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/familiares_nueva.js')?>"></script>
    <script src="<?php echo base_url(RECURSOS_PANEL_JS . 'especificos/boleto_nuevo.js')?>"></script>
    
    <!--toastr-->
    <script src="<?php echo base_url(RECURSOS_PANEL_PLUGINS.'toastr/toastr.min.js') ?>"></script>
    <script>
        //llamar la funcion para mostrar el mensaje
        <?= mostrar_mensaje();?>
    </script>

    
        <!-- *********************************************** -->
    <!-- ********* JS ESPECÍFICOS DE LA VISTA ********* -->
    <?= $this->renderSection("js") ?>
    <!-- *********************************************** -->
    <!-- *********************************************** -->
</body>

</html>