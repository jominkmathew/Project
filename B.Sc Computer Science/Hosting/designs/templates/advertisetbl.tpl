<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title"></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();"></a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();"></a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
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

        <div class="row">
        <div class="col-lg-12">
          <form method="post" action="" enctype="multipart/form-data">
          <div class="card"> 
            <div class="card-header"><i class="fa fa-table"></i>Advertisement</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Image</th>
                        <th>Validity</th>
                        <th>Cuttentdate</th>
                        <th>Edit</th>
                         <th>Delete</th>
               
                    </tr>
                </thead>
                <tbody>
                  {foreach from=$view item="s"}
                    <tr>
                        <td>{$s.companyname}</td>
                        <td><img src="{$s.path}" width="200px" height="150px"></td>
                        <td>{$s.validity}</td>
                        <td>{$s.currentdate}</td>

                        <td><a href="advertiseup.php?b={$s.advkey}" class="btn btn-primary btn-round waves-effect waves-light m-1">Edit</a></td>
                        <td><a href="advertisedel.php?b={$s.advkey}" class="btn btn-danger btn-round waves-effect waves-light m-1">Delete</a></td>
                      
                    </tr>
                   {/foreach}
                </tbody>
                <tfoot>
                    <tr>
                       <th>Company Name</th>
                        <th>Image</th>
                        <th>Validity</th>
                        <th>Cuttentdate</th>
                        <th>Edit</th>
                         <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
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

  <!--Data Tables js-->
  <script src="admin/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
{literal}
    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
  {/literal}
</body>

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:38:30 GMT -->
</html>
