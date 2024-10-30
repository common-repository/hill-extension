<?php
global $hill_global;
$hill_team_heading = get_theme_mod( 'hill_team_heading',$hill_global['hill_team_heading']);
$hill_team_sub_heading = get_theme_mod( 'hill_team_sub_heading',$hill_global['hill_team_sub_heading']);
$hill_team_number=get_theme_mod( 'hill_team_number');
?>
<section class="hill_team hill_section_ex hill_section_space">
    <div class="hill-container">
    <div class="hill_team_slider">
        <div class="hill_section_heading"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
            <h3><?php echo $hill_team_heading;?></h3>
            <p><?php echo $hill_team_sub_heading;?></p>
        </div>
        <div class="hill_team_slider_inner"  data-aos="fade-up"  data-aos-duration="<?php echo $hill_global['hill_fade_duration'];?>">
        <?php
        foreach($hill_team_number as $key_hill_team_number=>$val_hill_team_number){
            $hill_team_image = $val_hill_team_number['hill_team_image'];
            $hill_team_title = $val_hill_team_number['hill_team_title'];
            $hill_team_description = $val_hill_team_number['hill_team_description'];
            $hill_team_button_link = $val_hill_team_number['hill_team_button_link'];
        ?>
        <div class="hill_team_slider_loop">
            <div class="hill_team_slider_loop_innner">
                <div class="hill_team_slider_hero_image">
                    <?php 
                    if($hill_team_image){ 
                    ?>
                    <img src="<?php echo $hill_team_image;?>">
                    <?php 
                    }else{
                    ?>
                    <img src="<?php echo HILL_EX_PLUGIN_DIR.'/assets/images/default-500x500.jpg'; ?>" alt="">
                    <?php
                    } 
                    ?>
                </div>
                <div class="hill_team_slider_hero_content">
                    <div class="hill_team_slider_hero_content_inner">
                       

                        <a href="<?php echo $hill_team_button_link;?>" class="">
                            <h3 class="hill_team_title"><?php echo $hill_team_title;?></h3>
                            <h4 class="hill_team_description"><?php echo $hill_team_description;?></h4>
                        </a>
                        <div class="hill_team_social_icon">
                            <div class="hill_team_inner_social_icon">
                            <?php
                            foreach ($hill_global['social_array'] as $key_social_array => $value_social_array) {
                                $socialinkis = $val_hill_team_number['hill_team_'.$key_social_array.'_link'];
                                if($socialinkis!=''){
                                    echo '<div class="hill_team_inner_social_icon_i">';
                                    echo '<a href="'.$socialinkis.'" target="_blank">';
                                    echo '<i class="fa fa-'.$value_social_array['icon'].'"></i>';
                                    echo '</a>';
                                    echo '</div>';
                                }
                            }
                            ?>
                            </div>
                        </div>
                        
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