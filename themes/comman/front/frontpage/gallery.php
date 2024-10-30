<?php
global $hill_global;
$hill_gallery_heading = get_theme_mod( 'hill_gallery_heading',$hill_global['hill_gallery_heading']);
$hill_gallery_sub_heading = get_theme_mod( 'hill_gallery_sub_heading',$hill_global['hill_gallery_sub_heading']);
$hill_gallery_number=get_theme_mod( 'hill_gallery_number',$hill_global['hill_gallery_number']);
?>
<section class="hill_gallery hill_section_ex hill_section_space">
    <div class="hill-container">
    <div class="hill_gallery_slider">
        <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
            <h3><?php echo $hill_gallery_heading;?></h3>
            <p><?php echo $hill_gallery_sub_heading;?></p>
        </div>
        <div class="hill_gallery_slider_inner"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
        <?php
        foreach($hill_gallery_number as $key_hill_gallery_number=>$val_hill_gallery_number){
            $hill_gallery_image = $val_hill_gallery_number['hill_gallery_image'];
            $hill_gallery_title = $val_hill_gallery_number['hill_gallery_title'];
            $hill_gallery_description = $val_hill_gallery_number['hill_gallery_description'];
            $hill_gallery_button_link = $val_hill_gallery_number['hill_gallery_button_link'];

        ?>
        <div class="hill_gallery_slider_loop">
            <div class="hill_gallery_slider_loop_innner">
                <div class="hill_gallery_slider_hero_image">
                    <?php 
                    if($hill_gallery_image!=''){ 
                    ?>
                    <img src="<?php echo $hill_gallery_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/default-500x500.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?> 
                </div>
                <div class="hill_gallery_slider_hero_content">
                    <div class="hill_gallery_slider_hero_content_inner">
                        <h3 class="hill_gallery_title"><?php echo $hill_gallery_title;?></h3>
                        <h4 class="hill_gallery_description"><?php echo $hill_gallery_description;?></h4>
                        <?php
                        if ($hill_gallery_button_link!='') {
                        ?>
                        <a href="<?php echo $hill_gallery_button_link;?>" class="hill_button buttons">Read More</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    </div>
    </div>
</section>