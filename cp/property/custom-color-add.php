<?php

if(!isset($_SESSION['admin_user_id'])){
   header("Location:{$adminurl}");
}
else
{
    require_once('includes/topbar.php');
    require_once('includes/sidebar.php');

    $site   = new Site();
    $subcat=$site->get_all_sub_category();
    
    if(isset($_GET['type'])){

      $id      = $_GET['type'];
      $custom_color= $site->get_custom_color_lining($id);

      $subcatid= $custom_color[0]['sub_cat_id'];
      $name    = explode(",",$custom_color[0]['name']);
      $description = explode(",",$custom_color[0]['description']);
      $price   = explode(",",$custom_color[0]['price']);
      $largeimg= explode(",",trim($custom_color[0]['large_image_name'],","));
      $smallimg= explode(",",trim($custom_color[0]['small_image_name'],","));
      $button  = "Update";
      $action  = "update";
   }
   else
    {
      $style="";$button="Save";$action="save";$id="1";$img="";$style_name="";
      $cvalue="";$name="";$old_large_image="1"; $old_small_image='1';$subcatid='';$price='';
    }
?>

<body class="skin-black sidebar-mini">

    <div class="wrapper">

        <div class="content-wrapper">

                  <section class="content-header">

                      <h1>

                      Add Lining</h1>

                      <ol class="breadcrumb">

                        <li><a href="<?php echo $adminurl;?>dashboard/"><i class="fa fa-dashboard"></i> Home</a></li>

                        <li class="active">Add Lining</li>

                      </ol>

                </section>

                <section class="content">

                  <div class="row">

                    <!-- left column -->

                    <div class="col-md-12">

                      <!-- general form elements -->

                      <div class="box box-primary">

                        <div class="box-header with-border">

                        </div><!-- /.box-header -->

                        <!-- form start -->

          <form class="jacketcolor" method="post" action="<?php echo $adminurl;?>ajax/form-post.php" autocomplete="off" enctype="multipart/form-data" id="custom-color-form">
                    <input type="hidden" name="type" value="custom_color_add">     
                    <input type="hidden" value="<?php echo $action;?>" name="action">
                    <input type="hidden" value="<?php echo $id;?>" name="id">

                          <div class="box-body">

                           

                            <div class="form-group">

                              <label for="exampleInputEmail1">Sub Category Name </label>

    <select class="form-control"  style="width: 100%;"

                              data-placeholder="Choose Sub Category" name="subcat_name">
                          <?php foreach($subcat as $key => $val){if($val['id']=="1" || $val['id']=="3" || $val['id']=="5"){?>
                        <option value="<?php echo $val['id'];?>" 
                          <?php if($subcatid == $val['id']) { ?> selected="selected" <?php } ?>>
                          <?php echo $val['subcat_name'];?>
                        </option>
                        <?php }}?>
                              </select>
                            </div>
                            <?php 
                                if(!isset($_GET['type']))
                                {
                                  ?>

                            <div class="col-md-1 pull-right">

                            <a href="javascript:void(0);" class="add_custom_color btn btn-info btn-xs">

                              <i class="fa fa-plus"></i> Add More</a>

                            </div>
                            <?php }?>
                            <div class="col-md-12">

                            <table class="responsive table table-border color_table">
                              <thead>
                                <th width="200">Lining Name</th>
                                <th width="300">Description</th>
                                <th width="100">Price</th>
                                <th width="200">Large Image</th>
                                <th width="200">Small Image</th>
                                <?php 
                                if(!isset($_GET['type']))
                                {
                                  ?>
                                  <th>Actions</th>
                                  <?php
                                }
                                ?>
                              </thead>
                              <tbody>
                                <?php 
                                if(!isset($_GET['type']))
                                {
                                  ?>
                                  <tr>
                                    <td><input type="text" class="form-control" name="image_name[]" placeholder="Lining Name"></td>
                                    <td><textarea class="form-control" name="description[]" placeholder="Image Desc"></textarea></td>
                                    <td><input type="text" class="form-control" name="price[]" placeholder="Price"></td>
                                    <td>
                                      <input type="file" name="col_large_img[]" class="form-control" placeholder="Large Image">
                                      <input type="hidden" name="old_large_image[]" value="<?php echo $old_large_image;?>">
                                    </td>
                                    <td>
                                      <input type="file" name="col_small_img[]" class="form-control" placeholder="Small Image">
                                      <input type="hidden" name="old_small_image[]" value="<?php echo $old_small_image;?>">
                                    </td>
                                    <td>
                                      <a href="javascript:void(0);" class="rem_col btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove
                                      </a>
                                    </td>
                                  </tr>
                                  <?php 
                                }
                                else
                                {
                                  for ($j=0; $j <count($name) ; $j++)
                                  { 
                                    ?>
                                    <tr>
                                      <td><input type="text" class="form-control" name="image_name[]" placeholder="Color Name" value="<?php echo $name[$j];?>"></td>
                                      <td><textarea class="form-control" name="description[]" placeholder="Image Desc"><?php echo $description[$j];?></textarea></td>
                                      <td><input type="text" class="form-control" name="price[]" placeholder="Price" value="<?php echo $price[$j];?>"></td>
                                      <td>
                                        <div class="col-md-12">
                                          <img src="<?php echo $homeurl.$largeimg[$j];?>" style="height:30px !important;width: 100px !important;">
                                        </div><br><br>
                                        <div class="col-md-10">
                                          <input type="file" class="form-control" name="col_large_img[]">
                                          <input type="hidden" name="old_large_image[]" value="<?php echo $largeimg[$j];?>">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="col-md-12">
                                          <img src="<?php echo $homeurl.$smallimg[$j];?>" style="height:30px !important; width: 100px !important;">
                                        </div><br><br>
                                        <div class="col-md-10">
                                          <input type="file" class="form-control" name="col_small_img[]">
                                          <input type="hidden" name="old_small_image[]" value="<?php echo $smallimg[$j];?>">
                                        </div>
                                      </td>
                                      <?php 
                                        if(!isset($_GET['type']))
                                        {
                                          ?>
                                      <td>
                                        <a href="javascript:void(0);" class="rem_col btn btn-danger btn-xs"><i class="fa fa-trash"></i> Remove
                                        </a>
                                      </td>
                                      <?php }?>
                                    </tr>
                                    <?php  
                                  }
                                }
                                ?>
                              </tbody>
                            </table>
                          </div>

                          </div><!-- /.box-body -->

                          <div class="box-footer">

                          <a href="javascript:void(0);" data-href="modal1" class="popup save" style="display:none;">asd</a>

                            <input type="submit" name="banner_add" class="btn btn-primary" value="<?php echo $button;?>">

                          </div>

                        </form>

                      </div><!-- /.box -->

                    </div><!--/.col (left) -->

                    <div class="example-modal" id="modal1">
                      <div class="modal">
                        <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">

                              <button type="button" class="close close-btn" onclick='window.location.href="<?php echo $adminurl;?>jacket_lining/";' aria-label="Close"><span aria-hidden="true">×</span></button>

                              <h4 class="modal-title">Color</h4>

                            </div>

                            <div class="modal-body popup-body">

                              <p>Custom Colors has been save successfully!!!</p>

                            </div>

                            <div class="modal-footer">

                              <button type="button" class="btn btn-default pull-right" onclick='window.location.href="<?php echo $adminurl;?>jacket_lining/";'>Close</button>

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

<?php }

?>