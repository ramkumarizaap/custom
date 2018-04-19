<div class="tab-pane active" id="style_<?php echo $a;?>">
  <?php 
    $om_style = json_decode($r['om_style']);
    
    $p_img_qry=mysqli_query($con,"select p_img from product_images where pid='".$r['pid']."'");
      $p_imgs=mysqli_fetch_array($p_img_qry);

  ?>
  <div id="body" class="man_suit2_configure garment_container">
    <div class="body_box" id="features">
      <div class="body_product_box_3d">                                
        <div id="man_shirt">
          <form id="configure_form" class="configure_form">

            <div class="box_right_3d">
              <div id="move">
                <!-- MODEL 3D -->
                <div id="loading">
                </div>
                <div style="position: relative;" id="model_3d_preview" class="man_suit">
                  <?php
                    /*if($r['om_style']!='')
                     {
                        $get_fab_def_img = mysqli_query($con,"select default_img from fabric_master where fab_rand='".trim($fabric_id[1])."'");
                        if(mysqli_num_rows($get_fab_def_img) > 0)
                         { 
                            $fab_def_img = mysqli_fetch_array($get_fab_def_img);
                            ?>*/
                               echo "<img src=".$homeurl.$p_imgs['p_img']." alt='Customizer item'>";
                            /*<?php 
                          } 
                      }*/ ?>
                </div>
                <!-- CONTROLS -->
              </div>
            </div>
             <div class="opt_box">
              <div class="content garment_block" id="max_height_move">
              
                <div class="box_opts">
                  <div id="p-s-1">
                      <div class="conf_opt config_3d">
                        <div class="box_title">
                          <p>
                            Sleeves:
                          </p>
                        </div>
                        <div class="box_opt">
                          <div class="radio_opt labels_shirt_sleeve">
                            <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->sleeves; ?>
                             </span>
                            </div>
                          </label>
                          </div>
                        </div>
                      </div>
                      <div id="box_shirt_fit" class="conf_opt config_3d">
                        <div class="box_title">
                          <p>
                            Fit:
                          </p>
                        </div>
                        <div class="box_opt">
                          <div class="radio_opt labels_shirt_fit">
                            <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->fit; ?>
                             </span>
                            </div>
                          </label>
                          </div>
                        </div>
                      </div>
                      <div class="conf_opt config_3d">
                        <div class="box_title">
                          <p>
                            Collar Style:
                          </p>
                        </div>
                        <div class="box_opt">
                          <div class="list_common_th interactive_options all_necks open">

                            <?php if($om_style->collar_style=="Kent Collar") { ?>
                            <div id="neck_default_interfacing" class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Kent collar" src="<?php echo $homeurl;?>assets/images/shirt_img/collar/kent_collar.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Kent collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                            <?php if($om_style->collar_style=="Cutaway Collar") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Cutaway collar" src="<?php echo $homeurl;?>assets/images/shirt_img/collar/cutway_collar.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Cutaway collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                            
                            <?php if($om_style->collar_style=="Long Collar") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Long collar" src="<?php echo $homeurl;?>assets/images/shirt_img/collar/long_collar.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Long collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                            
                            <?php if($om_style->collar_style=="Button Down") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Button-down" src="<?php echo $homeurl;?>assets/images/shirt_img/collar/button_down_collar.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Button-down
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                            <?php if($om_style->collar_style=="Stand-up collar") { ?>
                            <div class="always_hard option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Stand-up collar" src="https://www.dccustomclothiers.com/wp-content/themes/perth/images/mao.jpg" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Stand-up collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                            
                            <?php if($om_style->collar_style=="Wing collar") { ?>
                            <div  id="opt_smoking" class="always_hard option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Wing collar" src="https://www.dccustomclothiers.com/wp-content/themes/perth/images/esmoquin.jpg" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Wing collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                            <?php if($om_style->collar_style=="Rounded Collar") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Collar Style Rounded collar" src="<?php echo $homeurl;?>assets/images/shirt_img/collar/rounded_collar.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Rounded collar
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                          </div>
                        </div>
                      </div>
                      <div id="box_shirt_neck_type" class="conf_opt config_3d">
                        <div class="box_title">
                          <p>
                            Collar Lining:
                          </p>
                        </div>
                          <div class="box_opt">
                            <div class="radio_opt hard_soft_neck">
                              <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->collar_lining;?>
                             </span>
                            </div>
                          </label>
                              </div>
                            </div>
                      </div>                                            
                      <div id="global_neck_buttons" class="conf_opt config_3d">
                        <div class="box_title">
                          <p>
                            Collar buttons:
                          </p>
                        </div>
                        <div class="box_opt">
                          <div class="radio_opt labels_shirt_fit">
                            <label class="option">
                              <?php echo $om_style->collar_buttons;?>
                            </label>                                                 
                          </div>
                        </div>
                      </div>
                  </div>
                  <div id="p-s-2">
                    <div id="box_shirt_cuffs" class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Cuffs Style:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="list_common_th interactive_options all_cuffs open" style="height: 230px;">

                           <?php if($om_style->cuff_style=="Single Cuff 1 Button") { ?>
                          <div id="cuff_default_interfacing" class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Single cuff 1 button" src="https://www.dccustomclothiers.com/wp-content/themes/perth/images/clasico1bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Single cuff 1 button
                              </p>
                            </div>
                          </div>
                          <?php } ?>

                          <?php if($om_style->cuff_style=="Single Cuff 2 Buttons") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Single cuff 2 buttons" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/clasico2bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Single cuff 2 buttons
                              </p>
                            </div>
                          </div>
                          <?php } ?>

                           <?php if($om_style->cuff_style=="One Button Cut") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style One-button-cut" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/cortado1bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                One-button-cut
                              </p>
                            </div>
                          </div>
                          <?php } ?>

                          <?php if($om_style->cuff_style=="Two Button Cut") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Two-button-cut" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/cortado2bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Two-button-cut
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                        
                        <?php if($om_style->cuff_style=="Rounded 1 Button") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Rounded 1 button" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/redondeado1bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Rounded 1 button
                              </p>
                            </div>
                          </div>
                          <?php } ?>

                           <?php if($om_style->cuff_style=="Rounded 2 Buttons") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Rounded 2 buttons" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/redondeado2bot.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Rounded 2 buttons
                              </p>
                            </div>
                          </div>
                          <?php } ?>

                           <?php if($om_style->cuff_style=="Single French Cuff") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Single french cuff" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/gemelossencillo.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Single french cuff
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          
                           <?php if($om_style->cuff_style=="Double French Cuff") { ?>
                          <div class=" option_trigger common_th active">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Double french cuff" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/gemelosdoble.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Double french cuff
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          
                           <?php if($om_style->cuff_style=="Rounded French Cuff") { ?>
                          <div class=" option_trigger common_th active" style="display:block;">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Rounded french cuff" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/gemelosredsencillos.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Rounded french cuff
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          
                           <?php if($om_style->cuff_style=="Double Rounded French Cuff") { ?>
                          <div class=" option_trigger common_th active" style="display:block;">
                            <div class="box_model">
                              <div class="active">
                              </div>
                              <img alt="Cuffs Style Double rounded french cuff" src="<?php echo $homeurl;?>assets/images/shirt_img/accents/gemelosreddobles.jpg" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Double rounded french cuff
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                        <!--<a href="javascript:;" class="view_all" rel="all_cuffs">
                          <span>
                            View all
                          </span>
                        </a>-->
                      </div>
                    </div>

                    <div id="box_chest_pocket" class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Chestpocket:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt labels_shirt_fit">
                          <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->chestpocket;?>
                             </span>
                            </div>
                          </label>
                        </div>
                      </div>
                    </div>


                    <div id="box_shirt_cut" class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Placket:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt labels_shirt_fit">
                          <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->placket;?>
                             </span>
                            </div>
                          </label>
                        </div>
                      </div>
                    </div>
                   

                      <div class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Pocket Style:
                        </p>
                      </div>
                        <div id="box_chest_pocket_imgs" class="list_common_th interactive_options all_cuffs open">
                         
                          <!-- 1 Bolsillo -->
                          <div>
                            <?php if($om_style->pocket_style=="Flap Pockets") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Chestpocket Flap Pockets" src="<?php echo $homeurl; ?>assets/images/shirt_img/chest_pocket/flap_pockets.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Flap Pockets
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                            
                             <?php if($om_style->pocket_style=="No Flap Pockets") { ?>
                            <div class="option_trigger common_th active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Chestpocket No Flap Pockets" src="<?php echo $homeurl; ?>assets/images/shirt_img/chest_pocket/no_flap_pockets.JPG" >
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  No Flap Pockets
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                     
                    <div class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Placket:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt labels_shirt_fit">
                          <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->placket;?>
                             </span>
                            </div>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div id="box_shirt_cut" class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Bottom:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt labels_shirt_fit">
                          <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->bottom;?>
                             </span>
                            </div>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Pleats:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="list_common_th interactive_options all_pleats open">
                          
                          <!-- No pleats -->
                           <?php if($om_style->pleats=="No Pleats") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model big">
                              <div class="active">
                              </div>
                              <img alt="Pleats No Pleats" src="<?php echo $homeurl; ?>assets/images/shirt_img/shirt_pleats/no_pleats.JPG" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                No Pleats
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          <!-- 1 pleats -->
                           <?php if($om_style->pleats=="Box Pleat") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model big">
                              <div class="active">
                              </div>
                              <img alt="Pleats Box pleat" src="<?php echo $homeurl; ?>assets/images/shirt_img/shirt_pleats/box_pleats.JPG" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Box pleat
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                          <!-- 2 pleats -->
                           <?php if($om_style->pleats=="Side Folds") { ?>
                          <div class="option_trigger common_th active">
                            <div class="box_model big">
                              <div class="active">
                              </div>
                              <img alt="Pleats Side folds" src="<?php echo $homeurl; ?>assets/images/shirt_img/shirt_pleats/side_folds.JPG" >
                              <br>
                            </div>
                            <div class="box_title_common">
                              <p>
                                Side folds
                              </p>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>

                  

                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
