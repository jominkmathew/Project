
  
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
  {literal}
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
    <!-- Dropzone JS  -->
    <script src="admin/assets/plugins/dropzone/js/dropzone.js"></script>
    
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="admin/assets/js/index.js"></script>

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


    </script>
  
  <!--Start footer-->
  <br>
  <!-- <footer class="footer">
      <div class="container">
        <div class="text-center"><br><br><br><br><br><br><br>
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer> -->
  <!--End footer-->








  {/literal}

  
</body>

<!-- Mirrored from codervent.com/dashtreme/demo/transparent-admin/vertical-layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:20:15 GMT -->
</html>

  