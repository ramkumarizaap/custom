<?php
require("../../includes/action/config.php");

$id=$_POST['id'];
$output=array();
$sql=mysqli_query($con,"select * from showroom_email_template where sr_id='".$id."'");
if(mysqli_num_rows($sql) > 0)
{
	$output['status'] = "success";
	$output['message'] = mysqli_fetch_array($sql);
}
else
{
	$output['status'] = "error";
	$output['message'] = "No record found.";
}

echo json_encode($output);

?>