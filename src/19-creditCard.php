<?php
    $token = $_POST['csrf_token'];
    $user = $_POST['user_id'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Crossing the Line: XSS Unleashed</title>
  <?php include_once 'controllers/header.php'; ?>
  <?php echo $meta_tags; ?>
  <?php echo $stylesheet; ?>
  <?php echo $js; ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse ">

<div class="wrapper">

 <!-- Navbar d-lg-none d-xl-none-->
  <nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav mt-1">
      <li class="nav-item">
        <a class="nav-link  pd10" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->
  <?php include('sidebar.php'); ?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header   -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="container">
        <h1 align="center" class="h41stur">Task 19 - Config</h1>
        <br>
        <br>
      <div align="center"><img width="400" src="../../img/elytron.png" /></div>
      <br>
    

    <h1 align="center" class="h41stur"></h1>
    <br>
    <p id="credit_card" class="h41stur"><?php if ($user == "3663" && $token == "d8aea5b04b59ad8a36d1e2c10a77c426") { echo "5446 1521 4446 0680"; }?></p>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>
    

    <a href="task-19/">Return</a>

    </div>


</body>
</html>