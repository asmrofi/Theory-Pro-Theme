<?php


function theory_banner_sec(){
vc_map(array(

      'name' => __('Banner section','theory-pro'),
      'description' => 'This is Banner Section',
      'base' => 'banner_section',
      'category' => 'Theory Pro',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'banner_title',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),

        array(

            'param_name' => 'banner_des',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),
      )

  ));

  //Section One

  vc_map(array(

      'name' => __('Section One','theory-pro'),
      'description' => 'This is a Section One',
      'base' => 'section_one',
      'category' => 'Theory Pro',
      'icon' => 'fa fa-map',
      'params' => array(
          array(
                'type' => 'param_group',
                'heading' => 'Section One',
                'param_name' => 'card_section_one_group',
                'params' => array(
                    array(
        
                        'param_name' => 'title1',
                        'type' => 'textfield',
                        'heading' => 'Title',
                        'value' => '',
                    ),
                    array(
                        'param_name' => 'description1',
                        'type' => 'textarea',
                        'heading' => 'Description',
                        'value' => '',
                    ),
                    array(
                        'param_name' => 'button1',
                        'type' => 'textfield',
                        'heading' => 'Button Name',
                        'value' => '',
                    ),
                    array(
                        'param_name' => 'link1',
                        'type' => 'textfield',
                        'heading' => 'Button Links',
                        'value' => '',
                    ),
                )
            ),
     )
  ));
  //Testimonials : Section Two
  vc_map(array(

      'name' => __('Section Two','theory-pro'),
      'description' => 'This is a Section Two',
      'base' => 'section_two',
      'category' => 'Theory Pro',
      'icon' => 'fa fa-map',
      'params' => array(
        array(
            'param_name' => 'title2',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),
        array(

            'param_name' => 'description2',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),
        array(
            'type' => 'param_group',
            'heading' => 'Section Two',
            'param_name' => 'card_section_two_group',
            'params' => array(
                 array(
        
                    'param_name' => 'image',
                    'type' => 'attach_image',
                    'heading'=> 'Image',
                   
                ),
                array(

                    'param_name' => 'author_name',
                    'type' => 'textfield',
                    'heading'=> 'Author Name',
                    'value' => ''
                ),
               
               array(
                    'param_name' => 'author_designation',
                    'type' => 'textfield',
                    'heading'=> 'Author Designation',
                    'value' => ''
                ),
            ),
        ),
      )
  ));

// Section Three
     vc_map(array(

      'name' => __('Section Three','theory-pro'),
      'description' => 'This is a Section Three',
      'base' => 'section_three',
      'category' => 'Theory Pro',
      'icon' => 'fa fa-map',
      'params' => array(
        array(
            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> 'Title',
            'value' => ''
        ),
        array(

            'param_name' => 'description',
            'type' => 'textarea',
            'heading'=> 'Description',
            'value' => ''
        ),
        array(
            'type' => 'param_group',
            'heading' => 'Section Three',
            'param_name' => 'card_section_three_group',
            'params' => array(
              array(      
                    'param_name' => 'image',
                    'type' => 'attach_image',
                    'heading'=> 'Image',                  
                ),
                array(
                    'param_name' => 'title3',
                    'type' => 'textfield',
                    'heading'=> 'Title',
                    'value' => ''
                ),
                array(
                    'param_name' => 'description3',
                    'type' => 'textarea',
                    'heading'=> 'Description',
                    'value' => ''
                ),            
                array(
                    'param_name' => 'button3',
                    'type' => 'textfield',
                    'heading' => 'Button',
                    'value' => '',
                ),
                array(
                    'param_name' => 'link3',
                    'type' => 'textfield',
                    'heading' => 'Button Links',
                    'value' => '',
                ),
            ),
        ),
      )
  ));

  
    
   
  
 }
add_action("vc_before_init","theory_banner_sec");



?>
