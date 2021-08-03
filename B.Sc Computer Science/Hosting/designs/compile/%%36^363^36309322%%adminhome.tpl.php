<?php /* Smarty version 2.6.26, created on 2020-05-13 08:28:01
         compiled from adminhome.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:18:48 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="admin/assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="admin/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="admin/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="admin/assets/images/avatars/mathai.jpg" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">Mathew Philip</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
           
            <li><a href="adminpass.php"><i class="icon-settings"></i> Change Password</a></li>
      <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="adminhome.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
        <li>
        <a href="staffview.php" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Staff Approval</span>
        </a>
          </li>
	      </li>
         <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Notification</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="notification.php"><i class="zmdi zmdi-dot-circle-alt"></i> Enter Notification</a></li>
          <li><a href="notificationview.php"><i class="zmdi zmdi-dot-circle-alt"></i> View notification</a></li>
        </ul>
       </li>
         <li>
        <a href="advertise.php" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Advertisement</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="advertise.php"><i class="zmdi zmdi-dot-circle-alt"></i> Enter Advertisement</a></li>
          <li><a href="advertisetbl.php"><i class="zmdi zmdi-dot-circle-alt"></i> View Advertisement</a></li>
        </ul>
       </li>
    <!--   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="ui-typography.html"><i class="zmdi zmdi-dot-circle-alt"></i> Typography</a></li>
        <li><a href="ui-cards.html"><i class="zmdi zmdi-dot-circle-alt"></i> Cards</a></li>
    <li><a href="ui-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Buttons</a></li>
        <li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Nav Tabs</a></li>
        <li><a href="ui-accordions.html"><i class="zmdi zmdi-dot-circle-alt"></i> Accordions</a></li>
        <li><a href="ui-modals.html"><i class="zmdi zmdi-dot-circle-alt"></i> Modals</a></li>
        <li><a href="ui-list-groups.html"><i class="zmdi zmdi-dot-circle-alt"></i> List Groups</a></li>
        <li><a href="ui-bootstrap-elements.html"><i class="zmdi zmdi-dot-circle-alt"></i> BS Elements</a></li>
        <li><a href="ui-pagination.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pagination</a></li>
        <li><a href="ui-alerts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Alerts</a></li>
        <li><a href="ui-progressbars.html"><i class="zmdi zmdi-dot-circle-alt"></i> Progress Bars</a></li>
    <li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-dot-circle-alt"></i> Checkboxes & Radios</a></li>
        <li><a href="ui-notification.html"><i class="zmdi zmdi-dot-circle-alt"></i> Notifications</a></li>
        <li><a href="ui-sweet-alert.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sweet Alerts</a></li>
        </ul>
      </li> -->
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Package</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="package.php"><i class="zmdi zmdi-dot-circle-alt"></i> Enter Package</a></li>
          <li><a href="packageview.php"><i class="zmdi zmdi-dot-circle-alt"></i> View Package</a></li>
        </ul>
      </li>
      <li>
        <a href="server.php" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Server</span>
          </i>
        </a>
        
       </li>
	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Domain</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="domain.php"><i class="zmdi zmdi-dot-circle-alt"></i> Enter Domain</a></li>
          <li><a href="domainview.php"><i class="zmdi zmdi-dot-circle-alt"></i> View Domain</a></li>
        </ul>
       </li>
    
      <!-- <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-email"></i>
          <span>Mailbox</span>
           <small class="badge float-right badge-warning">12</small>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="mail-inbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Inbox</a></li>
          <li><a href="mail-compose.html"><i class="zmdi zmdi-dot-circle-alt"></i> Compose</a></li>
          <li><a href="mail-read.html"><i class="zmdi zmdi-dot-circle-alt"></i> Read Mail</a></li>
        </ul>
      </li> -->
      
    <!--   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="form-inputs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Basic Inputs</a></li>
          <li><a href="form-input-group.html"><i class="zmdi zmdi-dot-circle-alt"></i> Input Groups</a></li>
          <li><a href="form-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Layouts</a></li>
          <li><a href="form-advanced.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Advanced</a></li>
          <li><a href="form-validation.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Validation</a></li>
          <li><a href="form-step-wizard.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Wizard</a></li>
        </ul>
      </li> -->

   <!--    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-lock"></i> <span>Authentication</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="authentication-signin.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignIn 1</a></li>
          <li><a href="authentication-signup.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignUp 1</a></li>
          <li><a href="authentication-signin2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignIn 2</a></li>
          <li><a href="authentication-signup2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignUp 2</a></li>
          <li><a href="authentication-lock-screen.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Lock Screen</a></li>
          <li><a href="authentication-reset-password.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Reset Password 1</a></li>
          <li><a href="authentication-reset-password2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Reset Password 2</a></li>
        </ul>
       </li> -->
      <!--  <li>
        <a href="calendar.html" class="waves-effect">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li> -->
      <!--  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-dot-circle-alt"></i> Font Awesome</a></li>
          <li><a href="icons-material-designs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Material Design</a></li>
          <li><a href="icons-themify.html"><i class="zmdi zmdi-dot-circle-alt"></i> Themify Icons</a></li>
          <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Line Icons</a></li>
          <li><a href="icons-flags.html"><i class="zmdi zmdi-dot-circle-alt"></i> Flag Icons</a></li>
        </ul>
      </li> -->
     
  <!--    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="table-simple-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Simple Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Tables</a></li>
        </ul>
       </li> -->
     
    <!--  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Maps</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="maps-google.html"><i class="zmdi zmdi-dot-circle-alt"></i> Google Maps</a></li>
          <li><a href="maps-vector.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vector Maps</a></li>
        </ul>
       </li>
      -->
    <!--   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-folder-image"></i> <span>Sample Pages</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
              <li><a href="pages-invoice.html"><i class="zmdi zmdi-dot-circle-alt"></i> Invoice</a></li>
          <li><a href="pages-user-profile.html"><i class="zmdi zmdi-dot-circle-alt"></i> User Profile</a></li>
          <li><a href="pages-blank-page.html"><i class="zmdi zmdi-dot-circle-alt"></i> Blank Page</a></li>
          <li><a href="pages-coming-soon.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Coming Soon</a></li>
          <li><a href="pages-403.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 403 Error</a></li>
          <li><a href="pages-404.html"  target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 404 Error</a></li>
          <li><a href="pages-500.html"  target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 500 Error</a></li>
        </ul>
       </li> -->

     <!--  <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level One</a></li>
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Two</a></li>
              <li>
                <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Three</a></li>
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-dot-circle-alt"></i> Level One</a></li>
        </ul>
      </li> -->
    <!--   <li class="sidebar-header">LABELS</li> -->
     <!--  <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li> -->
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     

    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="admin/assets/images/avatars/mathai.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="admin/assets/images/avatars/mathai.jpg" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Mathew Philip</h6>
            <p class="user-subtitle">philipmathew399@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
       
        
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i><a href="adminpass.php"> Change Password</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php"> Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><td> <?php echo $this->_tpl_vars['view7']; ?>
</td> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Domains <span class="float-right"> </i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><td> <?php echo $this->_tpl_vars['view8']; ?>
</td> <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Packages <span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"> <td> <?php echo $this->_tpl_vars['view10']; ?>
</td><span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Feedbacks <span class="float-right"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0"><td> <?php echo $this->_tpl_vars['view11']; ?>
</td> <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Complaints <span class="float-right"> </span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Site Traffic
		   <div class="card-action">
			 <div class="dropdown">
			 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
			  <i class="icon-options"></i>
			 </a>
				<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="javascript:void();">Action</a>
				<a class="dropdown-item" href="javascript:void();">Another action</a>
				<a class="dropdown-item" href="javascript:void();">Something else here</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="javascript:void();">Separated link</a>
			   </div>
			  </div>
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Visitor</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Visitor</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">45.87M</h5>
			   <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">15:48</h5>
			   <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">245.65</h5>
			   <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>

     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Daily sales
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> Domain</td>
                   <td>Rs <?php if ($this->_tpl_vars['view3'] != null): ?><?php echo $this->_tpl_vars['view3']; ?>

                   <?php else: ?> 0
                 <?php endif; ?></td>
                  
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Package</td>
                   <td>Rs <?php if ($this->_tpl_vars['view4'] != null): ?><?php echo $this->_tpl_vars['view4']; ?>

                   <?php else: ?> 0
<?php endif; ?></td>
                   
                 </tr>
                 
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
	
   <div class="row">
	<div class="col-12 col-lg-6 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart" data-percent="60">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Facebook Followers</h6>
			   <small class="mb-0">22.14% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-facebook text-white text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-6 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart" data-percent="65">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Twitter Tweets</h6>
			   <small class="mb-0">32.15% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-twitter text-white text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-12 col-xl-4">
	   <div class="card">
	     <div class="card-body">
		   <div class="media align-items-center">
		     <div class="w_chart easy-dash-chart" data-percent="75">
			   <span class="w_percent"></span>
			 </div>
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Youtube Subscribers</h6>
			   <small class="mb-0">58.24% <i class="fa fa-arrow-up"></i> Since Last Week</small>
			 </div>
			 <i class="fa fa-youtube text-white fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	</div><!--End Row-->


  <div class="row">
     <div class="col-12 col-lg-12 col-xl-6">
       <div class="card">
         <div class="card-header">World Selling Region
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
         <div class="card-body">
            <div id="dashboard-map" style="height: 275px;"></div>
         </div>
         <div class="table-responsive">
            <table class="table table-hover align-items-center">
               <thead>
                  <tr>
                      <th>Country</th>
                      <th>Income</th>
                      <th>Trend</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><i class="flag-icon flag-icon-ca mr-2"></i> USA</td>
                      <td>4,586$</td>
                      <td><span id="trendchart1"></span></td>
                  </tr>
                  <tr>
                      <td><i class="flag-icon flag-icon-us mr-2"></i>Canada</td>
                      <td>2,089$</td>
                      <td><span id="trendchart2"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-in mr-2"></i>India</td>
                      <td>3,039$</td>
                      <td><span id="trendchart3"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-gb mr-2"></i>UK</td>
                      <td>2,309$</td>
                      <td><span id="trendchart4"></span></td>
                  </tr>

                  <tr>
                      <td><i class="flag-icon flag-icon-de mr-2"></i>Germany</td>
                      <td>7,209$</td>
                      <td><span id="trendchart5"></span></td>
                  </tr>
				  
              </tbody>
          </table>
          </div>
       </div>
     </div>
	 
	 <div class="col-12 col-lg-12 col-xl-6">
        <div class="row">
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Page Views</p>
				<h4 class="mb-0">8,293 <small class="small-font">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			   <canvas id="chart3"></canvas>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Total Clicks</p>
				<h4 class="mb-0">7,493 <small class="small-font">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
			 </div>
			 <div class="chart-container-3">
			  <canvas id="chart4"></canvas>
			  </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body text-center">
				<p class="mb-4">Total Sales</p>
				<input class="knob" data-width="175" data-height="175" data-readOnly="true" data-thickness=".2" data-angleoffset="90" data-linecap="round" data-bgcolor="rgba(255, 255, 255, 0.14)" data-fgcolor="#fff" data-max="15000" value="<?php echo $this->_tpl_vars['view9']; ?>
"/>
				<hr>
				<p class="mb-0 small-font text-center">3.4% <i class="zmdi zmdi-long-arrow-up"></i> since yesterday</p>
			 </div>
		   </div>
		  </div>
		  <div class="col-12 col-lg-6">
		    <div class="card">
			 <div class="card-body">
				<p>Device Storage</p>
				<h4 class="mb-3">42620/50000</h4>
				<hr>
				<div class="progress-wrapper mb-4">
				   <p>Documents <span class="float-right">12GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:80%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				   <p>Images <span class="float-right">10GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:60%"></div>
                   </div>
                </div>
				
				<div class="progress-wrapper mb-4">
				    <p>Mails <span class="float-right">5GB</span></p>
                   <div class="progress" style="height:5px;">
                       <div class="progress-bar" style="width:40%"></div>
                   </div>
                </div>
				
			 </div>
		   </div>
		  </div>
		</div>
	 </div>
	 
  </div><!--End Row-->


    <div class="row">
      <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
           <div class="card-body">
             <p>Monthly Earning</p>
             <p>Domains</p>
             <h4 class="mb-0"> Rs <?php if ($this->_tpl_vars['view5'] != null): ?><?php echo $this->_tpl_vars['view5']; ?>

             <?php else: ?>0<?php endif; ?></h4>
             <small> <i class="zmdi zmdi-long-arrow-up"></i> Since Today</small>
             <hr>
             <p>Packages</p>
             <h4 class="mb-0">Rs  <?php if ($this->_tpl_vars['view6'] != null): ?><?php echo $this->_tpl_vars['view6']; ?>

             <?php else: ?>0<?php endif; ?></h4>
             <small><i class="zmdi zmdi-long-arrow-up"></i> Since Today</small>
             <div class="mt-5">
			 <div class="chart-container-4">
               <canvas id="chart5"></canvas>
			  </div>
            </div>
           </div>
        </div>

      </div>

      <div class="col-12 col-lg-6 col-xl-8">
         <div class="card">
           <div class="card-header">Customer Feedbacks
             <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
           </div>
           <ul class="list-group list-group-flush">
              <li class="list-group-item bg-transparent">
                <div class="media align-items-center">
                 
                <div class="star">
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                  <i class="zmdi zmdi-star text-light"></i>
                </div>
              </div>
              </li> <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>FEEDBACK</th>
                     <th>DATE</th>
                                         
                   </tr>
                   </thead>
                   <tbody>
                    <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <tr>
                    <td><?php echo $this->_tpl_vars['v']['feedback']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['v']['currentdate']; ?>
</td>
                    </tr>
                     <?php endforeach; endif; unset($_from); ?>
                 </tbody></table>
               </div>
              
         </div>
      </div>
    </div><!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">CUSTOMER COMPLAINTS
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>NAME</th>
                     <th>CONTACT NO</th>
                     <th>E-MAIL</th>
                     <th>SUBJECT</th>
                     <th>COMPLAINT</th>
                     <th>DATE</th>
                     
                   </tr>
                   </thead>
                   <tbody>
                    <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
                    <tr>
                    <td><?php echo $this->_tpl_vars['b']['name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['b']['contactno']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['b']['email']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['b']['subject']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['b']['complaint']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['b']['currentdate']; ?>
</td>
                    <td><a href="reply.php" class="btn btn-danger btn-round waves-effect waves-light m-1">Reply</a></td>
                    </tr>
                     <?php endforeach; endif; unset($_from); ?>
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
    <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <?php echo '
  <script src="admin/assets/js/jquery.min.js"></script>
  <script src="admin/assets/js/popper.min.js"></script>
  <script src="admin/assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="admin/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="admin/assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="admin/assets/js/jquery.loading-indicator.html"></script>
  <!-- Custom scripts -->
  <script src="admin/assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="admin/assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Vector map JavaScript -->
  <script src="admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Easy Pie Chart JS -->
  <script src="admin/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <!-- Sparkline JS -->
  <script src="admin/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="admin/assets/plugins/jquery-knob/excanvas.js"></script>
  <script src="admin/assets/plugins/jquery-knob/jquery.knob.js"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="admin/assets/js/index.js"></script>
  '; ?>


  
</body>

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:20:15 GMT -->
</html>