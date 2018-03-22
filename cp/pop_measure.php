<div class="example-modal" id="measure<?php echo $r['om_id'];?>">

  <div class="modal">

    <div class="modal-dialog modal-lg">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close close-btn"  aria-label="Close">

            <span aria-hidden="true">×</span>

          </button>

          <h4 class="modal-title">Measurement Details</h4>

        </div>

        <div class="modal-body">

          <div class="row col-md-12">

            <h4>User Photo</h4>

              <div class="col-md-5">

                <?php

                  $userid=$r['userid'];

                  $img=mysqli_query($con,"select img,img2,img3 from user_master where user_id=$userid ");

                  $i1=mysqli_fetch_array($img);

                  if($i1['img']!='')

                  {

                  echo "<img src='".$homeurl.$i1['img']."' style='float:left;margin-right:10px;' height=70 width=70 >";

                  }

                  if($i1['img2']!='')

                  {

                  echo "<img src='".$homeurl.$i1['img2']."' style='float:left;margin-right:10px;' height=70 width=70 >";

                  }

                  if($i1['img3']!='')

                  {

                  echo "<img src='".$homeurl.$i1['img3']."' style='float:left;margin-right:10px;' height=70 width=70 >";

                  }

                ?>

              </div>
              <div class="col-md-2 pull-right">
                <a href="javascript:void(0);" class="btn btn-xs btn-danger" onclick="modify_measurement();"> Modify Measurement</a>
              </div>
          </div>
          <form id="measureForm" action="" method="post">
            <div class="row">            
              <div class="col-md-12 custom-value">

                <p><strong>Name:</strong> <?php echo $m_dtl['mp_name']; ?> </p>

                <p>
                  <strong>Height:</strong><span class="label-value"><?php echo $m_dtl['mp_height']; ?></span>
                  <span class="col-md-9 pull-right">
                    <select class="col-md-5 hide input-value" name="feet">
                      <option value="">-</option>
                      <option value="4">4 feet</option>
                      <option value="5">5 feet</option>
                      <option value="6">6 feet</option>
                      <option value="7">7 feet</option>
                    </select>
                    <select class="col-md-5 hide input-value" name="inches">
                      <option value="">-</option>
                      <option value="1">1 in</option><option value="2">2 in</option><option value="3">3 in</option>
                      <option value="4">4 in</option><option value="5">5 in</option><option value="6">6 in</option>
                      <option value="7">7 in</option><option value="8">8 in</option><option value="9">9 in</option>
                      <option value="10">10 in</option><option value="11">11 in</option>
                    </select>
                  </span>
                </p>

                <p>
                  <strong>Weight:</strong> <span class="label-value"><?php echo $m_dtl['mp_weight']; ?></span>
                  <span class="col-md-8 pull-right">
                    <input type="" class="col-md-10 hide input-value" name="weight" value="<?=$m_dtl['mp_weight']; ?>">
                  </span>
                </p>

                <p>
                  <strong>Chest:</strong><span class="label-value"> <?php echo $m_dtl['mp_chest']; ?></span>
                  <span class="col-md-9 pull-right">
                     <select class="col-md-10 hide input-value" name="chest">
                      <option value="">-</option>
                      <option <?=($m_dtl['mp_chest']=="very_small")?'selected':'';?> value="very_small">Very Small</option>
                      <option <?=($m_dtl['mp_chest']=="small")?'selected':'';?> value="small">Small</option>
                      <option <?=($m_dtl['mp_chest']=="normal")?'selected':'';?> value="normal">Normal</option>
                      <option <?=($m_dtl['mp_chest']=="large")?'selected':'';?> value="large">Large</option>
                      <option <?=($m_dtl['mp_chest']=="very_large")?'selected':'';?> value="very_large">Very Large</option>
                    </select>
                  </span>
                </p>

                <p>
                  <strong>Abdomen:</strong> <span class="label-value"><?php echo $m_dtl['mp_abdomen']; ?></span>
                  <span class="col-md-7 pull-right" style="padding: 0;">
                    <select class="col-md-11 hide input-value" name="adbodmen">
                      <option value="">-</option>
                      <option <?=($m_dtl['mp_abdomen']=="very_small")?'selected':'';?> value="very_small">Very Small</option>
                      <option <?=($m_dtl['mp_abdomen']=="small")?'selected':'';?> value="small">Small</option>
                      <option <?=($m_dtl['mp_abdomen']=="normal")?'selected':'';?> value="normal">Normal</option>
                      <option <?=($m_dtl['mp_abdomen']=="large")?'selected':'';?> value="large">Large</option>
                      <option <?=($m_dtl['mp_abdomen']=="very_large")?'selected':'';?> value="very_large">Very Large</option>
                    </select>
                  </span>
                </p>

                <p>
                  <strong>Buttocks:</strong> <span class="label-value"><?php echo $m_dtl['mp_buttocks']; ?></span>
                  <span class="col-md-8 pull-right">
                    <select class="col-md-10 hide input-value" name="buttocks">
                      <option value="">-</option>
                      <option <?=($m_dtl['mp_buttocks']=="very_small")?'selected':'';?> value="very_small">Very Small</option>
                      <option <?=($m_dtl['mp_buttocks']=="small")?'selected':''; ?> value="small">Small</option>
                      <option <?=($m_dtl['mp_buttocks']=="normal")?'selected':''; ?> value="normal">Normal</option>
                      <option <?=($m_dtl['mp_buttocks']=="large")?'selected':''; ?> value="large">Large</option>
                      <option <?=($m_dtl['mp_buttocks']=="very_large")?'selected':''; ?> value="very_large">Very Large</option>
                    </select>
                  </span>
                </p>

                <p>
                  <strong>Hips:</strong> <span class="label-value"><?php echo $m_dtl['mp_hips']; ?></span>
                  <span class="col-md-9 pull-right">
                    <select class="col-md-12 hide input-value" name="hips">
                      <option value="">-</option>
                      <option <?=($m_dtl['mp_hips']=="very_small")?'selected':''; ?> value="very_small">Very Small</option>
                      <option <?=($m_dtl['mp_hips']=="small")?'selected':''; ?> value="small">Small</option>
                      <option <?=($m_dtl['mp_hips']=="normal")?'selected':''; ?> value="normal">Normal</option>
                      <option <?=($m_dtl['mp_hips']=="large")?'selected':''; ?> value="large">Large</option>
                      <option <?=($m_dtl['mp_hips']=="very_large")?'selected':''; ?> value="very_large">Very Large</option>
                    </select>
                  </span>
                </p>
                <input type="hidden" class="col-md-10" name="measure[0]" value="0">
                <?php

                    $fld=mysqli_query($con,"select a.*,b.labelname from measurement_profile_value a,
                    measurement_profile_fields b where a.mpid='".$m_dtl['mp_id']."' and a.mpfid=b.mpf_id");

                  if(mysqli_num_rows($fld))

                   {

                    while ($v=mysqli_fetch_array($fld))

                     {

                      if($v['mpf_value']!='0')

                      {

                        ?>
                        <?php if($v['labelname']=='Neck') { 
                          $m_type='cm';
                            }
                            else
                            {
                              $m_type="inches";
                            }
                         ?>

                          <p>

                            <strong><?php echo $v['labelname']; ?>:</strong> 

                              <span class="label-value">
                                  <?php echo $v['mpf_value']; ?> <span><?php echo $m_type; ?></span>
                              </span>
                              <span class="col-md-6 pull-right">
                                <input type="" class="col-md-10 hide input-value" name="measure[<?=$v['mpv_id'];?>]" value="<?=$v['mpf_value'];?>">
                              </span>

                          </p>

                        <?php

                      }

                    }

                   } 

                ?>
              </div>            
            </div>
            <div class="row save-btn hide">
              <div class="col-md-2 pull-right">
                <input type="hidden" name="measure_id" value="<?= $m_dtl['mp_id'];?>">
                <input type="submit" class="btn btn-success" value="Save">
              </div>
            </div>
          </form>

        </div>

      </div>

    </div>

  </div>

</div>