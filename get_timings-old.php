<?php 
require_once 'includes/action/config.php';
global $con;
$srid=$_POST['srid'];
$srdate=strtolower(date("l",strtotime($_POST['srdate'])));
$date=date("Y-m-d",strtotime($_POST['srdate']));
//echo date("l");
//$srid="1";
//$srdate="monday";
$sql=mysqli_query($con,"select sr_$srdate as timings from showroom_master where sr_id=$srid");
$app_date = array();
$sql1=mysqli_query($con,"select * from appointment_master where srid=$srid and a_date='".$date."'");
while ($r1 = mysqli_fetch_array($sql1))
{
	$app_date[] = date("h:i",strtotime($r1['a_time']));
}

$r=mysqli_fetch_array($sql);
$a=$r['timings'];
if($a!="Closed")
{
	$a=str_replace(" ","",$a);
	$a=explode("-",$a);
	$s=date("H:i",strtotime($a[0]));
	$e=date("H:i",strtotime($a[1]));
	$start=strtotime("$s");
	$end=strtotime("$e");
	$extra=0;
	for ($halfhour=$start;$halfhour<=$end;$halfhour=$halfhour+15*60)
	{
		if(!in_array(date('h:i',$halfhour), $app_date))
		{
			if($extra!=$halfhour)
			{
				echo "<option value='".date('h:i a',$halfhour)."'>".date('h:i a',$halfhour)."</option>";
				$extra = 0;
			}
		}
		else
			$extra = $halfhour+3600;
			// echo json_encode(date('h:i',$halfhour));
	}
}
else
{
	echo "Fail";
}

?>