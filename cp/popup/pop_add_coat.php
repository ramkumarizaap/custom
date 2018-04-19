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
                
                    echo "<img src=".$homeurl.$p_imgs['p_img']." alt='Customizer item'>";             
                
              ?>
            </div>
          </div>
        </div>
        <div class="opt_box">
          <div class="content suit garment_block" id="max_height_move" style="display:block;">
            
            <div class="box_title" style="margin-top: 20px;">
              <h1 class="title suit">Coat</h1>
            </div>
            <!--<div class="separator">
            </div>-->
           
            <div class="box_opts" product_type="jacket">
          		<div class="conf_opt config_3d select_suit_type">
                <div class="box_title">
                  <p>
                    Style:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
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
              
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Collar:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="list_common_th interactive_options all_belts open">
                    <!-- Cuadrado -->
                    <?php if($om_style->collar=="Standup") { ?>
                    <div layer="pants_belt" class="option_trigger common_th active big_images">
                      <div class="box_model big suit_belt">
                        <div class="active">
                        </div>
                        <img alt="Pants Fastening Centered" src="<?php echo $homeurl;?>assets/images/coat_img/coat_neck_standup.png">
                        <br>
                      </div>
                      <div class="box_title_common">
                        <p>
                           Standup
                        </p>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- Flecha -->
                     <?php if($om_style->collar=="Classic") { ?>
                    <div layer="pants_belt" class="option_trigger common_th active big_images">
                      <div class="box_model big suit_belt">
                        <div class="active">
                        </div>
                        <img alt="Pants Fastening Displaced" src="<?php echo $homeurl;?>assets/images/coat_img/coat_neck_classic.png">
                        <br>
                      </div>
                      <div class="box_title_common">
                        <p>
                          Classic
                        </p>
                      </div>
                    </div>
                    <?php } ?>

                     <?php if($om_style->collar=="Lapels") { ?>
                    <div layer="pants_belt" class="option_trigger common_th active big_images">
                      <div class="box_model big suit_belt">
                        <div class="active">
                        </div>
                        <img alt="Pants Fastening Displaced" src="<?php echo $homeurl;?>assets/images/coat_img/coat_neck_flap.png">
                        <br>
                      </div>
                      <div class="box_title_common">
                        <p>
                          Lapels
                        </p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div> 

              <div id="global_jacket_buttons">
                <div class="conf_opt config_3d">
                  <div class="box_title">
                    <p>
                     Length:
                    </p>
                  </div>
                  <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->length;?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
                </div>
              </div>
             
              <div id="lapel_options">
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
                        <?php echo $om_style->fit;?>
                       </span>
                      </div>
                    </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Fastening:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt labels_jacket_pockets_num">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->fastening;?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
                
                      <div class="conf_opt config_3d">
                      <div class="box_title">
                        <p>
                          Pockets:
                        </p>
                      </div>
                      <div class="box_opt">
                        <div class="radio_opt labels_jacket_pockets_num">
                          <label class="option checked">
                            <div class="radio">
                             <span class="checked">
                              <?php echo $om_style->pockets;?>
                             </span>
                            </div>
                          </label>
                        </div>
                        <div class="list_common_th interactive_options all_jacket_pockets open">
                          <!-- 2 Bolsillo -->
                          <div class="1pocket">

                            <?php if($om_style->pocket_style=="Flap Pocket") { ?>
                            <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Hip Pockets: with flap" src="<?php echo $homeurl;?>assets/images/coat_img/coat_pockets_1.png">
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Flap Pocket
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                            
                            <?php if($om_style->pocket_style=="Double-welted") { ?>
                            <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Hip Pockets: double welt" src="<?php echo $homeurl;?>assets/images/coat_img/coat_pockets_2.png">
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Double-welted
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                             <?php if($om_style->pocket_style=="Patched") { ?>
                            <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Hip Pockets: Patched" src="<?php echo $homeurl;?>assets/images/coat_img/coat_pockets_3.png">
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Patched
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                            <?php if($om_style->pocket_style=="Diagonal") { ?>
                            <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Hip Pockets: Patched" src="<?php echo $homeurl;?>assets/images/coat_img/coat_pockets_4.png">
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Diagonal
                                </p>
                              </div>
                            </div>
                            <?php } ?>

                            <?php if($om_style->pocket_style=="Diagonal zipper") { ?>
                            <div layer="jacket_pockets" class="option_trigger common_th mini_pocket active">
                              <div class="box_model">
                                <div class="active">
                                </div>
                                <img alt="Hip Pockets: Patched" src="<?php echo $homeurl;?>assets/images/coat_img/coat_pockets_5.png">
                                <br>
                              </div>
                              <div class="box_title_common">
                                <p>
                                  Diagonal zipper
                                </p>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
              
                <div class="conf_opt config_3d">
                <div class="box_title">
                  <p> Chest pocket:</p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->chest_pocket;?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>

            <div class="box_opts">
	            
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>Belt:</p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->belt;?>
                       </span>
                      </div>
                    </label>
	                </div>
	              </div>
	            </div>
	            
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Back side:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->back_side;?>
                       </span>
                      </div>
                    </label>
	                </div>
	              </div>
	            </div> 
            
              <?php if(!empty($om_style->lapels_width)) {?>
              <div class="conf_opt config_3d">
                <div class="box_title">
                  <p>
                    Lapels width:
                  </p>
                </div>
                <div class="box_opt">
                  <div class="radio_opt">
                    <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->lapels_width;?>
                       </span>
                      </div>
                    </label>
                  </div>
                </div>
              </div>   
              <?php } ?>                                   
	           
	                                                 
	            <div class="conf_opt config_3d">
	              <div class="box_title">
	                <p>
	                  Sleeves:
	                </p>
	              </div>
	              <div class="box_opt">
	                <div class="radio_opt">
	                  <label class="option checked">
                      <div class="radio">
                       <span class="checked">
                        <?php echo $om_style->sleeves;?>
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
                        * The number of buttons on the coat can vary according to the length of the garment and the customer measurements. 
                       <br>The picture above is an example of configuration.
                        </div>
                      </div>
                  </div>
	              </div>
	            </div>
	          </div>
          </div>
         
        </div>
      </div>
    </div>
 </div>

