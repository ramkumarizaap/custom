<?php
require('../includes/action/config.php');

$id = mysqli_real_escape_string($con,trim($_GET['type']));
$sql=mysqli_query($con,"select subcatid,p_default_style from product_master where p_id='".$id."'");
$r = mysqli_fetch_array($sql);
$subcatid = $r['subcatid'];
$d_style = json_decode($r['p_default_style']);
$sql1 = mysqli_query($con,"select ps_id,ps_label from property_style_master where subcatid like '%".$subcatid."%' and ps_label not like '%Vest%'");
/*SUITS*/
if($subcatid == "1")
{
	while($r1=mysqli_fetch_array($sql1))
	{
		$p_label=str_replace(' ','_',strtolower($r1['ps_label']));
			?>
				<div class="form-group <?php echo $p_label;?>">
					<input type="hidden" value="<?php echo $p_label;?>" name="ps_id[]">
					<label style="width:150px;" for="exampleInputEmail1"><?php echo $r1['ps_label'];?></label>
				  <?php 
				  $sql2=mysqli_query($con,"select psd_value,psid from property_style_details where psid=".$r1['ps_id']." and subcatid like '%1%'");
					while($r2=mysqli_fetch_array($sql2))
					{	
						$checked = "";
						$psd_name=$r2['psd_value'];
						$label = $p_label;
						$class_value = $p_label."-".str_replace(array(" ","_"),"-",$psd_name);
						if($d_style->$label == $psd_name)
						{
							$checked = "checked";
						}
						?>
						<label class="property-value <?php echo $class_value;?>" style="margin-left:10px;">
						  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
							  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label;?>][]" value="<?php echo $psd_name;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
							  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
							  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
							  </ins>
						  </div><?php echo $r2['psd_value'];?>
					  </label>
					  <?php 
					}
					?>
				</div>
			<?php
	}
	/*echo "<h4><strong>Vest</strong></h4><br>";
	$vest=mysqli_query($con,"select ps_id,ps_label from property_style_master where subcatid like '%1%' and ps_label like '%Vest%'");
	while($r_vest=mysqli_fetch_array($vest))
	{
		$vest_label=str_replace(' ','_',strtolower($r_vest['ps_label']));
		?>
			<div class="form-group <?php echo $vest_label;?>">
				<input type="hidden" value="<?php echo $vest_label;?>" name="ps_id[]">
		  	<label style="width:150px;" for="exampleInputEmail1"><?php echo $r_vest['ps_label'];?></label>
		  	<?php 
				  $vest2 = mysqli_query($con,"select psd_value from property_style_details where psid=".$r_vest['ps_id']." and subcatid like '%1%'");
					while($r_vest2=mysqli_fetch_array($vest2))
					{	
						$checked = "";
						$psd_name_vest=$r_vest2['psd_value'];
						$vest_class = $vest_label."-".str_replace(array(" ","_"),"-",$psd_name_vest);
						if($d_style->$vest_label == $psd_name_vest)
						{
							$checked = "checked";
						}
						?>
							<label class="property-value <?php echo $vest_class;?>" style="margin-left:10px;">
							  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
								  <input type="radio" <?=$checked;?> name="style[<?php echo $vest_label;?>][]" value="<?php echo $psd_name_vest;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
								  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
								  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
								  </ins>
							  </div><?php echo $r_vest2['psd_value'];?>
						  </label>
						  <?php 
					}
					?>
		  </div>
		<?php
	}*/
	echo "<h4><strong>Pant</strong></h4><br>";
	$sql11=mysqli_query($con,"select ps_id,ps_label from property_style_master where subcatid like '%4%'");
	while($r11=mysqli_fetch_array($sql11))
	{
		
		if($r11['ps_label']=="Fit")
		$p_label1="pants_fit";
		else
		$p_label1=str_replace(' ','_',strtolower($r11['ps_label']));
	
		?>
		<div class="form-group <?php echo $p_label1;?>">
			<input type="hidden" value="<?php echo $p_label1;?>" name="ps_id[]">
		  <label style="width:150px;" for="exampleInputEmail1"><?php echo $r11['ps_label'];?></label>
		  <?php 
		  $sql21=mysqli_query($con,"select psd_value from property_style_details where psid=".$r11['ps_id']." and subcatid like '%4%'");
			while($r21=mysqli_fetch_array($sql21))
			{	
				$checked = "";
				$psd_name1=$r21['psd_value'];
				$pant_class = $p_label1."-".str_replace(array(" ","_"),"-",$psd_name1);
				$label = $p_label1;
				if($d_style->$label == $psd_name1)
				{
					$checked = "checked";
				}
				?>
		  <label class=" property-value <?php echo $pant_class;?>" style="margin-left:10px;">
			  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
				  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label1;?>][]" value="<?php echo $psd_name1;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
				  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
				  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
				  </ins>
			  </div><?php echo $r21['psd_value'];?>
		  </label>
		  <?php }?>
		</div>
	<?php
	}
}


