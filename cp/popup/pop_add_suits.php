<div class="tab-pane active" id="style_<?php echo $a;?>">
	<?php 
    $om_style = json_decode($r['om_style']);

    $p_img_qry=mysqli_query($con,"select p_img from product_images where pid='".$r['pid']."'");
    $p_imgs=mysqli_fetch_array($p_img_qry);
	?>
	<div id="body" class="man_suit2_configure garment_container">
		<div class="body_box" id="features">
			<div class="body_product_box_3d">
				<div id="man_suit">
        <form id="configure_form" class="configure_form">
				<div class="box_right_3d suit">
          <div id="box_mini_next_3d"></div>
          <div id="move">
            <div id="control_suit"><!-- Rotate model -->
            </div>
           <!-- MODEL 3D -->
            <div id="loading"></div>      
            <div id="model_3d_preview1" class="man_suit" style="position: relative;">
              <?php
                /*if(trim($r['om_style'])!='')
                {
                  $get_fab_def_img=mysqli_query($con,"select default_img from fabric_master where 
                    fab_rand='".trim($fabric_id[1])."'");
                  if(mysqli_num_rows($get_fab_def_img) > 0)
                  { */
                    //$$fab_def_img = mysqli_fetch_array($get_fab_def_img);
                    echo "<img src=".$homeurl.$p_imgs['p_img']." alt='Customizer item'>";             
                  //} 
                //} 
              ?>
            </div>
          </div>
        </div>
        <div class="opt_box">
          <div class="content suit garment_block" id="max_height_move" style="display:block;">
            	<!-- JACKET CONFIG -->
            <div class="box_title" style="margin-top: 20px;">
              <h1 class="title suit">Jacket</h1>
            </div>
            <!--<div class="separator">
            </div>-->
            <!-- JACKET CONFIG -->
            <div class="box_opts" product_type="jacket">
          		<div class="conf_opt config_3d select_suit_type">
                <div class="box_title">
                  <p>
                    Type:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                    <div class="radio">
                     <span class="checked">
                      <?php echo $om_style->type; ?>
                     </span>
                    </div>
                  </label>
                  </div>
                </div>
              </div>
              <!-- Jacket: Style -->
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Style:
                  </p>
                </div>
                <div class="box_opt">
                  <div id="options_jacket_style" class="radio_opt">
                     <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->style; ?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Jacket: Entallado -->
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Fit:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
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

              <div id="lapel_options">
                <div class="conf_opt config_3d">
                  <div class="box_title">
                    <p>
                      Jacket Lapels:
                    </p>
                  </div>
                  <div class="box_opt">
                    <div class="radio_opt">
                      <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->jacket_lapels;?>
                       </span>
                      </div>
                    </label>
                    </div>
                  </div>
                </div>
              </div>

              <div id="global_jacket_buttons">
                <div class="conf_opt config_3d">
                  <div class="box_title">
                    <p>
                     Number of Buttons:
                    </p>
                  </div>
                  <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option">
                       <?php echo $om_style->number_of_buttons;?>
                    </label>
                  </div>
                </div>
                </div>
              </div>


              <div id="lapel_options">
                <div class="conf_opt config_3d">
                  <div class="box_title">
                    <p>
                      Breast Pocket:
                    </p>
                  </div>
                  <div class="box_opt">
                    <div class="radio_opt">
                      <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->breast_pocket;?>
                       </span>
                      </div>
                    </label>
                    </div>
                  </div>
                </div>
              </div>
              
            
              <!-- Jacket: front "jacket_pockets" -->
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Hip Pockets:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt labels_jacket_pockets_num">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->hip_pockets;?>
                       </span>
                      </div>
                    </label>
                  </div>

                  <div class="list_common_th interactive_options all_jacket_pockets open">
                    
                    <!-- 2 Bolsillo -->

                    <div class="1pocket">
                      <?php if($om_style->pocket_style=="with flaps") { ?>
                      <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                        <div class="box_model">
                          <div class="active">
                          </div>
                          <img alt="Hip Pockets: with flap" src="<?php echo $homeurl;?>assets/images/suit_img/hip_pockets/hip_pocket_with_flap.JPG">
                          <br>
                        </div>
                        <div class="box_title_common">
                          <p>
                            with flap
                          </p>
                        </div>
                      </div>
                      <?php } ?>
                      
                      <?php if($om_style->pocket_style=="Double Welt") { ?>
                      <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                        <div class="box_model">
                          <div class="active">
                          </div>
                          <img alt="Hip Pockets: double welt" src="<?php echo $homeurl;?>assets/images/suit_img/hip_pockets/hip_pocket_double_welt.JPG">
                          <br>
                        </div>
                        <div class="box_title_common">
                          <p>
                            double welt
                          </p>
                        </div>
                      </div>
                      <?php } ?>
                      
                      <?php if($om_style->pocket_style=="Patched") { ?>
                      <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                        <div class="box_model">
                          <div class="active">
                          </div>
                          <img alt="Hip Pockets: Patched" src="<?php echo $homeurl;?>assets/images/suit_img/hip_pockets/hip_pocket_patched.JPG">
                          <br>
                        </div>
                        <div class="box_title_common">
                          <p>
                            Patched
                          </p>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- Jacket: Lapel Vent -->
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Back style:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->back_style;?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Jacket: sleeve_buttons -->
              <div id="jacket_sleeve_buttons" class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Sleeve buttons:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option">
                      <?php echo $om_style->sleeve_buttons;?>                     
                    </label>
                  </div>
                </div>
              </div>
              <!-- Jacket: sleeve buttonholes -->
              <?php if(!empty($om_style->sleeve_buttons)): ?>
              <div id="sleeve_buttonholes" class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Buttonholes:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                     <div class="radio">
                      <span class="checked"> 
                       Real (Functional Buttons)
                      </span>
                     </div>
                    </label>
                  </div>
                </div>
              </div>
            <?php endif; ?>
              <!-- Jacket: buttons -->
            </div>
            
            <br style="clear: both;">
            <!-- PANTS CONFIG -->
            <div class="box_title">
              <h1 class="title suit">
                Pants 
              </h1>
            </div>
            <div class="box_opts" product_type="pants">
	            <!-- Pants: FIT -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>Fit:</p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->pant_fit;?>
                       </span>
                      </div>
                    </label>
	                </div>
	              </div>
	            </div>
	            <!-- Pants: PLEATS -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Pleats:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->pleats;?>
                       </span>
                      </div>
                    </label>
	                </div>
	              </div>
	            </div>                                      
	            <!-- Pants: CINTURÓN =>cuadrado/flecha cuadrado default -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Pants Fastening:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="list_common_th interactive_options all_belts open">
	                  <!-- Cuadrado -->
                    <?php if($om_style->pants_fastening=="Centered") { ?>
	                  <div layer="pants_belt" class="option_trigger common_th active big_images">
	                    <div class="box_model big suit_belt">
	                      <div class="active">
	                      </div>
	                      <img alt="Pants Fastening Centered" src="<?php echo $homeurl;?>assets/images/suit_img/pant_fastening/fastening_centered.JPG">
	                      <br>
	                    </div>
	                    <div class="box_title_common">
	                      <p>
	                        Centered
	                      </p>
	                    </div>
	                  </div>
                    <?php } ?>
	                  <!-- Flecha -->
                     <?php if($om_style->pants_fastening=="Displaced") { ?>
	                  <div layer="pants_belt" class="option_trigger common_th active big_images">
	                    <div class="box_model big suit_belt">
	                      <div class="active">
	                      </div>
	                      <img alt="Pants Fastening Displaced" src="<?php echo $homeurl;?>assets/images/suit_img/pant_fastening/fastening_displaced.JPG">
	                      <br>
	                    </div>
	                    <div class="box_title_common">
	                      <p>
	                        Displaced
	                      </p>
	                    </div>
	                  </div>
                    <?php } ?>
	                </div>
	              </div>
	            </div>                                      
	            <!-- Pants: BOLSILLOS LATERALES -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Side Pockets:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->side_pockets;?>
                       </span>
                      </div>
                    </label>
	                </div>
	              </div>
	            </div>                                      
	            <!-- Pants: Back pockets -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Back Pockets:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div id="box_back_pocket" class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->back_pockets;?>
                       </span>
                      </div>
                    </label>
	                </div>
	                <div id="box_back_pocket_img" class="list_common_th interactive_options all_pants_back_pocket open">
	                  <!-- 1 Bolsillo -->
	                  <div class="box_pocket">

                      <?php if($om_style->back_pocket_style=="piped pocket with button") { ?>
	                    <div layer="pants_back_pocket" class="option_trigger common_th mini_pocket active">
	                      <div class="box_model">
	                        <div class="active">
	                        </div>
	                        <img alt="Back Pockets: piped pocket with button" src="<?php echo $homeurl;?>assets/images/suit_img/pant_back_pocket/piped_pocket_with_button.JPG">
	                        <br>
	                      </div>
	                      <div class="box_title_common">
	                        <p>
	                          piped pocket with button
	                        </p>
	                      </div>
	                    </div>
                      <?php } ?>

                      <?php if($om_style->back_pocket_style=="Patched") { ?>
	                    <div layer="pants_back_pocket" class="option_trigger common_th mini_pocket active">
	                      <div class="box_model">
	                        <div class="active">
	                        </div>
	                        <img alt="Back Pockets: Patched" src="<?php echo $homeurl;?>assets/images/suit_img/pant_back_pocket/patched.JPG">
	                        <br>
	                      </div>
	                      <div class="box_title_common">
	                        <p>
	                          Patched
	                        </p>
	                      </div>
	                    </div>
                      <?php } ?>

                      <?php if($om_style->back_pocket_style=="Flap pockets") { ?>
	                    <div layer="pants_back_pocket" class="option_trigger common_th mini_pocket active">
	                      <div class="box_model">
	                        <div class="active">
	                        </div>
	                        <img alt="Back Pockets: Flap Pockets" src="<?php echo $homeurl;?>assets/images/suit_img/pant_back_pocket/flap_pocket.JPG">
	                        <br>
	                      </div>
	                      <div class="box_title_common">
	                        <p>
	                          Flap Pockets
	                        </p>
	                      </div>
	                    </div>
                      <?php } ?>
	                  </div>
	                </div>
	              </div>
	            </div>
	             <!-- Pants: Cuff -->
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Pant Cuffs:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->pant_cuffs;?>
                       </span>
                      </div>
                    </label>
                    </div>
	                </div>

                  <!-- Extra Pants -->
                  <!-- Pants: Cuff -->
                    <div class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Extra Pants:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt">
                          <label class="option checked">
                          <div class="radio">
                           <span class="checked">
                            <?php echo $om_style->extra_pants;?>
                           </span>
                          </div>
                        </label>
                        </div>
                      </div>
                    </div>
                     <div class="conf_opt config_3d">
                        <div class="box_title">
                                          
                        </div>
                       <div class="box_opt">
                        Prolong the life of your custom suit by adding an extra pair of pants.Pants will wear down before the suit jacket.
                        </div>
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

