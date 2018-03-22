<?php
require('../../includes/action/config.php');
$id = $_POST['measure_id'];
$abodmen = $_POST['adbodmen'];
$buttocks = $_POST['buttocks'];
$chest = $_POST['chest'];
$hips = $_POST['hips'];
$weight = $_POST['weight'];
$height = $_POST['feet']." feet ".$_POST['inches']." inches";
$measure = $_POST['measure'];
$sql = mysqli_query($con,"update measurement_profile_master set mp_height='".$height."',mp_chest='".$chest."',mp_abdomen='".$abodmen."',mp_buttocks='".$buttocks."',mp_hips='".$hips."',mp_weight='".$weight."' where mp_id='".$id."'");
foreach ($measure as $key => $value)
{
	if(($key!=0 || $key!='0') && $value!='')
	{
		$sql1 = mysqli_query($con,"update measurement_profile_value set mpf_value='".$value."' where mpv_id='".$key."' and mpid='".$id."'");
	}
}
$output['status'] = "success";
$output['msg'] = "Measurement profile updated successfully";
echo json_encode($output);
?>