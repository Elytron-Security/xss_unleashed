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
        <h1 align="center" class="h41stur">Task 17 - Stealing CSRF Tokens</h1>
        <br>
        <br>
      <div align="center"><img width="400" src="../img/elytron.png" /></div>
      <br>
    

    <h1 align="center" class="h41stur">H41stur Banking Account</h1>
    <br>
    <h2 align="center" class="h41stur" id="exploit"></h2>
    <h2></h2>
    <form class="form-signin" action="creditCard/" method="POST">
        <h2 class="form-signin-heading">Get Card Number</h2>
        <input type="text" value="" class="input-block-level" placeholder="Username" name="user">
        <input type="hidden" name="csrf_token" value="d8aea5b04b59ad8a36d1e2c10a77c426" id="csrf_token">
        <button class="btn btn-large btn-primary" type="submit">Submit</button>
    </form>

    <h2 class="h41stur">Search Engine: <?php echo $xss; ?></h2>
    <p>
        <div class="well">
            <p><b>Objectives:</b></p>

            <p>
                <ol>

                    <li>The Credit Card Number can be obtained via POST request to /task-17/creditCard/ with parameter user and the right csrf_token</li>
                    <li>Exfilter the credit card number and load it into an element with id "exploit"</li>
                </ol>

            </p>
        </div>

    <a href="../">Return to tasks list</a>

    </div>


</body>
</html>