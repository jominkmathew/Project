<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:37:28 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
 
{literal}


<!--text editor-->
  <link rel="stylesheet" href="admin/assets/plugins/summernote/dist/summernote-bs4.css"/> 
  <!--Select Plugins-->
  <link href="admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
  <!--inputtags-->
  <link href="admin/assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
  <!--multi select-->
  <link href="admin/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
  <!--Bootstrap Datepicker-->
  <link href="admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
  <!-- Dropzone css -->
  <link href="admin/assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">
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
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashtreme Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="assets/images/avatars/avatar-13.png" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">Mark Johnson</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="index.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce</a></li>
		  <li><a href="dashboard-human-resources.html"><i class="zmdi zmdi-dot-circle-alt"></i> Human Resources</a></li>
		  <li><a href="dashboard-digital-marketing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Digital Marketing</a></li>
          <li><a href="dashboard-property-listing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Property Listings</a></li>
		  <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-dot-circle-alt"></i> Services & Support</a></li>
		  <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-dot-circle-alt"></i> Logistics</a></li>
		</ul>
      </li>
      <li>
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
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Components</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="components-range-slider.html"><i class="zmdi zmdi-dot-circle-alt"></i> Range Sliders</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Image Carousels</a></li>
          <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Grid Layouts</a></li>
          <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Switcher Buttons</a></li>
          <li><a href="components-pricing-table.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pricing Tables</a></li>
          <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vertical Timeline</a></li>
          <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Horizontal Timeline</a></li>
          <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Fancy Lightbox</a></li>
          <li><a href="components-color-palette.html"><i class="zmdi zmdi-dot-circle-alt"></i> Color Palette</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Charts</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Chart JS</a></li>
          <li><a href="charts-apex.html"><i class="zmdi zmdi-dot-circle-alt"></i> Apex Charts</a></li>
          <li><a href="charts-sparkline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sparkline Charts</a></li>
          <li><a href="charts-peity.html"><i class="zmdi zmdi-dot-circle-alt"></i> Peity Charts</a></li>
          <li><a href="charts-other.html"><i class="zmdi zmdi-dot-circle-alt"></i> Other Charts</a></li>
        </ul>
       </li>
	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Widgets</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="widgets-static.html"><i class="zmdi zmdi-dot-circle-alt"></i> Static Widgets</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Widgets</a></li>
        </ul>
       </li>
    
      <li>
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
      </li>
      
      <li>
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
      </li>

      <li>
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
       </li>
       <li>
        <a href="calendar.html" class="waves-effect">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>
       <li>
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
      </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="table-simple-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Simple Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Tables</a></li>
        </ul>
       </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Maps</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="maps-google.html"><i class="zmdi zmdi-dot-circle-alt"></i> Google Maps</a></li>
          <li><a href="maps-vector.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vector Maps</a></li>
        </ul>
       </li>
     
      <li>
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
       </li>

      <li>
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
      </li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
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
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-light badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-light">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-5.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-6.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-7.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-8.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-13.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Form Advanced</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Advanced</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Date Picker</div>
             <div class="card-body">
               <form>
                 <label>Default Datepicker</label>
                 <input type="text" id="default-datepicker" class="form-control">
                 <hr>
                 <label>Autoclose Datepicker</label>
                 <input type="text" id="autoclose-datepicker" class="form-control">
                 <hr>
                 <label>Daterange Picker</label>
                <div id="dateragne-picker">
                 <div class="input-daterange input-group">
                  <input type="text" class="form-control" name="start"/>
                  <div class="input-group-prepend">
                   <span class="input-group-text">to</span>
                  </div>
                  <input type="text" class="form-control" name="end"/>
                 </div>
               </div>
               </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Select Inputs</div>
            <div class="card-body">
              <form>
                  <div class="form-group">
                      <label>Single select2</label>
                      <select class="form-control single-select">
                          <option>India</option>
                          <option>England</option>
                          <option>America</option>
                          <option>China</option>
                          <option>Australiya</option>
                          <option>Newzeland</option>
                          <option>Dubai</option>
                          <option>United Kingdom</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Multiple select boxes</label>
                      <select class="form-control multiple-select" multiple="multiple">
                          <option>India</option>
                          <option>England</option>
                          <option>America</option>
                          <option>China</option>
                          <option>Australiya</option>
                          <option>Newzeland</option>
                          <option>Dubai</option>
                          <option>United Kingdom</option>
                      </select>
                    </div>

              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Input Tags</div>
            <div class="card-body">
              <form>
                   <div class="form-group">
                       <input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo,India,America,London"/>
                   </div>
               </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
	  
	  <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Multiple Form Uploads</div>
            <div class="card-body">
              <form action="#" class="dropzone" id="dropzone">
                <div class="fallback">
                  <input name="file" type="file" multiple="multiple">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Form text editor</div>
            <div class="card-body">
             <div id="summernoteEditor">
                    <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                    <img src="assets/images/gallery/modal-img.jpg" class="ml-2 mb-2 w-25" alt="image" align="right">
                    <p class="text-justify">
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <p class="text-justify">
                      "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                      veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
                      magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
	  
	  
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Bootstrap Touchspin</div>
            <div class="card-body">
              <form>
                  <div class="row">
                      <div class="col-sm-6">
                          <label>Example with postfix</label>
                          <input id="demo1" type="text"  value="55" name="demo1">
                      </div>
                      <div class="col-sm-6">
                        <label>With prefix</label>
                         <input id="demo2" type="text" value="0" name="demo2">
                      </div>
                  </div>

                  <div class="row mt-3">
                      <div class="col-sm-12">
                          <label>Init with empty value</label>
                          <input id="demo3" type="text" value="" name="demo3">
                      </div>
                  </div>

                  <div class="row mt-3">
                      <div class="col-sm-6">
                          <label>Vertical button alignment:</label>
                          <input id="demo_vertical" type="text" value="" name="demo_vertical">
                      </div>
                      <div class="col-sm-6">
                         <label>Vertical buttons with custom icons:</label>
                          <input id="demo_vertical2" type="text" value="" name="demo_vertical2">
                      </div>
                  </div>

                  <div class="row mt-3">
                      <div class="col-sm-6">
                          <label>Value attribute is not set (applying settings.initval):</label>
                          <input id="demo3_21" type="text" value="" name="demo3_21">
                      </div>
                      <div class="col-sm-6">
                         <label>Value is set explicitly to 33 (skipping settings.initval):</label>
                          <input id="demo3_22" type="text" value="33" name="demo3_22">
                      </div>
                  </div>

                  <div class="row mt-3">
                      <div class="col-sm-6">
                          <label>Button postfix (small)</label>
                          <input id="demo4" type="text" value="" name="demo4" class="form-control-sm">
                      </div>
                      <div class="col-sm-6">
                         <label>Button postfix (large)</label>
                          <input id="demo4_2" type="text" value="" name="demo4_2" class="form-control-lg">
                      </div>
                  </div>

                   <div class="row mt-3">
                      <div class="col-sm-12">
                         <p>Button group:</p>
                        <div class="dropup">
                           <div class="input-group">
                            <input id="demo5" type="text" name="demo5" value="50">
                            <div class="btn-group">
                              <button type="button" class="btn btn-light border-radius">Dropdown</button>
                              <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                <span class="caret"></span>
                              </button>
                              <div class="dropdown-menu">
                                <a href="javaScript:void();" class="dropdown-item">Action</a>
                                <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                              </div>
                            </div>
                        </div>
                        </div>
                      </div>
                  </div>
                 </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->


      <div class="row">
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Multiple Select</div>
            <div class="card-body">
              <form>
                 <div class="form-group">
                      <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]">
                      <option>Dallas Cowboys</option>
                      <option>New York Giants</option>
                      <option selected="selected">Philadelphia Eagles</option>
                      <option selected="selected">Washington Redskins</option>
                      <option>Chicago Bears</option>
                      <option>Detroit Lions</option>
                      <option>Green Bay Packers</option>
                      <option>Minnesota Vikings</option>
                      <option selected="selected">Atlanta Falcons</option>
                      <option>Carolina Panthers</option>
                      <option>New Orleans Saints</option>
                      <option>Tampa Bay Buccaneers</option>
                      <option>Arizona Cardinals</option>
                      <option>St. Louis Rams</option>
                      <option>San Francisco 49ers</option>
                      <option>Seattle Seahawks</option>
                  </select>
                 </div>
             </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Multiple Select With Optgroup</div>
            <div class="card-body">
              <form>
                 <div class="form-group">
                      <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]">
                      <optgroup label="NFC EAST">
                          <option>Dallas Cowboys</option>
                          <option>New York Giants</option>
                          <option>Philadelphia Eagles</option>
                          <option>Washington Redskins</option>
                      </optgroup>
                      <optgroup label="NFC NORTH">
                          <option>Chicago Bears</option>
                          <option>Detroit Lions</option>
                          <option>Green Bay Packers</option>
                          <option>Minnesota Vikings</option>
                      </optgroup>
                      <optgroup label="NFC SOUTH">
                          <option>Atlanta Falcons</option>
                          <option>Carolina Panthers</option>
                          <option>New Orleans Saints</option>
                          <option>Tampa Bay Buccaneers</option>
                      </optgroup>
                      <optgroup label="NFC WEST">
                          <option>Arizona Cardinals</option>
                          <option>St. Louis Rams</option>
                          <option>San Francisco 49ers</option>
                          <option>Seattle Seahawks</option>
                      </optgroup>
                  </select>
                 </div>
             </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

      <div class="row">
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Searchable Multiple Select</div>
            <div class="card-body">
              <form>
               <div class="form-group">
                    <select name="country" class="multi-select" multiple="multiple" id="my_multi_select3">
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegowina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote d'Ivoire</option>
                    <option value="HR">Croatia (Hrvatska)</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard and Mc Donald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint LUCIA</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia (Slovak Republic)</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SH">St. Helena</option>
                    <option value="PM">St. Pierre and Miquelon</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="WF">Wallis and Futuna Islands</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
               </div>
           </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-6">
          <div class="card">
            <div class="card-header text-uppercase">Multiple Select With Custom Headers</div>
            <div class="card-body">
              <form>
                 <div class="form-group">
                     <select class="custom-header" multiple='multiple'>
                    <option value='elem_1'>elem 1</option>
                    <option value='elem_2'>elem 2</option>
                    <option value='elem_3'>elem 3</option>
                    <option value='elem_4'>elem 4</option>
                    <option value='elem_100'>elem 100</option>
                  </select>
                 </div>
             </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->
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
  <script src="admin/assets/js/jquery.min.js"></script>
  <script src="admin/assets/js/popper.min.js"></script>
  <script src="admin/assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="admin/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="admin/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="admin/assets/js/app-script.js"></script>

  <!--Bootstrap Touchspin Js-->
    <script src="admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="admin/assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>
    <!-- Dropzone JS  -->
    <script src="admin/assets/plugins/dropzone/js/dropzone.js"></script>
  <script src="admin/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
  <script>
     $('#summernoteEditor').summernote({
        height: 400,
        tabsize: 2
      });
   </script>
    <!--Select Plugins Js-->
    <script src="admin/assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="admin/assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

    <!--Bootstrap Datepicker Js-->
    <script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });

      $('#dateragne-picker .input-daterange').datepicker({
       });

    </script>

    <!--Multi Select Js-->
    <script src="admin/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="admin/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
      
            $('.multiple-select').select2();

        //multiselect start

            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });

            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });


          });

    </script>{/literal}
	
</body>

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:37:52 GMT -->
</html>
