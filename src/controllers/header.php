<?php
// include_once 'session_control.php';
// include_once 'functions.php';
include_once 'config/app.php';

// $session = new session_control();
// $functions = new functions();

// if($_SESSION["pagina"] != 'user-pass' && $_SESSION["pagina"] != '404' ){
// 	if(!isset($_SESSION["id_user_AtomShop_session"])){
// 		if ($_SESSION["pagina"] != 'login'){
// 			header("location:"._HOST_."login");
// 		}
// 	}

// }

// $userLevel = $functions->getUserLevel();

// if($userLevel["id"] != 1 && (
//     $_SESSION["pagina"] == "usuarios"
//     || $_SESSION["pagina"] == "usuario"
//     || $_SESSION["pagina"] == "produto_novo"
//     || $_SESSION["pagina"] == "produto_edit"
//     )
// ){
//     header("Location: "._HOST_);
// }

$meta_tags = '
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="'._HOST_.'" /></base>
';

$stylesheet = '
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="imgs/favicon/favicon.ico" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/solid.css">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
';

$js = '
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
    
    
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button)
    </script>
    
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="dist/js/pages/dashboard.js"></script>-->
    
    <!-- AdminLTE for demo purposes 
    <script src="dist/js/demo.js"></script>-->
    
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- CryptoJS -->
    <script src="plugins/cryptojs_v3.1.2/rollups/sha256.js"></script>

';

$jsFooter = '
    
';
