<?php
require_once("../../includes/action/config.php");
$output = array();
$id = $_POST['id'];
$sql = mysqli_query($con,"select * from appointment_master where a_id='".$id."'");
if(mysqli_num_rows($sql) <= 0)
{
	$output['status'] = "danger";
	$output['msg'] = "Something went wrong";
}
else
{
	$r = mysqli_fetch_array($sql);
	$sql2=mysqli_query($con,"select * from showroom_email_template where sr_id='".$r['srid']."'");
	$r2 = mysqli_fetch_array($sql2);
	$search = array("{name}","{email}","{location}","{showroom}","{address}","{comments}","{phone}","{apptype}","{timings}");
	$s_time = date("m/d/Y H:i",strtotime($r['a_date']." ".$r['a_time']));
	$replace = array($r['a_name'],$r['a_email'],$r2['sr_address'],$r2['sr_title'],$r['a_address'],$r['a_comments'],$r['a_phone'],$r['a_type'],$s_time);
	$message = str_replace($search, $replace,$r2['body_message']);

	$message .= "<br><br>".$r2['bottom_message'];
  $subject	=	"New Appointment";
  $headers = "From: $stitle <".$r2['email']."> \r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $message1 = "New appointment has been booked by ".$r['a_name']." (".$r['a_email'].") - <b>".$r['a_phone']."</b> for ".$r['a_type']." at $s_time.<br><br><b>Customer Address :</b> <br>".$r['a_address']."<br><br><br>Comments :<br>".$r['a_comments']."";
  if(mail($r['a_email'],$subject,$message,$headers))
  {
  	$output['status'] = "success";
		$output['msg'] = "Confirmation Email sent successfully";
  }
	else
	{

		$output['status'] = "danger";
		$output['msg'] = "Email not sent.";
	}
}
echo json_encode($output);

exit;
?>