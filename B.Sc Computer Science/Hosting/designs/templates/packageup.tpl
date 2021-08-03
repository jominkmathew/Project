<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">Package Update</h4>
        
     </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        
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

   
   <form method="post" action="">
       {foreach from=$view item='s'}
         <input type="hidden" name="hide" value="h">
  
                 <div class="form-group row">
                  <label for="basic-select" class="col-sm-3 col-form-label">Server Type</label>
                  <div class="col-sm-9">
                  <select class="form-control" id="default-select" name="servertype" value={$s.servertype}>
        
                      <option>{$s.servertype}</option>
                        
{foreach from=$view1 item='v'}
<option>{$v.servertype}</option>
                         {/foreach}


                    </select>
                  </div>
                </div>
                
      
  <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Plan Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="planname" value="{$s.planname}">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Amount</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="amount" value="{$s.amount}">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">No.of Databases</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="databases" value="{$s.no_databases}">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">No.of Websites</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="websites" value="{$s.websites}">
        </div>
        </div>
    
    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Space(GB)</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="space" value="{$s.space}">
        </div>
        </div>

    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">CPU</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="cpu" value="{$s.cpu}">
        </div>
        </div>

        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Bandwidth</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="bandwidth" value="{$s.bandwidth}">
        </div>
        </div>

    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">RAM</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="ram" value="{$s.ram}">
        </div>
        </div>
       
      <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Validity</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="validity" value="{$s.validity}">
        </div>
        </div>
       
       
        
        
       <div class="form-group row">
          <label for="basic-textarea" class="col-sm-3 col-form-label">Other Details</label>
          <div class="col-sm-9">
          <textarea rows="4" class="form-control" id="basic-textarea" name="other">{$s.other}</textarea>
          <br>
        <button type="submit" class="btn btn-info btn-round waves-effect waves-light m-1">Update</button>
 

          </div>
        </div>

{/foreach}
      
</form>
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
