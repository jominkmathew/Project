<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Notification</h4>
		    
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

          <form method="post" action="" enctype="multipart/form-data">
        {foreach from=$update item="s"}
    <input type="hidden" name="hide" value="h">
<h4 class="form-header">
                <i class="fa fa-file-text-o"></i>
                  ADVERTISEMENT UPDATE
                </h4>
                <div class="form-group row">
                  <label for="input-5" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="default-input" name="companyname" value="{$s.companyname}">
                  </div>
                </div>

                 
        <div class="form-group row">
                  <label for="input-8" class="col-sm-2 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="input-8" name="ucl" required>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="input-7" class="col-sm-2 col-form-label">Validity</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="input-7" name="validity" required>
                        <option value="{$s.validity}">{$s.validity}</option>
                      <option>3 months</option>
                      <option>6 months</option>
                      <option>1 year</option>
                      <option>2 year</option>
                    </select><br>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
                  </div>
                </div>
               
               
                    
                    
                </div>
                {/foreach}
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->


             <!--End Row-->
<!--start overlay-->
              <div class="overlay toggle-menu"></div>
            <!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
