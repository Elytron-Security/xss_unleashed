<?php
    setcookie("h41stur", time() + (86400 * 30), "/");
    $xss = $_GET["search"];
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
        <h1 align="center" class="h41stur">Task 1 - Modify HTML Elements</h1>
        <br>
        <br>
      <div align="center"><img width="400" src="../img/elytron.png" /></div>
      <br>
      <br>
    

    <h1 align="center" class="h41stur">Modify this field value!</h1>
    <h2></h2><h2></h2>

    <form class="form-signin">
        <h2 class="form-signin-heading" class="h41stur">And this field value!</h2>
        <input type="text" value="" class="input-block-level"  name="search">

        <button class="btn btn-large btn-primary" type="submit">Submit!</button>
    </form>

    <h2 class="h41stur">Search Engine: <?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>Modify the fields</li>
                </ol>

            </p>
        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>