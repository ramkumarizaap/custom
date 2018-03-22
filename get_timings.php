<?php 
require_once 'includes/action/config.php';
global $con;
$srid=$_POST['srid'];

$srdate=strtolower(date("l",strtotime($_POST['srdate'])));
$date=date("Y-m-d",strtotime($_POST['srdate']));

$sql=mysqli_query($con,"select sr_$srdate as timings from showroom_master where sr_id=$srid");

$app_date = array();

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

	$str = "";

	for($halfhour=$start;$halfhour<=$end;$halfhour=$halfhour+(15*60))
	{

		$chk = mysqli_query($con,"select * from appointment_master where srid=$srid and a_date='".$date."' and a_time='".date('H:i:s',$halfhour)."'");
			if(!mysqli_num_rows($chk))
			{
				$str .= "<option value='".date('h:i a',$halfhour)."'>".date('h:i a',$halfhour)."</option>";
			}
			else
			{
				$r = mysqli_fetch_array($chk);
				if($r['a_type']=="New Fitting - 1 hour")
					$halfhour += 2700;
				else
					$halfhour += 900;
			}

	}

	echo $str;
}
else
{
	echo "Fail";
}

?>