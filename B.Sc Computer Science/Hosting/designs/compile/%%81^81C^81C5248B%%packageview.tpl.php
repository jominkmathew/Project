<?php /* Smarty version 2.6.26, created on 2020-01-26 09:45:08
         compiled from packageview.tpl */ ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Data Tables</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Server Type</th>
                        <th>Plan Name</th>
                        <th>Amount</th>
                        <th>No.of Databases</th>
                          <th>No.of Websites</th>
                          <th>Space(GB)</th>
                          <th>CPU</th>
                          <th>Bandwidth</th>
                          <th>RAM</th>
                          <th>Validity</th>
                          <th>Other Details</th>

                        <th>Edit</th>
                         <th>Delete</th>
               
                    </tr>
                </thead>
                <tbody>
                  <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                    <tr>
                        <td><?php echo $this->_tpl_vars['s']['servertype']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['planname']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['amount']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['no_databases']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['websites']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['space']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['cpu']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['bandwidth']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['ram']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['validity']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['s']['other']; ?>
</td>
                        <td><a href="packageup.php?b=<?php echo $this->_tpl_vars['s']['packey']; ?>
">Edit</a></td>
                        <td><a href="packagedel.php?b=<?php echo $this->_tpl_vars['s']['packey']; ?>
">Delete</a></td>
                      
                    </tr>
                   <?php endforeach; endif; unset($_from); ?>
                </tbody>
                <tfoot>
                    <tr>
                       <th>Server Type</th>
                        <th>Plan Name</th>
                        <th>Amount</th>
                        <th>No.of Databases</th>
                          <th>No.of Websites</th>
                          <th>Space(GB)</th>
                          <th>CPU</th>
                          <th>Bandwidth</th>
                          <th>RAM</th>
                          <th>Validity</th>
                          <th>Other Details</th>

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
<?php echo '
    <script>
     $(document).ready(function() {
      //Default data table
       $(\'#default-datatable\').DataTable();


       var table = $(\'#example\').DataTable( {
        lengthChange: false,
        buttons: [ \'copy\', \'excel\', \'pdf\', \'print\', \'colvis\' ]
      } );
 
     table.buttons().container()
        .appendTo( \'#example_wrapper .col-md-6:eq(0)\' );
      
      } );

    </script>
  '; ?>

</body>

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:38:30 GMT -->
</html>