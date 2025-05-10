<?php
// include_once 'controllers/session_control.php';
// include_once 'controllers/functions.php';
// include_once 'controllers/header.php';

// $session = new session_control();
// $functions = new functions();


?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link center-block ">
      <!-- <img src="imgs/logo_app.jpg" height="50px" alt="Atom Shop App" class="img-responsive logo-xl "> -->
      <!-- <img src="imgs/logo_app_mini.jpg"  height="50px" alt="Atom Shop App" class="img-responsive logo-xs"> -->
    
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/profile_user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="./">
          <span class="d-block" style="color: #Of1839 !important;">XSS Unleashed</span>
          </a>
        </div>
      </div>
  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <?php 
       $menu = '
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
		 ';
	    $menu .= '
          <li class="nav-item">
            <a href="./task-01" class="nav-link" style="color: #of1839 !important;">
              <i class="nav-icon fas fa-biohazard"></i>
              <p>
                Task 1
              </p>
            </a>
          </li>
		  ';
          
        $menu .= '
          <li class="nav-item">
            <a href="./task-02" class="nav-link " style="color: #of1839 !important;">
              <i class="nav-icon fas fa-biohazard"></i>
              <p>
                Task 2
              </p>
            </a>
          </li>
		  ';
        $menu .= '
          <li class="nav-item">
            <a href="./task-03" class="nav-link " style="color: #of1839 !important;">
              <i class="nav-icon fas fa-biohazard"></i>
              <p>
                Task 3
              </p>
            </a>
          </li>
		  ';
          
        $menu .= '
          <li class="nav-item">
            <a href="./task-04" class="nav-link " style="color: #of1839 !important;">
              <i class="nav-icon fas fa-biohazard"></i>
              <p>
                Task 4
              </p>
            </a>
          </li>
		  ';

		$menu .= '
		  <li class="nav-item">
			<a href="./task-05" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 5
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-06" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 6
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-07" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 7
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-08" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 8
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-09" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 9
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-10" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 10
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-11" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 11
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-12" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 12
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-13" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 13
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-14" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 14
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-15" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 15
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-16?search=xss&token=d8aea5b04b59ad8a36d1e2c10a77c426" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 16
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-17" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 17
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-18" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 18
			  </p>
			</a>
		  </li>
		  ';
        
          $menu .= '
		  <li class="nav-item">
			<a href="./task-19" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 19
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-20" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 20
			  </p>
			</a>
		  </li>
		  ';

          $menu .= '
		  <li class="nav-item">
			<a href="./task-21" class="nav-link " style="color: #of1839 !important;">
			  <i class="nav-icon fas fa-biohazard"></i>
			  <p>
				Task 21
			  </p>
			</a>
		  </li>
		  ';

        

			  
			 
			  
			 
	      
		 
		  $menu .= '</ul>';
		  echo $menu;
		  ?>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php  ?>