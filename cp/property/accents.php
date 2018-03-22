<?php
if(!isset($_SESSION['admin_user_id']))
{
  header("Location:{$adminurl}");
}
else
{
  require_once('includes/topbar.php');
  require_once('includes/sidebar.php');
  $site=new Site();
  $subcat=$site->get_all_sub_category();
  if(isset($_GET['type']))
  {
    $id=$_GET['type'];
    $var=$site->get_properties($id);
    $name=$var[0]['label'];
    $subcatid=explode(",",$var[0]['subcatid']);
    $subid=explode(",",$var[0]['subid']);
    $button="Update";
    $action="update";
  }
  else
  {
    $name="";$button="Save";$action="save";$id="";$subcatid=array();$subid=array();
  }
?>
<body class="skin-black sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content-header">
        <h1>Accents Form</h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo $adminurl;?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Accents Form</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border"></div><!-- /.box-header -->
              <!-- form start -->
              <form class="accents" method="post" action="" autocomplete="off">
                <input type="hidden" name="type" value="property_accents">
                <input type="hidden" value="<?php echo $action;?>" name="action">
                <input type="hidden" value="<?php echo $id;?>" name="id">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Category</label>
                    <select name="product_category" class="product_accents form-control" style="width: 100%;">
                      <option value="">--Select Product Category--</option>
                        <?php
                         foreach($subcat as $key =>$val)
                          {
                            if($val['id']!="6" && $val['id']!="4")
                            {
                              ?>
                                <option value="<?=$val['id'];?>"><?=$val['subcat_name'];?></option>
                              <?php 
                            }
                          }
                        ?>
                      </select>
                    </div>
                     
                    <div class="product-accents-list">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:void(0);" data-href="modal1" class="popup save" style="display:none;">asd</a>
                    <input type="submit" name="accents_add" class="btn btn-primary" value="<?php echo $button;?>">
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <div class="example-modal" id="modal1">
              <div class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close close-btn" onclick='window.location.href="<?php echo $adminurl;?>accents/";' aria-label="Close"><span aria-hidden="true">×</span></button>
                      <h4 class="modal-title">Accents</h4>
                    </div>
                    <div class="modal-body popup-body">
                      <p>Accents has been save successfully!!!</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-right" onclick='window.location.href="<?php echo $adminurl;?>accents/";'>Close</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
            <!-- right column -->
          </div>   <!-- /.row -->
      </section>
    </div>
  </div>
</body>
<?php 
}
?>