/*SHIRTS*/
if($subcatid=="2")
{
	$i=0;
	$sql2 = mysqli_query($con,"select ps_id,ps_label from property_style_master where subcatid like '%".$subcatid."%'");
	while($r2=mysqli_fetch_array($sql2))
	{
		$p_label=str_replace(' ','_',strtolower($r2['ps_label']));
		?>
		<div class="form-group <?=$p_label;?>">
			<input type="hidden" value="<?php echo $p_label;?>" name="ps_id[]">
		  <label style="width:150px;" for="exampleInputEmail1"><?php echo $r2['ps_label'];?></label>
		  <?php 
		  $sql3=mysqli_query($con,"select psd_value from property_style_details where psid=".$r2['ps_id']." and subcatid like '%".$subcatid."%'");
			while($r3=mysqli_fetch_array($sql3))
			{	
				$checked = "";
				$psd_name=$r3['psd_value'];
				$shirt_class = $p_label."-".str_replace(array(" ","_"),"-",$psd_name);
				if($d_style->$p_label == $psd_name)
				{
					$checked = "checked";
				}
				?>
		  <label class="property-value <?=$shirt_class;?>" style="margin-left:10px;">
			  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
				  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label;?>][]" value="<?php echo $psd_name;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
				  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
				  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
				  </ins>
			  </div><?php echo $r3['psd_value'];?>
		  </label>
		  <?php 
			}?>
		</div>
		<?php
		$i++;
	}
}


/*BLAZERS*/
if($subcatid == "3")
{
	echo "<h4><strong>Jacket</strong></h4><br>";
	while($r1=mysqli_fetch_array($sql1))
	{
		$p_label=str_replace(' ','_',strtolower($r1['ps_label']));
			?>
				<div class="form-group <?=$p_label;?>">
					<input type="hidden" value="<?php echo $p_label;?>" name="ps_id[]">
					<label style="width:150px;" for="exampleInputEmail1"><?php echo $r1['ps_label'];?></label>
				  <?php
				   $sql2=mysqli_query($con,"select psd_value,psid from property_style_details where psid=".$r1['ps_id']." and subcatid like '%3%'");
					while($r2=mysqli_fetch_array($sql2))
					{	
						$checked = "";
						$psd_name=$r2['psd_value'];
						$label = $p_label;
						$blazer_class = $p_label."-".str_replace(array(" ","_"),"-",$psd_name);
						if($d_style->$label == $psd_name)
						{
							$checked = "checked";
						}
						?>
						<label class="property-value <?=$blazer_class;?>" style="margin-left:10px;">
						  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
							  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label;?>][]" value="<?php echo $psd_name;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
							  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
							  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
							  </ins>
						  </div><?php echo $r2['psd_value'];?>
					  </label>
					  <?php 
					}
					?>
				</div>
				<?php
		}
}

/*PANT*/
if($subcatid == "4")
{
	echo "<h4><strong>Pant</strong></h4><br>";
	$sql11=mysqli_query($con,"select ps_id,ps_label from property_style_master where subcatid like '%4%'");
	while($r11=mysqli_fetch_array($sql11))
	{
		$p_label1=str_replace(' ','_',strtolower($r11['ps_label']));
		?>
		<div class="form-group <?=$p_label1;?>">
			<input type="hidden" value="<?php echo $p_label1;?>" name="ps_id[]">
		  <label style="width:150px;" for="exampleInputEmail1"><?php echo $r11['ps_label'];?></label>
		  <?php 
		  $sql21=mysqli_query($con,"select psd_value from property_style_details where psid=".$r11['ps_id']." and subcatid like '%4%'");
			while($r21=mysqli_fetch_array($sql21))
			{	
				$checked = "";
				$psd_name1=$r21['psd_value'];
				$label = $p_label1;
				$pant_class = $p_label1."-".str_replace(array(" ","_"),"-",$psd_name1);
				if($d_style->$label == $psd_name1)
				{
					$checked = "checked";
				}
				?>
		  <label class="property-value <?=$pant_class;?>" style="margin-left:10px;">
			  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
				  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label1;?>][]" value="<?php echo $psd_name1;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
				  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
				  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
				  </ins>
			  </div><?php echo $r21['psd_value'];?>
		  </label>
		  <?php }?>
		</div>
	<?php
	}
}

/*COAT*/
if($subcatid == "5")
{
	echo "<h4><strong>Coat</strong></h4><br>";
	while($r1=mysqli_fetch_array($sql1))
	{
		$p_label=str_replace(' ','_',strtolower($r1['ps_label']));
			?>
				<div class="form-group <?=$p_label;?>">
					<input type="hidden" value="<?php echo $p_label;?>" name="ps_id[]">
					<label style="width:150px;" for="exampleInputEmail1"><?php echo $r1['ps_label'];?></label>
				  <?php
				   $sql2=mysqli_query($con,"select psd_value,psid from property_style_details where psid=".$r1['ps_id']." and subcatid like '%5%'");
					while($r2=mysqli_fetch_array($sql2))
					{	
						$checked = "";
						$psd_name=$r2['psd_value'];
						$coat_class = $p_label."-".str_replace(array(" ","_"),"-",$psd_name);
						$label = $p_label;
						if($d_style->$label == $psd_name)
						{
							$checked = "checked";
						}
						?>
						<label class="property-value <?=$coat_class;?>" style="margin-left:10px;">
						  <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
							  <input type="radio" <?=$checked;?> name="style[<?php echo $p_label;?>][]" value="<?php echo $psd_name;?>" class="flat-red"  style="position: absolute; opacity: 0;">		  	
							  <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; 
							  	height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
							  </ins>
						  </div><?php echo $r2['psd_value'];?>
					  </label>
					  <?php 
					}
					?>
				</div>
				<?php
		}
}

?>