<?php
global $hill_global;
$hill_tesimonial_heading = get_theme_mod( 'hill_tesimonial_heading',$hill_global['hill_tesimonial_heading']);
$hill_tesimonial_sub_heading = get_theme_mod( 'hill_tesimonial_sub_heading',$hill_global['hill_tesimonial_sub_heading']);
$hill_tesimonial_number=get_theme_mod( 'hill_tesimonial_number',$hill_global['hill_tesimonial_number']);
?>
<section class="hill_tesimonial hill_section_ex hill_section_space">
    <div class="hill-container">
    <div class="hill_tesimonial_slider">
        <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
            <h3><?php echo $hill_tesimonial_heading;?></h3>
            <p><?php echo $hill_tesimonial_sub_heading;?></p>
        </div>
        <div class="hill_tesimonial_slider_inner owl-carousel owl-theme"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
        <?php
        foreach($hill_tesimonial_number as $key_hill_tesimonial_number=>$val_hill_tesimonial_number){
            $hill_tesimonial_image = $val_hill_tesimonial_number['hill_tesimonial_image'];
            $hill_tesimonial_title = $val_hill_tesimonial_number['hill_tesimonial_title'];
            $hill_tesimonial_designation = $val_hill_tesimonial_number['hill_tesimonial_designation'];
            $hill_tesimonial_description = $val_hill_tesimonial_number['hill_tesimonial_description'];
        ?>
        <div class="hill_tesimonial_slider_loop">
            <div class="hill_tesimonial_slider_loop_innner">
                <div class="hill_tesimonial_slider_hero_image">
                    <?php 
                    if($hill_tesimonial_image){ 
                    ?>
                    <img src="<?php echo $hill_tesimonial_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/default-500x500.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?>
                </div>
                <div class="hill_tesimonial_slider_hero_content">
                    <div class="hill_tesimonial_slider_hero_content_inner">
                        <h3 class="hill_tesimonial_title"><?php echo $hill_tesimonial_title;?></h3>
                        <h4 class="hill_tesimonial_designation"><?php echo $hill_tesimonial_designation;?></h4>
                        <p class="hill_tesimonial_description"><?php echo $hill_tesimonial_description;?></p>
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