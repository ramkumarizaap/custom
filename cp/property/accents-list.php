<?php
$jacket="";$embroidery="";$buttons="";$neck="";$threads="";$elbow="";$pocket="";
require_once("../../includes/action/config.php");
$id=$_POST['id'];
$sql=mysqli_query($con,"select * from accents_master where product_type='".$id."'");
$count = mysqli_num_rows($sql);
if($count)
{
	$r = mysqli_fetch_array($sql);
	$jacket=$r['jacket_lining_price'];
	$embroidery=$r['embroidery_price'];
	$buttons=$r['button_price'];
	$neck=$r['neck_lining_price'];
	$pocket=$r['pocket_price'];
	$threads=$r['threads_price'];
	$elbow=$r['elbow_patch_price'];
	$monogram= $r['monogram_price'];
	$collar= $r['collar_lining_price'];
	$cuff = $r['cuff_style_price'];
}
if($id=="1" || $id=="5" || $id=="3")
{
?>
<div class="form-group">
  <h3>Jacket Lining Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="jacket_radio" value="1" <?=($jacket=="0.00")?'checked':'';?> data-id="jacket" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="jacket_radio" value="2" data-id="jacket" <?=($jacket!="0.00")?'checked':'';?> class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="jacket_lining" class="form-control jacket <?=($jacket=="0.00")?'hide':'';?> " value="<?=$jacket;?>" placeholder="Jacket Lining Price">
</div>
<?php 
}
if($id=="1" || $id=="5" || $id=="3")
{
?>
<div class="form-group">
  <h3>Embroidery Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="embroidery_radio" value="1" <?=($embroidery=="0.00")?'checked':'';?> data-id="embroidery" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="embroidery_radio" value="2" <?=($embroidery!="0.00")?'checked':'';?> data-id="embroidery" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="embroidery" class="form-control embroidery <?=($embroidery=="0.00")?'hide':'';?> " value="<?=$embroidery;?>" placeholder="Embroidery Price">
</div>
<?php 
}
if($id=="1" || $id=="3")
{
?>
<div class="form-group">
  <h3>Buttons Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="buttons_radio" value="1" <?=($buttons=="0.00")?'checked':'';?> data-id="buttons" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="buttons_radio" value="2" <?=($buttons!="0.00")?'checked':'';?> data-id="buttons" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="buttons" class="form-control buttons <?=($buttons=="0.00")?'hide':'';?>  " value="<?=$buttons;?>" placeholder="Buttons Price">
</div>
<?php 
}
if($id=="1" || $id=="5" || $id=="3")
{
?>


<div class="form-group">
  <h3>Neck Lining Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="neck_radio" value="1" <?=($neck=="0.00")?'checked':'';?> data-id="neck" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="neck_radio" value="2" <?=($neck!="0.00")?'checked':'';?> data-id="neck" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="neck_lining" class="form-control neck <?=($neck=="0.00")?'hide':'';?> " value="<?=$neck;?>" placeholder="Neck Lining Price">
</div>

<?php 
}
if($id=="1" || $id=="3")
{
?>

<div class="form-group">
  <h3>Pocket Square Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="pocket_radio" value="1" <?=($pocket=="0.00")?'checked':'';?> data-id="pocket" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="pocket_radio" value="2" <?=($pocket!="0.00")?'checked':'';?> data-id="pocket" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="pocket" class="form-control pocket <?=($pocket=="0.00")?'hide':'';?>" value="<?=$pocket;?>" placeholder="Pocket Square Price">
</div>
<?php 
}
if($id=="1" || $id=="2" || $id=="5" || $id=="3")
{
?>

<div class="form-group">
  <h3>Colored Button Holes/Threads Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="threads_radio" value="1" <?=($threads=="0.00")?'checked':'';?> data-id="threads" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="threads_radio" value="2" <?=($threads!="0.00")?'checked':'';?> data-id="threads" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="threads" class="form-control threads <?=($threads=="0.00")?'hide':'';?>" value="<?=$threads;?>" placeholder="Threads Price">
</div>

<?php 
}
if($id=="1" || $id=="2" || $id=="3")
{
?>
<div class="form-group">
  <h3>Elbow patch Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="elbow_radio" value="1" <?=($elbow=="0.00")?'checked':'';?> data-id="elbow" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="elbow_radio" value="2" <?=($elbow!="0.00")?'checked':'';?> data-id="elbow" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="elbow" class="form-control elbow <?=($elbow=="0.00")?'hide':'';?> " value="<?=$elbow;?>" placeholder="Elbow Patch Price">
</div>
<?php 
}

if($id=="2")
{
?>
<div class="form-group">
  <h3>Monogram Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="monogram_radio" value="1" <?=($monogram=="0.00")?'checked':'';?> data-id="monogram" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="monogram_radio" value="2" <?=($monogram!="0.00")?'checked':'';?> data-id="monogram" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="monogram" class="form-control monogram <?=($monogram=="0.00")?'hide':'';?> " value="<?=$monogram;?>" placeholder="Monogram Price">
</div>

<div class="form-group">
  <h3>Cuff Style Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="cuff_radio" value="1" <?=($cuff=="0.00")?'checked':'';?> data-id="cuff" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="cuff_radio" value="2" <?=($cuff!="0.00")?'checked':'';?> data-id="cuff" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="cuff" class="form-control cuff <?=($cuff=="0.00")?'hide':'';?> " value="<?=$cuff;?>" placeholder="Cuff Style Price">
</div>

<div class="form-group">
  <h3>Collar Lining Price</h3>
  <label style="width:150px;" for="exampleInputEmail1">Price Type</label>
  <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="collar_radio" value="1" <?=($cuff=="0.00")?'checked':'';?> data-id="collar" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Complimentary
  </label>
   <label class="" style="margin-left:10px;">
   <div class="iradio_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
      <input type="radio" name="collar_radio" value="2" <?=($cuff!="0.00")?'checked':'';?> data-id="collar" class="flat-red"  style="position: absolute; opacity: 0;">
    </div>&nbsp;&nbsp;Cost
  </label>
  <input type="text" name="collar" class="form-control collar <?=($collar=="0.00")?'hide':'';?> " value="<?=$collar;?>" placeholder="Collar Lining Price">
</div>
<?php 
}
?>


<script type="text/javascript">
	   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      	checkboxClass: 'icheckbox_flat-pink',
        radioClass: 'iradio_flat-pink'
      });

	    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').on('ifChecked', function(event){
	    	val = $(this).val();
	    	attr = $(this).attr("data-id");
	    	if(val=="2")
	    		$("."+attr).removeClass("hide");
	    	else
	    		$("."+attr).addClass("hide");

	    });
</script>