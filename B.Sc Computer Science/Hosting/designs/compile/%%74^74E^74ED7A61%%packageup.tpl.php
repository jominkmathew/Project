<?php /* Smarty version 2.6.26, created on 2020-01-26 07:58:04
         compiled from packageup.tpl */ ?>
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
       <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
         <input type="hidden" name="hide" value="h">
  
                 <div class="form-group row">
                  <label for="basic-select" class="col-sm-3 col-form-label">Server Type</label>
                  <div class="col-sm-9">
                  <select class="form-control" id="default-select" name="servertype" value=<?php echo $this->_tpl_vars['s']['servertype']; ?>
>
        
                      <option><?php echo $this->_tpl_vars['s']['servertype']; ?>
</option>
                        
<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<option><?php echo $this->_tpl_vars['v']['servertype']; ?>
</option>
                         <?php endforeach; endif; unset($_from); ?>


                    </select>
                  </div>
                </div>
                
      
  <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Plan Name</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="planname" value="<?php echo $this->_tpl_vars['s']['planname']; ?>
">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Amount</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="amount" value="<?php echo $this->_tpl_vars['s']['amount']; ?>
">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">No.of Databases</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="databases" value="<?php echo $this->_tpl_vars['s']['no_databases']; ?>
">
        </div>
        </div>


        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">No.of Websites</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="websites" value="<?php echo $this->_tpl_vars['s']['websites']; ?>
">
        </div>
        </div>
    
    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Space(GB)</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="space" value="<?php echo $this->_tpl_vars['s']['space']; ?>
">
        </div>
        </div>

    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">CPU</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="cpu" value="<?php echo $this->_tpl_vars['s']['cpu']; ?>
">
        </div>
        </div>

        <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Bandwidth</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="bandwidth" value="<?php echo $this->_tpl_vars['s']['bandwidth']; ?>
">
        </div>
        </div>

    <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">RAM</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="ram" value="<?php echo $this->_tpl_vars['s']['ram']; ?>
">
        </div>
        </div>
       
      <div class="form-group row">
          <label for="default-input" class="col-sm-3 col-form-label">Validity</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="default-input" name="validity" value="<?php echo $this->_tpl_vars['s']['validity']; ?>
">
        </div>
        </div>
       
       
        
        
       <div class="form-group row">
          <label for="basic-textarea" class="col-sm-3 col-form-label">Other Details</label>
          <div class="col-sm-9">
          <textarea rows="4" class="form-control" id="basic-textarea" name="other"><?php echo $this->_tpl_vars['s']['other']; ?>
</textarea>
          <br>
        <button type="submit" class="btn btn-info btn-round waves-effect waves-light m-1">Update</button>
 

          </div>
        </div>

<?php endforeach; endif; unset($_from); ?>
      
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