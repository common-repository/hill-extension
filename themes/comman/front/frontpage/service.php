<?php
global $hill_global;
$hill_service_heading = get_theme_mod( 'hill_service_heading',$hill_global['hill_service_heading']);
$hill_service_sub_heading = get_theme_mod( 'hill_service_sub_heading',$hill_global['hill_service_sub_heading']);
$hill_service_number=get_theme_mod( 'hill_service_number',$hill_global['hill_service_number']);
?>
<section class="hill_service hill_section_ex hill_section_space">
    <div class="hill-container">
    <div class="hill_service_slider">
        <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
            <h3><?php echo $hill_service_heading;?></h3>
            <p><?php echo $hill_service_sub_heading;?></p>
        </div>
        <div class="hill_service_slider_inner"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
        <?php
        foreach($hill_service_number as $key_hill_service_number=>$val_hill_service_number){
            $hill_service_icon = $val_hill_service_number['hill_service_icon'];
            $hill_service_title = $val_hill_service_number['hill_service_title'];
            $hill_service_description = $val_hill_service_number['hill_service_description'];
            $hill_service_button_link = $val_hill_service_number['hill_service_button_link'];
        ?>
        <div class="hill_service_slider_loop">
            <a href="<?php echo $hill_service_button_link;?>" class="">
                <div class="hill_service_slider_loop_innner">
                    
                        <div class="hill_service_slider_hero_image">
                            <i class="fa <?php echo $hill_service_icon;?>" aria-hidden="true"></i>
                        </div>
                        <div class="hill_service_slider_hero_content">
                            <div class="hill_service_slider_hero_content_inner">
                               
                                    <h3 class="hill_service_title mt-0 mb-0"><?php echo $hill_service_title;?></h3>
                                    <h4 class="hill_service_description"><?php echo $hill_service_description;?></h4>
                                
                                
                            </div>
                        </div>
                    
                </div>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
    </div>
    </div>
</section>