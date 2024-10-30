<?php
global $hill_global;
$hill_sponsors_heading = get_theme_mod( 'hill_sponsors_heading',$hill_global['hill_sponsors_heading']);
$hill_sponsors_sub_heading = get_theme_mod( 'hill_sponsors_sub_heading',$hill_global['hill_sponsors_sub_heading']);
$hill_sponsors_number=get_theme_mod( 'hill_sponsors_number',$hill_global['hill_sponsors_number']);
?>
<section class="hill_sponsors hill_section_ex hill_section_space">
    <div class="hill-container">
    <div class="hill_sponsors_slider">
        <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
            <h3><?php echo $hill_sponsors_heading;?></h3>
            <p><?php echo $hill_sponsors_sub_heading;?></p>
        </div>
        <div class="hill_sponsors_slider_inner owl-carousel owl-theme"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
        <?php
        foreach($hill_sponsors_number as $key_hill_sponsors_number=>$val_hill_sponsors_number){
            $hill_sponsors_image = $val_hill_sponsors_number['hill_sponsors_image'];
            $hill_sponsors_link = $val_hill_sponsors_number['hill_sponsors_link'];

        ?>
        <div class="hill_sponsors_slider_loop">
            <div class="hill_sponsors_slider_loop_innner">
                <div class="hill_sponsors_slider_hero_image">
                    <a href="<?php echo $hill_sponsors_link;?>" target="_blank">
                    <?php 
                    if($hill_sponsors_image!=''){ 
                    ?>
                    <img src="<?php echo $hill_sponsors_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/default-500x500.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?> 
                    </a>
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