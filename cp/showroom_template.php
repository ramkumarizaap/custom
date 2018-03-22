<?php
if(isset($_SESSION['admin_user_id']))
{
    require_once('includes/topbar.php');
    require_once('includes/sidebar.php');
?>

<body class="skin-black sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <h1>Showroom Email Template</h1>
        <ol class="breadcrumb">
          <li>
            <a href="<?php echo $adminurl;?>dashboard/"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Showroom Email Template</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
            	<div class="box-body no-pading">
              	<form action="" id="showroom-template-add" method="post">
                	<input type="hidden" name="type" value="showroom_template">
                  <input type="hidden" value="update" name="action">
		              <div class="col-md-12">
		               	<label class="control-label"> Showroom Name </label>
		                <select class="form-control get_showroom_template" name="showroom_id">
		                	<option value="">--Select--</option>
		                  <?php 
		                    $rooms=$site->get_showrooms();
		                    foreach ($rooms as $key => $value) {
		                    ?>
		                      <option value="<?php echo $rooms[$key]['id'];?>"><?php echo $rooms[$key]['name'];?></option>
		                  <?php }?>
		                </select>
		              </div>
		              <div class="clearfix"></div>
                  <div class="col-md-12">
                    <label class="control-label"> Email</label>
                    <input type="text" name="email" class="form-control"/>  
                  </div>
                  <div class="clearfix"></div>
		              <div class="col-md-12">
		               	<label class="control-label"> Appointment Confirmation Message </label><br>
		               	<div class="col-md-12">
		               		<p>Please use the following format for email template</p>
		               		<ol>
		               			<li>Person Name - <b>{name}</b></li>
		               			<li>Person Email - <b>{email}</b></li>
		               			<li>Showroom Name - <b>{showroom}</b></li>
		               			<li>Showroom Location - <b>{location}</b></li>
		               			<li>Address - <b>{address}</b></li>
		               			<li>Comments - <b>{comments}</b></li>
		               			<li>Phone - <b>{phone}</b></li>
		               			<li>Appointment Type - <b>{apptype}</b></li>
		               			<li>Timings - <b>{timings}</b></li>
		               		</ol>
		               	</div><br><br><br><br><br><br><br><br><br><br><br><br>
		              	<textarea name="body_message" class="form-control description" rows="10"></textarea>  
		              </div>
                  
		              <div class="col-md-12">
		               	<label class="control-label"> Bottom Portion</label>
		              	<textarea name="bottom_message" class="form-control description" rows="8"></textarea>  
		              </div>
		              <div class="clearfix"></div><br>
		              <div class="box-footer">
                    <a href="javascript:void(0);" data-href="modal1" class="popup save" style="display:none;">asd</a>
                      <input type="submit" name="showroom_template_add" class="btn btn-primary" value="Save">
                    </div>
		            </form>
		            <div class="example-modal" id="modal1">
                  <div class="modal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close close-btn" onclick='window.location.href="<?php echo $adminurl;?>showroom_template/";' aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title">Email Template</h4>
                        </div>
                        <div class="modal-body popup-body">
                          <p>Email Template has been save successfully!!!</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" onclick='window.location.href="<?php echo $adminurl;?>showroom_template/";'>Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </section>
      <br />
     	<br />
    </div>
  </div>
</body>
<?php 
}
else
{
    header("Location:{$adminurl}");
}
?>