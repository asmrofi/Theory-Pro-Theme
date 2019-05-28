<?php
//Banner Section
add_shortcode('banner_section','banner_sec');
function banner_sec($banner){
extract(
shortcode_atts(array(

 'banner_title' => '',
 'banner_des'   => '',
 
),$banner)
);
ob_start();
?>
<section id="banner">
    <h1><?php echo esc_html($banner_title);?></h1>
    <p><?php echo esc_html($banner_des);?></p>
</section>
<?php
return ob_get_clean();
}



//Section One
add_shortcode('section_one','section1');
function section1($one){
extract(
shortcode_atts(array(

 'title1'                 => '',
 'description1'           => '',
 'card_section_one_group' => '',
 'button1'                => '',
 'link1'                  => '',
),$one)
);
ob_start();
?>

<section id="one" class="wrapper">
    <div class="inner">
        <div class="flex flex-3">
            <?php 
	           $sec_one_array_loop=vc_param_group_parse_atts($card_section_one_group);
	           foreach($sec_one_array_loop as $sec_one_loop_value):
            ?>

            <article>
                <header>
                    <h3><?php echo esc_html($sec_one_loop_value['title1']);?></h3>
                </header>
                <p><?php echo esc_html($sec_one_loop_value['description1']);?></p>
                <footer>
                    <a href="<?php echo esc_html($sec_one_loop_value['link1']);?>" class="button special"><?php echo esc_html($sec_one_loop_value['button1']);?></a>
                </footer>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
return ob_get_clean();
}



//Section Two
add_shortcode('section_two','section2');
function section2($two){
extract(
shortcode_atts(array(
'title2'                    => '',
'description2'              => '',
'card_section_two_group'    => '',
'image'                     => '',
'author_name'               => '',
'author_designation'        => '',
),$two)
);
ob_start();
?>

<section id="two" class="wrapper style1 special">
    <div class="inner">
        <header>
            <h2><?php echo esc_html($title2);?></h2>
            <p><?php echo esc_html($description2);?></p>
        </header>
        <div class="flex flex-4">
            <?php 
	           $sec_two_array_loop=vc_param_group_parse_atts($card_section_two_group);
	           foreach($sec_two_array_loop as $sec_two_loop_value):
            ?>
            <div class="box person">
                <div class="image round">
                    <?php 
						$section_two_image = wp_get_attachment_image_src($sec_two_loop_value['image']);
						if($section_two_image){ ?>
                    <img src="<?php echo esc_url($section_two_image[0]);?>" alt="Image" />
                    <?php } ?>
                </div>
                <h3><?php echo esc_html($sec_two_loop_value['author_name']);?></h3>
                <p><?php echo esc_html($sec_two_loop_value['author_designation']);?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
return ob_get_clean();
}



//Section Three
add_shortcode('section_three','section3');
function section3($three){
extract(
shortcode_atts(array(
'title'                     => '',
'description'               => '',
'card_section_three_group'  => '',
'image'                     => '',
'title3'                    => '',
'description3'              => '',
'button3'                   => '',
'link3'                     => '',
),$three)
);
ob_start();
?>
<section id="three" class="wrapper special">
    <div class="inner">
        <header class="align-center">
            <h2><?php echo esc_html($title);?></h2>
            <p><?php echo esc_html($description);?></p>
        </header>
        <div class="flex flex-2">
            <?php 
	           $sec_three_array_loop=vc_param_group_parse_atts($card_section_three_group);
	           foreach($sec_three_array_loop as $sec_three_loop_value):
            ?>
            <article>
                <div class="image fit">
                    <?php 
						$section_three_image = wp_get_attachment_image_src($sec_three_loop_value['image']);
						if($section_three_image){ ?>
                    <img src="<?php echo esc_url($section_three_image[0]);?>" alt="Pic" />

                    <?php } ?>
                </div>
                <header>
                    <h3><?php echo esc_html($sec_three_loop_value['title3']);?></h3>
                </header>
                <p><?php echo esc_html($sec_three_loop_value['description3']);?></p>
                <footer>
                    <a href="<?php echo esc_html($sec_three_loop_value['link3']);?>" class="button special"><?php echo esc_html($sec_three_loop_value['button3']);?></a>
                </footer>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
return ob_get_clean();
    
}
