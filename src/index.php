<?php
// include_once 'controllers/session_control.php';
// include_once 'controllers/functions.php';
include_once 'config/app.php';

// $session = new session_control();
// $functions = new functions();

// $session->setSession('pagina','orders');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html><head>

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
      <h1 align="center" class="h41stur">Crossing the Line: XSS Unleashed</h1>
      <br>
      <div align="center"><img width="400" src="../img/elytron.png" /></div>
    

    <h1 align="center" class="h41stur">Task list:</h1>
    <h2></h2><h2></h2>

    <div align="center">
      <a href="/task-01">Task 1 - Modify HTML Elements</a><br/>
      <a href="/task-02">Task 2 - Manipulating Forms</a><br/>
      <a href="/task-03">Task 3 - Intercept Form Submit</a><br/>
      <a href="/task-04">Task 4 - Stealing Form Submissions</a><br/>
      <a href="/task-05">Task 5 - Redirecting All Links in the Page</a><br/>
      <a href="/task-06">Task 6 - Changing Content to Social Engineering</a><br/>
      <a href="/task-07">Task 7 - Abusing Event Listeners</a><br/>
      <a href="/task-08">Task 8 - Redirect on Click</a><br/>
      <a href="/task-09">Task 9 - JavaScript Keylogger</a><br/>
      <a href="/task-10">Task 10 - Invoking External JS</a><br/>
      <a href="/task-11">Task 11 - Invoking External JS Using JS</a><br/>
      <a href="/task-12">Task 12 - Stealing Information from Auto-Complete Fields</a><br/>
      <a href="/task-13">Task 13 - Stealing Information from Auto-Complete Fields with XMLHttpRequest</a><br/>
      <a href="/task-14">Task 14 - Data Exfiltration with XMLHttpRequest GET</a><br/>
      <a href="/task-15">Task 15 - Data Exfiltration with XMLHttpRequest POST</a><br/>
      <a href="/task-16?search=xss&token=d8aea5b04b59ad8a36d1e2c10a77c426">Task 16 - Getting Parameters from URL</a><br/>
      <a href="/task-17">Task 17 - Stealing CSRF Tokens</a><br/>
      <a href="/task-18">Task 18 - HTML Parsing of XMLHttpRequest</a><br/>
      <a href="/task-19">Task 19 - HTML Parsing Multi-Level</a><br/>
      <a href="/task-20">Task 20 - JSON Parsing Multi-Level</a><br/>
      <a href="/task-21">Task 21 - XML Parsing Multi-Level</a><br/>
    </div>

    </div>



		  </div><!-- /.container-fluid -->
		</section>
    <!-- /.content -->
  	</div>
  </div>
<!-- /.content-wrapper -->

    <!-- Confirm modal -->


    <div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby=" Mensagem" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content bg-danger">
                <div class="modal-body">
                    É necessário confirmar esta operação.
                    <input type="hidden" class="field_confirm" id="field_confirm" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-warning" id="confirm" onclick="cancelOrder($('#field_confirm').val())">Confirmar</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>


<script>

	$(".input-int").inputmask({
	  rightAlign:false,
	  alias: "numeric",
	  allowMinus: true,
	  digits: 0,
	  min: -9999,
	  max: 9999
	});

	$(document).ready(function() {


		var oTable = $("#contentDataTable").DataTable({
			"order":[[ 0, "desc" ]],
			"pageLength": 50,
			"info":false,
			"language": {
				"paginate": {
				  "previous": "&laquo;",
				  "next": "&raquo;"
				},
				"lengthMenu": "_MENU_&nbsp;&nbsp;Registros por página",
				"zeroRecords": "Ops! Nenhum item encontrado",
				"infoEmpty": "Ops! Nenhum registro encontrado",
				"infoFiltered": "(Filtrado por _MAX_)",
				"search":"Buscar:"
			}
		})

        $("#filterStatus").change(function(){
            let status = $(this).val();


            location.href = "<?=_HOST_?>pedidos/?status="+status;
        });
	})



</script>
</body>
</html>