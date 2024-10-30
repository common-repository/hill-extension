<?php
global $hill_global;
$hill_about_heading = get_theme_mod( 'hill_about_heading',$hill_global['hill_about_heading']);
$hill_about_sub_heading = get_theme_mod( 'hill_about_sub_heading',$hill_global['hill_about_sub_heading']);
$hill_about_image = get_theme_mod( 'hill_about_image');
$hill_about_title = get_theme_mod( 'hill_about_title',$hill_global['hill_about_title']);
$hill_about_sub_title = get_theme_mod( 'hill_about_sub_title',$hill_global['hill_about_sub_title']);
$hill_about_description = get_theme_mod( 'hill_about_description',$hill_global['hill_about_description']);
?>
<section class="hill_about hill_section_ex hill_section_space">
    <div class="hill-container">
        <div class="hill_about_top">
            <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
                <h3><?php echo $hill_about_heading;?></h3>
                <p><?php echo $hill_about_sub_heading;?></p>
            </div>
            <div class="hill_about_inner">
                <div class="hill_about_image" data-aos="fade-right"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
                    <?php 
                    if($hill_about_image){ 
                    ?>
                    <img src="<?php echo $hill_about_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/default-500x500.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?> 
                </div>
                <div class="hill_about_text"  data-aos="fade-left" data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
                    <?php
                    if($hill_about_title!=''){
                    ?>
                    <h3 class="h3"><?php echo $hill_about_title;?></h3>
                    <?php
                    }
                    ?>
                    <?php
                    if($hill_about_sub_title!=''){
                    ?>
                    <h4 class="h1"><?php echo $hill_about_sub_title;?></h4>
                    <?php
                    }
                    ?>
                    <?php
                    if($hill_about_description!=''){
                    ?>
                    <p><?php echo $hill_about_description;?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>