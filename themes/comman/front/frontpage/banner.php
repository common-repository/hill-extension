<?php
global $hill_global;
$hill_banner_number=get_theme_mod( 'hill_banner_number',$hill_global['hill_banner_number']);
if(!empty($hill_banner_number)){

?>
<section class="hill_banner hill_section_ex">
    <div class="hill_banner_slider owl-carousel owl-theme">
        <?php
        foreach($hill_banner_number as $key_hill_banner_number=>$val_hill_banner_number){
            $hill_banner_image = $val_hill_banner_number['hill_banner_image'];
            $hill_banner_title = $val_hill_banner_number['hill_banner_title'];
            $hill_banner_description = $val_hill_banner_number['hill_banner_description'];
            $hill_banner_button = $val_hill_banner_number['hill_banner_button'];
            $hill_banner_button_link = $val_hill_banner_number['hill_banner_button_link'];
        ?>
        <div class="hill_banner_slider_loop item">
            <div class="hill_banner_slider_loop_innner">
                <div class="hill_banner_slider_hero_image">
                    <?php 
                    if($hill_banner_image!=''){ 
                    ?>
                    <img src="<?php echo $hill_banner_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/banner-default.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?> 
                    
                </div>
                <div class="hill_banner_slider_hero_content">
                    <div class="hill_banner_slider_hero_content_inner">
                        <h1 class="hill_banner_title"><?php echo $hill_banner_title;?></h3>
                        <h3 class="hill_banner_description"><?php echo $hill_banner_description;?></h6>
                        <?php
                        if ($hill_banner_button!='') {
                        ?>
                        <a href="<?php echo $hill_banner_button_link;?>" class="hill_button buttons"><?php echo $hill_banner_button;?></a>
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
</section>
<?php
}