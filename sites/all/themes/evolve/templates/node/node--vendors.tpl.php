<?php
    global $base_url;
    global $theme_path;
    $imagePath = $base_url.'/'.$theme_path;
//    echo $imagePath; die;

    $node = node_load($nid);
   // echo '<pre>'; print_r($node); die;
?>
<div id="node-<?php print $node->nid; ?>" style="margin-top:30px;" class="<?php print $classes; ?> clearfix post large" <?php print $attributes; ?>>
    <section>
        <!-- profile background image -->
        <div class="pro_main">
            <div class="pro_bg"><img class="pro_img" src=" <?php echo  $node->field_banner['und'][0]['uri']; ?>"></div>
        </div>
        <div class="pro_top"></div>
        <!-- profile overview -->
        <div class="container pro_card_main">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="top_card col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-3 p-0">
                        <div class="profile_thumb_img">
                            <?php print render($content['field_logo']); ?>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 profile_card">
                        <h1 class="profile_title"><?php echo $node->title; ?></h1>
                        <div class="profile_vendor_cat">
                            <i class="fa fa-tags"></i>
                            <?php
                                $i = 0;
                                for($i=0; $i<count($node->field_profession['und']); $i++){
                                    echo "<span>".$node->field_profession['und'][$i]['taxonomy_term']->name."</span>";
                                }
                            ?>
                        </div>
                        <div class="profilee-addr">
                            <span><i class="fa fa-map-marker"></i>  <?php echo $node->field_district['und'][0]['value'].', '.$node->field_state['und'][0]['value'].', '.$node->field_country['und'][0]['value'] ?></span>
                        </div>
                        <div class="profile-inr">
                            <span> <i class="fa fa-inr"></i> <?php echo $node->field_minimum_price['und'][0]['value']; ?> +</span>
                        </div>

                        <div class="profile-star col-md-6 col-sm-6 p-0">
                        <?php print render($content['field_rate_us']); ?>
                        </div>
                        <div class="socal_media col-md-6 col-sm-6">
                            <ul class="social-icons">
                                <li>Share on  </li>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $gplus; ?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $pinterest; ?>"><i class="fa fa-pinterest"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav-overview">
                        <li><a href="#" class="active">OVERVIEW</a></li>
                        <li><a href="#">PHOTOS</a></li>
                        <li><a href="#">videos</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 over_main">
                    <?php if(!empty($node->body['und'][0]['value'])) { ?>
                        <div class="over_main_section">
                            <h2>About</h2>
                            <?php echo $node->body['und'][0]['value']; ?>
                        </div>
                    <?php } ?>
                    <div class="over_main_section">
                        <h2>Album</h2>
                        <div class="demo-gallery">
                            <ul id="lightgallery" class="list-unstyled row">
                                <?php
                                $i = 0;
                                for($i=0; $i<count($node->field_gallery['und']); $i++){ ?>
                                    <li class="col-xs-6 col-sm-4 col-md-4" data-responsive="<?php print file_create_url($node->field_gallery['und'][$i]['uri']); ?>" data-src="<?php print file_create_url($node->field_gallery['und'][$i]['uri']); ?>">
                                        <a href="">
                                            <img class="img-responsive" src="<?php print file_create_url($node->field_gallery['und'][$i]['uri']); ?>">
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- gallery close -->
                    </div>
                    <div class="over_main_section">
                        <h2>Videos</h2>
                        <div class="video-gallery">
                            <?php print render($content['field_video']); ?>
                        </div>
                    </div>
                    <div class="over_main_section">
                        <h2>Services</h2>
                        <ul class="over_service-list">
                            <h4>Conducting events</h4>
                            <?php
                            $i = 0;
                            for($i=0; $i<count($node->field_events['und']); $i++){
                                echo '<li><i class="fa fa-check-circle"></i>'.$node->field_events['und'][$i]['value'].'</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="over_main_section">
                        <h2>Contact information</h2>
                        <div class="over_aadr col-md-5 col-sm-12 col-xs-12">
                            <h4 class="over_addr_title">Office Address</h4>
                            <div class="over_addr_content">
                                <?php echo $node->field_address['und'][0]['value'].','.$node->field_area['und'][0]['value'].','.$node->field_district['und'][0]['value'].'-'.$node->field_pincode['und'][0]['value'].','.$node->field_state['und'][0]['value'].','.$node->field_country['und'][0]['value'] ?>
                            </div>
                        </div>
                        <div class="over_aadr col-md-3 col-sm-5 col-xs-12">
                            <h4 class="over_addr_title">Phone Number</h4>
                            <?php
                            $i = 0;
                            for($i=0; $i<count($node->field_primary_phone['und']); $i++){
                                echo '<div class="over_addr_phone">'.$node->field_primary_phone['und'][$i]['value']."</div>";
                            }
                            ?>
                        </div>
                        <div class="col-md-4 col-sm-7 col-xs-12 xs-p-0">
                            <h4 class="over_addr_title">Email Id</h4>
                            <?php
                            $i = 0;
                            for($i=0; $i<count($node->field_primary_email['und']); $i++){
                            echo '<div class="over_addr_phone">'.$node->field_primary_email['und'][$i]['value']."</div>";
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="socal_media">
                            <ul class="social-icons">
                                <li>Share on  </li>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $gplus; ?>"><i class="fa fa-google-plus"></i></a></li>
                                <?php } ?>
                                <?php if($node->field_facebook_url['und'][0]['value']) { ?>
                                    <li><a target="_blank" href="<?php print $pinterest; ?>"><i class="fa fa-pinterest"></i></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php if(!empty($node->field_map['und'][0]['value'])) { ?>
                            <div class="over_map">
                                <?php echo $node->field_map['und'][0]['value']; ?>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- side panel -->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="over_get">
                    <h3>Get a Quote</h3>
                    <div class="over_get_quote">
                        <?php
                        $submission = (object) array();
                        $enabled = TRUE;
                        $preview = FALSE;
                        $node = node_load(84);
                        $output = drupal_get_form('webform_client_form_84   ', $node, $enabled, $preview);
                        print_r(render($output));
                        ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="adv_260">
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_1.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_2.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_3.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_4.png"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_1.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_2.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_3.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_4.png"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_1.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_2.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>/img/e_3.jpg"></a>
                    </div>
                    <div class="adv_260_img">
                        <a href="#"><img src="<?php echo  $imagePath; ?>    /img/e_4.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php print render($content['comments']); ?>

