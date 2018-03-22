<?php
if(isset($_SESSION['admin_user_id']) || isset($_SESSION['manu_user_id']) || isset($_SESSION['emp_user_id']))
{
    require_once('includes/topbar.php');
    require_once('includes/sidebar.php');
?>
<body class="skin-black sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
                  <section class="content-header">
                      <h1>Apointments List</h1>
                      <ol class="breadcrumb">
                        <li>
                          <a href="<?php echo $adminurl;?>dashboard/"><i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li class="active">Appointments List</li>
                      </ol>
                </section><br />
               <br />
                <div class="box box-primary">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th width="300">Email </th>
                        <th width="300">Type</th>
                        <th>Phone</th>
                        <th>Timings</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;
                    $sql=mysqli_query($con,"select a.*,b.sr_title from appointment_master a,showroom_master b where a.srid=b.sr_id order by a.a_date desc");
                    if(mysqli_num_rows($sql))
                    {
                    while($r=mysqli_fetch_array($sql))
                    {
                    ?>
                      <tr>
                       <td><?php echo $r['a_name'];?></span></td>
                      <td><?php echo $r['a_email'];?></td>
                      <td><?php echo $r['a_type'];?></td>
                      <td><?php echo $r['a_phone'];?></td>
                      <td><?php echo date("m/d/Y h:i a",strtotime($r['a_date']." ".$r['a_time']));?></td>
                      <td><?php echo $r['a_address'];?></td>
                      <td>
                        <a href="#" class="btn btn-danger popup" data-href="appointment<?=$r['a_id'];?>" data-table="appointment_master" data-id="<?=$r['a_id'];?>"><i class="fa fa-trash"></i></a>
                      </td>
                      <div class="example-modal" id="appointment<?=$r['a_id'];?>">
                        <div class="modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close close-btn" onclick='window.location.href="";' aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Delete</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are You sure want to delete this appointment?</p>
                              </div>
                              <div class="modal-footer">
                              <button type="button" data-table="appointment_master" data-field="a_id" data-id="<?=$r['a_id'];?>"  style="margin-left:10px;" class="btn btn-danger pull-right delete-data">Delete</button>  
                                <button type="button" class="btn btn-default pull-right" onclick='window.location.href=""';>Close</button>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                      </div>  
                      </tr>
                    <?php }
                   }
                  else
                   {
                    ?>
                      <tr><td>No Records Founds</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    <?php
                   }
                     ?>
                    </tbody>
                 </table>
                </div><!-- /.box-body -->
              </div>
        </div>
        <?php require('includes/footer.php');?>
    </div>
</body>
<?php 
}
else
{
    header("Location:{$adminurl}");
}
?>